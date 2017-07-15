<?php namespace Buuug7\Location\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\SettingsManager;

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

    public $requiredPermissions = ['Buuug7.Location.access_setting'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.Location', 'location', 'locations');
        SettingsManager::setContext('Buuug7.Location', 'location');
        $this->villageFormWidget = $this->createTownVillageFormWidget();
    }

    protected $villageFormWidget;

    public function onLoadCreateVillageForm()
    {
        $this->vars['villageFormWidget'] = $this->villageFormWidget;
        $this->vars['townId'] = post('town_id');
        return $this->makePartial('village_create_form');
    }

    protected function createTownVillageFormWidget()
    {
        $config = $this->makeConfig('$/buuug7/location/models/village/fields.yaml');
        $config->alias = 'villageForm';
        $config->arrayName = 'Village';
        $config->model = new \Buuug7\Location\Models\Village;
        $widget = $this->makeWidget('Backend\Widgets\Form', $config);
        $widget->bindToController();
        return $widget;
    }

    public function onCreateVillage()
    {
        $data = $this->villageFormWidget->getSaveData();
        $town = $this->getTownModel();
        $town->villages()->create($data);
        return $this->refreshTownVillageList();
    }

    protected function refreshTownVillageList()
    {
        $villages = $this->getTownModel()
            ->villages()
            ->withDeferred($this->villageFormWidget->getSessionKey())
            ->get();
        $this->vars['villages'] = $villages;
        return ['#villageList' => $this->makePartial('village_list')];
    }

    public function onDeleteVillage()
    {
        $recordId = post('record_id');
        $model = \Buuug7\Location\Models\Village::find($recordId);
        $model->delete();
        return $this->refreshTownVillageList();
    }

    protected function getTownModel()
    {
        $townId = post('town_id');
        $town = \Buuug7\Location\Models\Town::find($townId);
        return $town;
    }
}


