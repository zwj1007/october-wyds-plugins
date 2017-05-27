<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/8 0008
 * Time: 下午 6:25
 * Desc:
 */

namespace Buuug7\News\Components;


use Buuug7\News\Models\Category as NewsCategory;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Buuug7\News\Models\Post as NewsPost;
use Illuminate\Support\Facades\Log;
use Redirect;

class Posts extends ComponentBase
{
    public $posts;
    public $pageParam;
    public $category;
    public $postPage;
    public $categoryPage;
    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name' => '新闻列表',
            'description' => '显示新闻列表',
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title' => '分页数',
                'description' => '新闻列表分页数',
                'type' => 'string',
                'default' => '{{ :page }}',
            ],
            'categoryFilter' => [
                'title' => '分类过滤',
                'description' => '通过分类过滤新闻',
                'type' => 'string',
                'default' => '',
            ],
            'postsPerPage' => [
                'title' => '每页新闻数量',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => '只允许数字',
                'default' => '10',
            ],
            'sortOrder' => [
                'title' => '新闻排序',
                'description' => '新闻排序',
                'type' => 'dropdown',
                'default' => 'published_at desc'
            ],
            'categoryPage' => [
                'title' => '分类页面',
                'description' => '分类页面地址',
                'type' => 'dropdown',
                'default' => 'news/category',
                'group' => 'Links',
            ],
            'postPage' => [
                'title' => '新闻页',
                'description' => '新闻页地址',
                'type' => 'dropdown',
                'default' => 'news/post',
                'group' => 'Links',
            ],
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }


    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }


    public function getSortOrderOptions()
    {
        return NewsPost::$allowedSortingOptions;
    }


    public function onRun()
    {
        $this->prepareVars();
        $this->category = $this->page['category'] = $this->loadCategory();
        $this->posts = $this->page['posts'] = $this->listPosts();

        /*
         * If the page number is not valid, redirect
         * */

        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');
            if ($currentPage > ($lastPage = $this->posts->lastPage()) && $currentPage > 1) {
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
            }
        }
    }

    protected function prepareVars()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        /*
         * Page links
         * */
        $this->postPage = $this->page['postPage'] = $this->property('postPage');
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
    }

    protected function listPosts()
    {
        $category = $this->category ? $this->category->id : null;
        /*
         * List all the posts, eager load their categories
         */
        $posts = NewsPost::with('categories')->listFrontEnd([
            'page' => $this->property('pageNumber'),
            'sort' => $this->property('sortOrder'),
            'perPage' => $this->property('postsPerPage'),
            'search' => trim(input('search')),
            'category' => $category,
        ]);

        /*
         * Add a "url" helper attribute for linking to each post and category
         */
        $posts->each(function ($post) {
            $post->setUrl($this->postPage, $this->controller);
            $post->categories->each(function ($category) {
                $category->setUrl($this->categoryPage, $this->controller);
            });
        });

        return $posts;

    }

    protected function loadCategory()
    {
        if (!$slug = $this->property('categoryFilter')) {
            return null;
        }
        $category = new NewsCategory();

        $category = $category->where('slug', $slug)->first();

        return $category ?: null;

    }

}