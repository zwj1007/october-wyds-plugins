<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/8 0008
 * Time: 下午 6:25
 * Desc:
 */

namespace Buuug7\Courses\Components;

use Buuug7\Courses\Models\Category as CoursesCategory;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Buuug7\Courses\Models\Course as CoursesCourse;
use Illuminate\Support\Facades\Log;
use Redirect;

class Courses extends ComponentBase
{
    public $courses;
    public $pageParam;
    public $category;
    public $coursePage;
    public $categoryPage;
    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name' => '课程列表',
            'description' => '显示课程列表',
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title' => '页数',
                'description' => '当前页数',
                'type' => 'string',
                'default' => '{{ :page }}',
            ],
            'categoryFilter' => [
                'title' => '分类过滤',
                'description' => '分类过滤',
                'type' => 'string',
                'default' => '',
            ],
            'postsPerPage' => [
                'title' => '每页信息数量',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => '必须为数字',
                'default' => '10',
            ],
            'sortOrder' => [
                'title' => '排序',
                'description' => '排序',
                'type' => 'dropdown',
                'default' => 'published_at desc'
            ],
            'categoryPage' => [
                'title' => '分类页',
                'description' => '分类页',
                'type' => 'dropdown',
                'default' => 'courses/category',
                'group' => 'Links',
            ],
            'coursePage' => [
                'title' => '课程页',
                'description' => '课程页',
                'type' => 'dropdown',
                'default' => 'courses/course',
                'group' => 'Links',
            ],
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getCoursePageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getSortOrderOptions()
    {
        return CoursesCourse::$allowedSortingOptions;
    }

    public function onRun()
    {
        $this->prepareVars();
        $this->category = $this->page['category'] = $this->loadCategory();
        $this->courses = $this->page['courses'] = $this->listCourses();
        /*
         * If the page number is not valid, redirect
         * */

        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');
            if ($currentPage > ($lastPage = $this->courses->lastPage()) && $currentPage > 1) {
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
        $this->coursePage = $this->page['coursePage'] = $this->property('coursePage');
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
    }

    protected function listCourses()
    {
        $category = $this->category ? $this->category->id : null;
        /*
         * List all the posts, eager load their categories
         */
        $posts = CoursesCourse::with('categories')->listFrontEnd([
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
            $post->setUrl($this->coursePage, $this->controller);
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
        $category = new CoursesCategory();

        $category = $category->where('slug', $slug)->first();

        return $category ?: null;

    }

}