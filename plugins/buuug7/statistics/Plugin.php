<?php namespace Buuug7\Statistics;

use Backend;
use System\Classes\PluginBase;

/**
 * Statistics Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Statistics',
            'description' => 'No description provided yet...',
            'author'      => 'Buuug7',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            ' Buuug7\Statistics\Components\Statistics'=>'b7Statistics',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'buuug7.statistics.some_permission' => [
                'tab' => 'Statistics',
                'label' => 'Some permission'
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
            'statistics' => [
                'label'       => '统计',
                'url'         => Backend::url('buuug7/statistics/statistics'),
                'icon'        => 'icon-area-chart',
                'permissions' => ['buuug7.statistics.*'],
                'order'       => 500,
                'sideMenu' => [
                    'new_statistics' => [
                        'label' => '添加统计',
                        'icon' => 'icon-plus',
                        'url' => Backend::url('buuug7/statistics/statistics/create'),
                        'permission' => ['buuug7.statistics.access_statistics.*'],
                    ],
                    'statistics' => [
                        'label' => '统计',
                        'icon' => 'icon-area-chart',
                        'url'         => Backend::url('buuug7/statistics/statistics'),
                        'permission' => ['buuug7.statistics.access_statistics.*'],
                    ],
                ],
            ],

        ];
    }
}
