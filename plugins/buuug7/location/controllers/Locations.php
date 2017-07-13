<?php namespace Buuug7\Location\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Locations Back-end Controller
 */
class Locations extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = ['buuug7.location.access_settings'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.Location', 'location', 'locations');
    }

    public function onAddCounty()
    {
        //TODO
    }
}
