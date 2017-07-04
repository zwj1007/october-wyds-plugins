<?php namespace Buuug7\Statistics\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

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
    }

    public function update($recordId = null){

        return $this->asExtension('FormController')->update($recordId);
    }
}
