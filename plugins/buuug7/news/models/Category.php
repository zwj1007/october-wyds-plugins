<?php namespace Buuug7\News\Models;

use Model;
use October\Rain\Database\Traits\NestedTree;
use October\Rain\Database\Traits\Validation;

/**
 * Category Model
 */
class Category extends Model
{
    use Validation;
    use NestedTree;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_news_categories';

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:buuug7_news_categories',
    ];

    public $customMessages = [
        'required' => '请填写 :attribute ',
    ];

    public $attributeNames = [
        'slug' => '别名',
        'name' => '名称',
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $belongsToMany = [
        'posts' => ['Buuug7\News\Models\Post',
            'table' => 'buuug7_news_posts_categories',
            'order' => 'publish_at desc',
            'scope' => 'isPublished',
        ],
    ];

    public function afterDelete()
    {
        $this->posts()->detach();
    }

    public function getPostCountAttribute()
    {
        return $this->posts()->count();
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
