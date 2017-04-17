<?php namespace Buuug7\Courses\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Model;
use ValidationException;
use Backend\Models\User;
use Backend\Facades\BackendAuth;
use Lang;
use Db;

/**
 * course Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_courses_courses';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $jsonable = [
        'files',
    ];

    /*
    * Validation
    */
    public $rules = [
        'title' => 'required',
        'slug' => ['required', 'unique:buuug7_courses_courses'],
        'content' => 'required',
        'summary' => ''
    ];

    /**
     * @var array Relations
     */

    public $belongsTo = [
        'user' => ['Backend\Models\User']
    ];
    public $belongsToMany = [
        'categories' => [
            'Buuug7\Courses\Models\Category',
            'table' => 'buuug7_courses_courses_categories',
        ],
        'tags' => [
            'Buuug7\Courses\Models\Tag',
            'table' => 'buuug7_courses_tags_courses',
        ],
        'users' => [
            'RainLab\User\Models\User',
            'table' => 'buuug7_user_users_courses',
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
        return ($this->user_id == $user->id) || $user->hasAnyAccess(['buuug7.courses.access_other_courses']);
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

        if (!$user->hasAnyAccess(['buuug7.courses.access_publish'])) {
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
                'published_at' => '请选择发布日期'
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
            'tag' => null,
            'search' => '',
            'published' => true,
        ], $options));

        $searchableFields = ['title', 'slug', 'content'];

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

        /*
         * tag
         * */
        if ($tag !== null) {

            $tag = Tag::find($tag)->id;
            $query->whereHas('tags', function ($q) use ($tag) {
                $q->whereIn('id', [$tag]);
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

    public function afterDelete()
    {
        DB::table('buuug7_courses_tags_courses')->where('course_id', $this->id)->delete();
    }

    public function scopeFilterTags($query, $tags)
    {
        return $query->whereHas('tags', function ($q) use ($tags) {
            $q->whereIn('id', $tags);
        });
    }

    private $_tags = null;

    public function getTags()
    {
        if ($this->_tags === null) {
            $this->_tags = [];
            $sql = DB::table('buuug7_courses_tags_courses')->where('course_id', $this->id)->get();

            foreach ($sql as $item) {
                $tag = Tags::whereId($item->tags_id)->first();

                $this->_tags[$item->tags_id] = [
                    'name' => $tag->name,
                    'slug' => $tag->slug
                ];
            }
        }
        return $this->_tags;
    }

    public function scopeDisplayByTags($query, $tagsSlug, $limit)
    {
        if (!is_array($tagsSlug)) {
            $tagsSlug = [$tagsSlug];
        }
        $tags = Tag::whereIn('slug', $tagsSlug);
        if (!$tags) {
            return null;
        }

        $tags = $tags->get(['id'])->pluck('id');
        $query->isPublished();
        $query->whereHas('tags', function ($q) use ($tags) {
            $q->whereIn('id', $tags);
        });
        $query->orderBy('published_at', 'desc');

        return $query->limit($limit)->get();
        //Log::info($query->get()->toArray());
    }

    public function scopeDisplayByCategories($query, $categoriesSlug, $limit)
    {
        if (!is_array($categoriesSlug)) {
            $categoriesSlug = [$categoriesSlug];
        }

        $categories = Category::whereIn('slug', $categoriesSlug);

        if (!$categories) {
            return null;
        }
        $categories = $categories->get(['id'])->pluck('id');
        $query->isPublished();
        $query->whereHas('categories', function ($q) use ($categories) {
            $q->whereIn('id', $categories);
        });
        $query->orderBy('published_at', 'desc');
        return $query->limit($limit)->get();
    }

}
