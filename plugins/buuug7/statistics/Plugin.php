<?php namespace Buuug7\Statistics;

use Backend;
use System\Classes\PluginBase;
use Validator;
use DB;
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
        Validator::extend('unique_with', function ($attribute, $value, $parameters, $validator) {
            $request = request()->all();

            // $table is always the first parameter
            // You can extend it to use dots in order to specify: connection.database.table
            $table = array_shift($parameters);

            // Add current column to the $clauses array
            $clauses = [
                $attribute => $value,
            ];

            // Add the rest
            foreach ($parameters as $column) {
                if (isset($request[$column])) {
                    $clauses[$column] = $request[$column];
                }
            }

            // Query for existence.
            return ! DB::table($table)
                ->where($clauses)
                ->exists();
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
            'Buuug7\Statistics\Components\Statistics'=>'b7Statistics',
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
                    'statisticones' => [
                        'label' => '统计(one)',
                        'icon' => 'icon-bar-chart',
                        'url' => Backend::url('buuug7/statistics/statisticones'),
                        'permissions' => ['buuug7.statistics.access_statistics.*'],
                    ],
                    'statistics' => [
                        'label' => '统计(test)',
                        'icon' => 'icon-area-chart',
                        'url'         => Backend::url('buuug7/statistics/statistics'),
                        'permissions' => ['buuug7.statistics.access_statistics.*'],
                    ],
                ],
            ],

        ];
    }
}
