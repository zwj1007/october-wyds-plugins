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
use Redirect;

class Posts extends ComponentBase
{
    public $posts;
    public $pageParam;
    public $category;
    public $noPostsMessage;
    public $postPage;
    public $categoryPage;
    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name' => 'buuug7.news::lang.settings.posts_title',
            'description' => 'buuug7.news::lang.setting.posts_description',
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title' => 'buuug7.news::lang.settings.posts_pagination',
                'description' => 'buuug7.news::lang.settings.posts_pagination_description',
                'type' => 'string',
                'default' => '{{ :page }}',
            ],
            'categoryFilter' => [
                'title' => 'buuug7.news::lang.settings.posts_filter',
                'description' => 'buuug7.news::lang.settings.posts_filter_description',
                'type' => 'string',
                'default' => '',
            ],
            'postsPerPage' => [
                'title' => 'buuug7.news::lang.settings.posts_per_page',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'buuug7.news::lang.settings.posts_per_page_validation',
                'default' => '10',
            ],
            'noPostsMessage' => [
                'title' => 'buuug7.news::lang.settings.posts_no_posts',
                'description' => 'buuug7.news::lang.settings.posts_no_posts_description',
                'type' => 'string',
                'default' => 'No posts found',
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title' => 'buuug7.news::lang.settings.posts_order',
                'description' => 'buuug7.news::lang.settings.posts_order_description',
                'type' => 'dropdown',
                'default' => 'published_at desc'
            ],
            'categoryPage' => [
                'title' => 'buuug7.news::lang.settings.posts_category',
                'description' => 'buuug7.news::lang.settings.posts_category_description',
                'type' => 'dropdown',
                'default' => 'news/category',
                'group' => 'Links',
            ],
            'postPage' => [
                'title' => 'buuug7.news::lang.settings.posts_post',
                'description' => 'buuug7.news::lang.settings.posts_post_description',
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
        $this->noPostsMessage = $this->page['noPostsMessage'] = $this->property('noPostsMessage');
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