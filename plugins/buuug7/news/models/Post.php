<?php namespace Buuug7\News\Models;

use Ausi\SlugGenerator\SlugGenerator;
use Backend\Facades\BackendAuth;
use Buuug7\News\Components\Posts;
use Carbon\Carbon;
use Cms\Classes\Controller;
use Model;
use Backend\Models\User;
use October\Rain\Database\Traits\Sluggable;
use October\Rain\Database\Traits\Validation;
use ValidationException;
use Lang;
use Db;

/**
 * Post Model
 */
class Post extends Model
{
    use Validation;
    use Sluggable;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_news_posts';


    protected $slugs = [
        'slug' => 'title',
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];


    protected $jsonable = [
        'images',
        'files',
    ];

    /*
 * Validation
 */
    public $rules = [
        'title' => 'required',
        'content' => 'required',
        'summary' => 'required',
    ];

    public $customMessages = [
        'required' => '请填写 :attribute ',
    ];

    public $attributeNames = [
        'title' => '标题',
        'slug' => '别名',
        'content' => '内容',
        'summary' => '概述',
        'published_at' => '发布时间',
    ];


    /**
     * Relations
     */

    public $belongsTo = [
        'user' => ['Backend\Models\User']
    ];

    public $hasMany = [
    ];


    public $belongsToMany = [
        'categories' => [
            'Buuug7\News\Models\Category',
            'table' => 'buuug7_news_posts_categories',
            'order' => 'name',
        ],
    ];


    /**
     * The attributes on which the post list can be ordered
     * @var array
     */
    public static $allowedSortingOptions = [
        'title asc' => 'Title (ascending)',
        'title desc' => 'Title (descending)',
        'featured asc' => 'Featured (ascending)',
        'featured desc' => 'Featured (descending)',
        'created_at asc' => 'Created (ascending)',
        'created_at desc' => 'Created (descending)',
        'updated_at asc' => 'Updated (ascending)',
        'updated_at desc' => 'Updated (descending)',
        'published_at asc' => 'Published (ascending)',
        'published_at desc' => 'Published (descending)',
        'random' => 'Random'
    ];

    /**
     * The attributes that should be mutated to dates.
     * @var array
     */
    protected $dates = ['published_at'];

    //
    // Scopes
    //
    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<', Carbon::now());
    }

    /**
     * Used to test if a certain user has permission to edit post,
     * returns TRUE if the user is the owner or has other posts access.
     * @param User $user
     * @return bool
     */
    public function canEdit(User $user)
    {
        return ($this->user_id == $user->id) || $user->hasAnyAccess(['buuug7.news.access_other_posts']);
    }


    /**
     * Allows filtering for specifc categories
     * @param  Illuminate\Query\Builder $query QueryBuilder
     * @param  array $categories List of category ids
     * @return Illuminate\Query\Builder              QueryBuilder
     */
    public function scopeFilterCategories($query, $categories)
    {
        return $query->whereHas('categories', function ($q) use ($categories) {
            $q->whereIn('id', $categories);
        });
    }

    /**
     * Limit visibility of the published-button
     * @return void
     */
    public function filterFields($fields, $context = null)
    {
        if (!isset($fields->published, $fields->published_at)) {
            return;
        }

        $user = BackendAuth::getUser();

        if (!$user->hasAnyAccess(['buuug7.news.access_publish'])) {
            $fields->published->hidden = true;
            $fields->published_at->hidden = true;
        } else {
            $fields->published->hidden = false;
            $fields->published_at->hidden = false;
        }
    }

    public function afterValidate()
    {
        if ($this->published && !$this->published_at) {
            throw new ValidationException([
                'published_at' => '请指定发布日期'
            ]);
        }
    }

    /**
     * Lists posts for the front end
     * @param  array $options Display options
     * @return self
     */
    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page' => 1,
            'perPage' => 30,
            'sort' => 'created_at',
            'categories' => null,
            'category' => null,
            'search' => '',
            'published' => true,
        ], $options));

        $searchableFields = ['title', 'slug'];

        if ($published) {
            $query->isPublished();
        }

        /*
         * sorting
         * */
        if (!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {
            if (in_array($_sort, array_keys(self::$allowedSortingOptions))) {
                $parts = explode(' ', $_sort);
                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }
                list($sortField, $sortDirection) = $parts;
                if ($sortField == 'random') {
                    $sortField = Db::raw('RAND()');
                }
                $query->orderBy($sortField, $sortDirection);
            }
        }

        /*
         * Search
         * */
        $search = trim($search);
        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }

        /*
         * Categories
         * */
        if ($categories !== null) {
            if (!is_array($categories)) {
                $categories = [$categories];
            }
            $query->whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('id', $categories);
            });
        }

        /*
         * category,including children
         * */
        if ($category !== null) {
            $category = Category::find($category);

            $categories = $category->getAllChildrenAndSelf()->lists('id');
            $query->whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('id', $categories);
            });
        }

        return $query->paginate($perPage, $page);

    }

    /**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        if (array_key_exists('categories', $this->getRelations())) {
            $params['category'] = $this->categories->count() ? $this->categories->first()->slug : null;
        }

        //expose published year, month and day as URL parameters
        if ($this->published) {
            $params['year'] = $this->published_at->format('Y');
            $params['month'] = $this->published_at->format('m');
            $params['day'] = $this->published_at->format('d');
        }

        return $this->url = $controller->pageUrl($pageName, $params);
    }


    /**
     * show featured post with limit
     * @param $query
     * @param $limit
     * @return mixed
     */
    public function scopeDisplayFeatured($query, $limit)
    {
        $query->isPublished();
        return $query->where('featured', 1)->orderBy('published_at', 'desc')->limit($limit)->get();
    }

    /**
     * 获取置顶的post
     * @param $query
     * @param $limit
     * @return mixed
     */
    public function scopeDisplayTop($query, $limit)
    {
        $query->isPublished();
        return $query->where('top', 1)->orderBy('published_at', 'desc')->limit($limit)->get();
    }

    public function scopeDisplayLatest($query, $limit)
    {
        $query->isPublished();
        $query->orderBy('published_at', 'desc');
        return $query->limit($limit)->get();
    }

    public function scopeDisplayByCategory($query, $category, $limit)
    {
        $query->isPublished();
        $query->orderBy('published_at', 'desc');
        $category = Category::where('slug', $category)->first();
        if (!$category) {
            return null;
        }
        $categories = $category->getAllChildrenAndSelf()->lists('id');
        $query->whereHas('categories', function ($q) use ($categories) {
            $q->whereIn('id', $categories);
        });
        return $query->limit($limit)->get();
    }

    public function scopeSearch($query, $search)
    {
        $postsComponent = new Posts();
        $controller = new Controller();

        $searchableFields = ['title', 'slug'];
        $posts = $query->isPublished()->searchWhere($search, $searchableFields)->paginate(15);

        $posts->each(function ($post) use ($postsComponent, $controller) {
            // add url to post
            $post->setUrl($postsComponent->property('postPage'), $controller);
            // add url to categories
            $post->categories->each(function ($category) use ($postsComponent, $controller) {
                $category->setUrl($postsComponent->property('categoryPage'), $controller);
            });
        });
        return $posts;
    }


    // Override the Sluggable trait method
    public function setSluggedValue($slugAttribute, $sourceAttributes, $maxLength = 240)
    {
        if (!isset($this->$slugAttribute) || !strlen($this->{$slugAttribute})) {
            if (!is_array($sourceAttributes)) {
                $sourceAttributes = [$sourceAttributes];
            }

            $slugArr = [];

            foreach ($sourceAttributes as $attribute) {
                $slugArr[] = $this->getSluggableSourceAttributeValue($attribute);
            }

            $slug = implode(' ', $slugArr);
            $slug = substr($slug, 0, $maxLength);
            $generator = new SlugGenerator();
            $slug = $generator->generate($slug);
        } else {
            $slug = $this->{$slugAttribute};
        }
        return $this->{$slugAttribute} = $this->getSluggableUniqueAttributeValue($slugAttribute, $slug);
    }


}
