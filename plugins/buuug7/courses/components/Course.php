<?php namespace Buuug7\Courses\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Buuug7\Courses\Models\Course as CoursePost;
use Illuminate\Support\Facades\Log;
use RainLab\User\Facades\Auth;
use Flash;
use Redirect;

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
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');

        $this->course = $this->page['course'] = $this->loadCourse();
    }

    public function loadCourse()
    {
        $slug = $this->property('slug');
        $course = new CoursePost();
        $course = $course->where('slug', $slug)->isPublished()->first();
        $courseId = $course->id;
        if ($course && $course->categories->count()) {
            $course->categories->each(function ($category) {
                $category->setUrl($this->categoryPage, $this->controller);
            });
        }

        $course['relatedCourses'] = $this->relatedCourses($courseId);
        $course['previousSlug'] = $this->previousSlug($courseId);
        $course['nextSlug'] = $this->nextSlug($courseId);
        $course['ifShouCang'] = $this->checkShouCang($courseId);
        return $course;
    }

    public function previousSlug($courseId)
    {
        $previousId = CoursePost::where('id', '<', $courseId)->max('id');
        if (!$previousId) {
            return null;
        }
        $previousSlug = CoursePost::find($previousId)->slug;
        return $previousSlug;
    }

    public function nextSlug($courseId)
    {
        $nextId = CoursePost::where('id', '>', $courseId)->min('id');
        if (!$nextId) {
            return null;
        }
        $nextSlug = CoursePost::find($nextId)->slug;
        return $nextSlug;
    }

    public function relatedCourses($courseId)
    {
        $course=CoursePost::find($courseId);
        if(!$course->categories->first()){
            return null;
        }
        $course = $course->categories->first()->courses()->limit(8)->get();
        return $course;
    }

    /**
     * 检查给定课程是否收藏
     * @param $courseId
     * @return bool|null
     */
    public function checkShouCang($courseId)
    {
        $check = Auth::check();
        if (!$check) {
            return null;
        }

        $user = Auth::getUser();

        if ($user->courses()->find($courseId)) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * 收藏该课程
     * @param $courseId
     */
    public function onShouCang()
    {

        $check = Auth::check();
        if (!$check) {
            return;
        }

        $courseId = post('id');
        $user = Auth::getUser();
        if (!$user->courses()->find($courseId)) {
            $user->courses()->attach($courseId);
        }
        Flash::success('收藏成功');
        return Redirect::refresh();
    }

    public function onDetachShouCang()
    {
        $check = Auth::check();
        if (!$check) {
            return;
        }
        $courseId = post('id');
        $user = Auth::getUser();

        if (!$user->courses()->find($courseId)) {
            return;
        }
        $user->courses()->detach($courseId);
        Flash::success('成功取消收藏');
        return Redirect::refresh();
    }

}