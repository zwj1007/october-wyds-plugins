<?php namespace Buuug7\Location\Controllers;

use Backend\Facades\Backend;
use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Support\Facades\Redirect;

/**
 * Locations Back-end Controller
 */
class ProvincesAndCities extends Controller
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

        BackendMenu::setContext('Buuug7.Location', 'location', 'provincesandcities');
    }

    public function onAddCounty()
    {
        trace_log(post('checked'));
        $checkedIds = post('checked');
        $url=Backend::url('buuug7/location/countiesandtowns/create?city_id='.$checkedIds[0]);
        return Redirect::to($url);
    }
}
