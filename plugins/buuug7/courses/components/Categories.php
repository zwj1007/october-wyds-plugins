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
            'name' => 'buuug7.courses::lang.settings.category_title',
            'description' => 'buuug7.courses::lang.settings.category_description',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'buuug7.courses::lang.settings.category_slug',
                'description' => 'buuug7.courses::lang.settings.category_slug_description',
                'default' => '{{ :slug }}',
                'type' => 'string',
            ],

            'displayEmpty' => [
                'title' => 'buuug7.courses::lang.settings.category_display_empty',
                'description' => 'buuug7.courses::lang.settings.category_display_empty_description',
                'type' => 'checkbox',
                'default' => 0,
            ],
            'categoryPage' => [
                'title' => 'buuug7.courses::lang.settings.category_page',
                'description' => 'buuug7.courses::lang.settings.category_page_description',
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
        $categories = CourseCategory::orderBy('name');
        if (!$this->property('displayEmpty')) {
            $categories->whereExists(function ($query) {
                $prefix = Db::getTablePrefix();
                $query
                    ->select(Db::raw(1))
                    ->from('buuug7_courses_courses_categories')
                    ->join('buuug7_courses_courses', 'buuug7_courses_courses.id', '=', 'buuug7_courses_courses_categories.course_id');
                    //->whereNotNull('buuug7_news_posts.published')
                   // ->where('buuug7_news_posts.published', '=', 1)
                    //->whereRaw($prefix . 'buuug7_news_categories.id = ' . $prefix . 'buuug7_news_posts_categories.category_id');
            });

        }
        $categories = $categories->getNested();
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