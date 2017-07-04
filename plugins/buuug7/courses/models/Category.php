<?php namespace Buuug7\Courses\Models;

use Model;
use Illuminate\Support\Facades\Log;

/**
 * Category Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_courses_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /*
 * Validation
 */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:buuug7_courses_categories',
    ];


    public $customMessages = [
        'required' => '请填写 :attribute ',
    ];

    public $attributeNames = [
        'name' => '名称',
        'slug' => '别名',
    ];


    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'courses' => [
            'Buuug7\Courses\Models\Course',
            'table' => 'buuug7_courses_courses_categories',
            'order' => 'published_at desc',
            'scope' => 'isPublished',
        ],
        'tags' => [
            'Buuug7\Courses\Models\Tag',
            'table' => 'buuug7_courses_tags_categories',
        ],
    ];

    public function afterDelete()
    {
        $this->courses()->detach();
    }

    public function getCourseCountAttribute()
    {
        return $this->courses()->count();
    }

    public function getParentIdOptions()
    {
        $output = Category::get();
        $output = array_pluck($output, 'name', 'id');
        return $output;
    }

    public function beforeSave()
    {
        if ($this->parent_id === '') {
            $this->parent_id = null;
        }
    }

    public function setUrl($pageName, $controller)
    {
        $params=[
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        return $this->url=$controller->pageUrl($pageName,$params);
    }

}
