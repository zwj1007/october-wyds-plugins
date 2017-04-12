<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/8 0008
 * Time: 下午 4:02
 * Desc:
 */

namespace Buuug7\Courses\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Buuug7\Courses\Models\Course as CoursePost;
use Illuminate\Support\Facades\Log;

class Course extends ComponentBase
{

    /**
     * @var Buuug7\Courses\Models\Course
     * the Post model
     */
    public $course;

    /**
     * @var string
     * post for linking to categories
     */
    public $categoryPage;


    public function componentDetails()
    {
        return [
            'name' => '课程',
            'description' => '显示单条课程信息',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => '课程别名',
                'description' => '课程别名',
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
        $this->categoryPage=$this->page['categoryPage']=$this->property('categoryPage');
        $this->course=$this->page['course']=$this->loadCourse();
    }

    public function loadCourse()
    {
        $slug = $this->property('slug');
        $course = new CoursePost();
        $course = $course->where('slug', $slug)->isPublished()->first();

        if ($course && $course->categories->count()) {
            $course->categories->each(function ($category) {
                $category->setUrl($this->categoryPage, $this->controller);
            });
        }
        return $course;
    }

    public function previousCourse()
    {
        return $this->getCourseSibling(-1);
    }

    public function nextCourse()
    {
        return $this->getCourseSibling(1);
    }

    public function getCourseSibling($direction = 1)
    {
        if (!$this->course) {
            return;
        }
        $method = $direction === -1 ? 'previousPost' : 'nextPost';

        if(!$course=$this->course->$method()){
            return;
        }
        $postPage=$this->getPage()->getBaseFileName();

        $course->setUrl($postPage,$this->controller);

        $course->categories->each(function($category) {
            $category->setUrl($this->categoryPage, $this->controller);
        });

        return $course;
    }

}