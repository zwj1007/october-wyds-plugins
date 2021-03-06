<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/10
 * Time: 9:47
 * Desc:
 */

namespace Buuug7\News\Components;


use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Buuug7\News\Models\Category as NewsCategory;
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
            'name' => '新闻分类',
            'description' => '显示新闻分类',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => '分类别名',
                'description' => '新闻分类别名',
                'default' => '{{ :slug }}',
                'type' => 'string',
            ],

            'displayEmpty' => [
                'title' => '显示空分类',
                'description' => '是否显示空的分类',
                'type' => 'checkbox',
                'default' => 0,
            ],
            'categoryPage' => [
                'title' => '分类页',
                'description' => '分类页地址',
                'type' => 'dropdown',
                'default' => 'news/category',
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
        $categories = NewsCategory::orderBy('name');
        if (!$this->property('displayEmpty')) {
            $categories->whereExists(function ($query) {
                //$prefix = Db::getTablePrefix();
                //$query
                    //->select(Db::raw(1));
                   // ->from('buuug7_news_posts_categories')
                    //->join('buuug7_news_posts', 'buuug7_news_posts.id', '=', 'buuug7_news_posts_categories.post_id');
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