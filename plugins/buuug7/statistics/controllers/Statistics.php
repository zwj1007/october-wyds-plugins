<?php namespace Buuug7\Statistics\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Statistics Back-end Controller
 */
class Statistics extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function create()
    {
        BackendMenu::setContextSideMenu('new_statistics');
        return $this->asExtension('FormController')->create();
    }

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.Statistics', 'statistics', 'statistics');
    }
}