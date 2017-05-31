<?php namespace Buuug7\Courses\Models;

use Model;
use Cms\Classes\Page as CmsPage;
use Url;

/**
 * Tags Model
 */
class Tag extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_courses_tags';

    public $rules = [
        'name' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:buuug7_courses_tags']
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected static $nameList = null;

    public static $allowedSorting = [
        'name asc',
        'name desc',
        'created_at asc',
        'created_at desc',
        'updated_at asc',
        'updated_at desc',
        'random'
    ];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'courses' => ['Buuug7\Courses\Models\Course',
            'table' => 'buuug7_courses_tags_courses',
            'order' => 'publish_at desc',
            'scope' => 'isPublished',
        ],

        'categories' => [
            'Buuug7\Courses\Models\Categories',
            'table' => 'buuug7_courses_tags_categories',
        ],
    ];

    public function afterDelete()
    {
        $this->courses()->detach();
    }

    public function setUrl($pageName, $controller)
    {
        $params = [
            'id'   => $this->id,
            'slug' => $this->slug
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }

    public static function getNameList()
    {
        if (self::$nameList) {
            return self::$nameList;
        }

        return self::$nameList = self::orderBy('name', 'asc')->lists('name', 'id');
    }

    public function scopeListFrontEnd($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'    => 1,
            'perPage' => 30,
            'sort'    => 'created_at',
            'search'  => ''
        ], $options));

        $searchableFields = [
            'name',
            'slug',
            'description'
        ];

        /*
         * Sorting
         */
        if (!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {
            if (in_array($_sort, array_keys(self::$allowedSorting))) {
                $parts = explode(' ', $_sort);

                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }

                list($sortField, $sortDirection) = $parts;

                if ($sortField == 'random') {
                    $sortField = DB::raw('RAND()');
                }

                $query->orderBy($sortField, $sortDirection);
            }
        }

        /*
         * Search
         */
        $search = trim($search);
        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }

        return $query->paginate($perPage, $page);
    }
}
