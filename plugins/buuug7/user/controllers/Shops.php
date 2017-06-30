<?php namespace Buuug7\User\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Shops Back-end Controller
 */
class Shops extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $requiredPermissions = ['buuug7.user.access_shops'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.User', 'user', 'shops');
    }
}
