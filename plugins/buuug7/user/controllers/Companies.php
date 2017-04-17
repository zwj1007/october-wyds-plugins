<?php namespace Buuug7\User\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Companies Back-end Controller
 */
class Companies extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.User', 'user', 'companies');
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }
}
