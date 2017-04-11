<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/11
 * Time: 16:16
 * Desc:
 */

namespace Buuug7\Courses\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Log;
use Lang;
use Buuug7\Courses\Models\Tag;
use Redirect;

class Tags extends ComponentBase
{
    public $tags;
    public $pageParam;
    public $noCoursesMessage;
    public $tagPage;
    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name' => 'buuug7.courses::lang.tag.tag_list_name',
            'description' => 'show tag list',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'buuug7.courses::lang.tag.slug',
                'type' => 'string',
                'default' => '{{ :slug }}',
            ],
            'pageNumber' => [
                'title' => 'buuug7.courses::lang.courses.pagination',
                'type' => 'string',
                'default' => '{{ :page }}',
            ],
            'noCoursesMessage' => [
                'title' => 'buuug7.courses::lang.tag.no_courses_message',
                'type' => 'string',
                'default' => Lang::get('buuug7.courses::lang.tag.no_courses_message'),
                'showExternalParam' => false,
            ],
            'sortOrder' => [
                'title' => 'buuug7.courses::lang.courses.order',
                'type' => 'dropdown',
                'options' => [
                    'name asc' => Lang::get('buuug7.sources::lang.sorting.title_asc'),
                    'name desc' => Lang::get('buuug7.sources::lang.sorting.title_desc'),
                    'created_at asc' => Lang::get('buuug7.sources::lang.sorting.created_at_asc'),
                    'created_at des' => Lang::get('buuug7.sources::lang.sorting.created_at_desc'),
                    'updated_at asc' => Lang::get('buuug7.sources::lang.sorting.updated_at_asc'),
                    'updated_at desc' => Lang::get('buuug7.sources::lang.sorting.updated_at_asc'),
                    'random' => Lang::get('buuug7.sources::lang.sorting.random'),
                ],
                'default' => 'name asc',
            ],

            'tagPage' => [
                'title' => 'buuug7.courses::lang.tag.tag_page',
                'type' => 'dropdown',
                'default' => '/courses/tags',
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
        $this->tags = $this->page['tags'] = $this->listCourses();
        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');
            if ($currentPage > ($lastPage = $this->tags->lastPage()) && $currentPage > 1) {
                return Redirect::to($this->currentPageUrl(['$pageNumberParam' => $lastPage,]));
            }
        }
    }

    protected function prepareVars()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->noCoursesMessage = $this->page['noCoursesMessage'] = $this->property('noCoursesMessage');
        $this->coursePage = $this->page['tagPage'] = $this->property('tagPage');
    }

    protected function listCourses()
    {
        $courses = Tag::listFrontEnd([
            'page' => $this->property('pageNumber'),
            'sort' => $this->property('sortOrder'),
            'perPage' => $this->property('postsPerPage'),
            'search' => trim(input('search'))
        ]);

        $courses->each(function ($courses) {
            $courses->setUrl($this->coursePage, $this->controller);
        });

        return $courses;
    }

}