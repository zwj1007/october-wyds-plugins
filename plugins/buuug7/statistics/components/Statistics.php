<?php namespace Buuug7\Statistics\Components;
use Cms\Classes\ComponentBase;
use Buuug7\Statistics\Models\Statistic as StatisticsModel;

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
        $statistics=StatisticsModel::isPublished()->get();
        return $statistics;
    }
}
