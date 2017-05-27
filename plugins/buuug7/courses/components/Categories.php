<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/10
 * Time: 9:47
 * Desc:
 */

namespace Buuug7\Courses\Components;


use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Buuug7\Courses\Models\Category as CourseCategory;
use Db;
use Illuminate\Support\Facades\Log;


class Categories extends ComponentBase
{
    public $categories;
    public $categoryPage;
    public $currentCategorySlug;

    public function componentDetails()
    {
        return [
            'name' => '课程分类',
            'description' => '课程分类',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => '别名',
                'description' => '分类别名',
                'default' => '{{ :slug }}',
                'type' => 'string',
            ],
            'categoryPage' => [
                'title' => '分类页',
                'description' => '分类页',
                'type' => 'dropdown',
                'default' => 'courses/category',
            ],
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->currentCategorySlug = $this->page['currentCategorySlug'] = $this->property('slug');
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $this->categories = $this->page['categories'] = $this->loadCategories();
    }

    protected function loadCategories()
    {
        $categories = CourseCategory::getNested();
        return $this->linkCategories($categories);
    }

    protected function linkCategories($categories)
    {
        return $categories->each(function ($category) {
            $category->setUrl($this->categoryPage, $this->controller);
            if ($category->children) {
                $this->linkCategories($category->children);
            }
        });

    }

}