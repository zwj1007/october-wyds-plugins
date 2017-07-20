<?php namespace Buuug7\Statistics\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Buuug7\Statistics\ReportWidgets\LatestYearLineChart;
/**
 * Statistic Ones Back-end Controller
 */
class StatisticOnes extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $requiredPermissions = ['buuug7.statistics.access_statistic_one'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.Statistics', 'statistics', 'statisticones');
        $latestYearLineChart=new LatestYearLineChart($this);
        $latestYearLineChart->alias='latestYearLIneChart';
        $latestYearLineChart->bindToController();
    }

    public function update($recordId = null){
        return $this->asExtension('FormController')->update($recordId);
    }


    public function analysis(){
        $this->pageTitle= '数据分析';
        return $this->makePartial('analysis');
    }
}
