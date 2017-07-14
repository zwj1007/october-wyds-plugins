<?php namespace Buuug7\Location\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Counties And Towns Back-end Controller
 */
class CountiesAndTowns extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['buuug7.location.access_settings'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.Location', 'location', 'countiesandtowns');
    }

    public function sscreate(){
      $data=input('id');
      trace_log($data);
    }
}
