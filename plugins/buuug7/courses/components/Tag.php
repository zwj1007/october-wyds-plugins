<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/11
 * Time: 17:25
 * Desc:
 */

namespace Buuug7\Courses\Components;


use Buuug7\Courses\Models\Category as CourseCategory;
use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use Buuug7\Courses\Models\Course;
use Buuug7\Courses\Models\Tag as CoursesTag;
use Illuminate\Support\Facades\Log;

class Tag extends ComponentBase
{
    public $courses;
    public $pageParam;
    public $coursePage;
    public $category;
    public $tag;
    public $categoryPage;

    public function componentDetails()
    {
        return [
            'name' => 'tag',
            'description' => 'list courses of a given tag',
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title' => 'page number',
                'description' => 'pagination number',
                'type' => 'string',
                'default' => '{{ :page }}',
            ],

            'tagFilter' => [
                'title' => 'tag filter',
                'description' => 'filter with a given tag',
                'type' => 'string',
                'default' => '{{ :slug }}'
            ],
            'postsPerPage' => [
                'title' => 'posts per page',
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'must be number',
                'default' => '10',
            ],
            'categoryPage' => [
                'title' => 'category page',
                'description' => 'category page',
                'type' => 'dropdown',
                'default' => 'courses/category',
                'group' => 'Links',
            ],
            'coursePage' => [
                'title' => 'course page',
                'description' => 'course page',
                'type' => 'dropdown',
                'default' => 'courses/course',
                'group' => 'Links',
            ],
        ];
    }

    public function getCoursePageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->prepareVars();
        $this->tag = $this->page['tag'] = $this->loadTag();
        $this->category = $this->page['category'] = $this->loadCategory();
        $this->courses = $this->page['courses'] = $this->listCourses();
    }

    protected function prepareVars()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');

        $this->coursePage = $this->page['coursePage'] = $this->property('coursePage');
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
    }

    protected function listCourses()
    {
        $tag = $this->tag ? $this->tag->id : null;
        $category = $this->category ? $this->category->id : null;

        $courses = Course::with(['tags', 'categories'])->listFrontEnd([
            'page' => $this->property('pageNumber'),
            'sort' => $this->property('sortOrder'),
            'perPage' => $this->property('postsPerPage'),
            'search' => trim(input('search')),
            'category' => $category,
            'tag' => $tag,
        ]);

        /*
         * Add a "url" helper attribute for linking to each post and category
         */
        $courses->each(function ($post) {
            $post->setUrl($this->coursePage, $this->controller);
            $post->categories->each(function ($category) {
                $category->setUrl($this->categoryPage, $this->controller);
            });
        });

        return $courses;
    }

    protected function loadCategory()
    {
        if (!$slug = $this->property('categoryFilter')) {
            return null;
        }
        $category = new CourseCategory();

        $category = $category->where('slug', $slug)->first();

        return $category ?: null;
    }

    protected function loadTag()
    {
        if (!$slug = $this->property('tagFilter')) {
            return null;
        }
        $tag = new CoursesTag();
        $tag = $tag->where('slug', $slug)->first();
        return $tag ?: null;
    }

}