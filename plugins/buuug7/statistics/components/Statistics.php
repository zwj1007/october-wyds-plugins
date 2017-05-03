<?php namespace Buuug7\Statistics\Components;
use Cms\Classes\ComponentBase;
use Buuug7\Courses\Models\Course;
use Buuug7\Statistics\Models\Statistics as StatisticsModel;

class Statistics extends ComponentBase
{
    public $statistics;
    public function componentDetails()
    {
        return [
            'name' => 'Statistics Component',
            'description' => 'No description provided yet...'
        ];
    }
    public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
        $this->statistics = $this->page['statistics'] = $this->listStatistics();
    }
    public function listStatistics()
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
