<?php namespace Buuug7\User;

use Carbon\Carbon;
use System\Classes\PluginBase;
use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;
use Yaml;
use File;
use Backend;

/**
 * User Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'User',
            'description' => 'extend rainlab user plugins',
            'author' => 'Buuug7',
            'icon' => 'icon-leaf'
        ];
    }


    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        Carbon::setLocale('zh');
        UserModel::extend(function ($model) {
            $model->addFillable([
                'b7_mobile',
                'b7_address',
                'b7_enterprise'
            ]);

            $model->hasOne['company'] = ['Buuug7\User\Models\Company', 'table' => 'buuug7_user_companies','key' => 'user_id',];
            $model->hasMany['needs'] = ['Buuug7\User\Models\Need', 'table' => 'buuug7_user_needs',];
        });

        UsersController::extendFormFields(function ($widget) {
            if (!$widget->model instanceof UserModel) {
                return;
            }
            $configFile = __DIR__ . '/config/profile_fields.yaml';
            $config = Yaml::parse(File::get($configFile));
            $widget->addTabFields($config);
        });

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Buuug7\User\Components\ShouCang' => 'shouCang',
            'Buuug7\User\Components\Account' => 'b7Account',
            'Buuug7\User\Components\Company' => 'b7Company',
            'Buuug7\User\Components\Need' => 'b7Need',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'buuug7.user.access_companies' => [
                'tab' => '企业',
                'label' => '企业管理'
            ],
            'buuug7.user.access_needs' => [
                'tab' => '企业',
                'label' => '管理供需',
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'user' => [
                'label' => '企业',
                'url' => Backend::url('buuug7/user/companies'),
                'icon' => 'icon-user-plus',
                'permissions' => ['buuug7.user.*'],
                'sideMenu' => [
                    'companies' => [
                        'label' => '企业',
                        'icon' => 'icon-user-plus',
                        'url' => Backend::url('buuug7/user/companies'),
                        'permissions' => ['buuug7.user.*'],
                    ],
                    'needs' => [
                        'label' => '需求',
                        'icon' => 'icon-file-text',
                        'url' => Backend::url('buuug7/user/needs'),
                        'permissions' => ['buuug7.user.*'],
                    ],
                ],
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'time_diff' => [$this, 'makeTimeDiff'],
            ],
            'functions' => [
                // Using an inline closure
                'helloWorld' => function () {
                    return 'Hello World!';
                }
            ]
        ];
    }

    public function makeTimeDiff($text)
    {
        return Carbon::parse($text)->diffForHumans();
    }
}
