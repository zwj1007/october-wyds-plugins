<?php namespace Buuug7\User\Components;

use Cms\Classes\ComponentBase;
use Buuug7\Courses\Models\Course;
use RainLab\User\Facades\Auth;

class ShouCang extends ComponentBase
{
    public $courses;

    public function componentDetails()
    {
        return [
            'name' => 'ShouCang Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->courses = $this->page['courses'] = $this->listCourses();
    }

    public function listCourses()
    {
        $check = Auth::check();
        if (!$check) {
            return null;
        }

        $user = Auth::getUser();
        $courses = $user->courses();

        return $courses->paginate(2);
    }
}
