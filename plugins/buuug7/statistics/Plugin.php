<?php namespace Buuug7\Statistics;

use Backend;
use October\Rain\Halcyon\Traits\Validation;
use System\Classes\PluginBase;
use Validator;
use DB;
use RainLab\User\Models\User as UserModel;

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
            'name' => 'Statistics',
            'description' => 'No description provided yet...',
            'author' => 'Buuug7',
            'icon' => 'icon-leaf'
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
        //trace_sql();

        Validator::extend('unique_with', function ($attribute, $value, $parameters, $validator) {
            $request = request()->all();

            trace_log($request);

            // 由于设置了october关联关系，request过来的数据包含user而没有user_id
            // 而验证中使用了user_id，进行了转换，否则无法工作
            if (!isset($request['user_id'])) {
                $request['user_id'] =$request['StatisticOne']['user'];
            }

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
            return !DB::table($table)
                ->where($clauses)
                ->exists();
        },'composite unique validation error !');

        UserModel::extend(function($model){
            $model->hasMany['statisticOnes']=[
                'Buuug7\Statistics\Models\StatisticOne',
                'table' => 'buuug7_statistics_statistic_ones',
            ];
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
            'Buuug7\Statistics\Components\Statistics' => 'b7Statistics',
            'Buuug7\Statistics\Components\StatisticOnes' => 'b7StatisticOnes',
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
            'buuug7.statistics.access_statistic_one' => [
                'tab' => '统计',
                'label' => '统计一'
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
                'label' => '统计',
                'url' => Backend::url('buuug7/statistics/statisticones'),
                'icon' => 'icon-area-chart',
                'permissions' => ['buuug7.statistics.*'],
                'order' => 500,
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
                        'url' => Backend::url('buuug7/statistics/statistics'),
                        'permissions' => ['buuug7.statistics.access_statistics.*'],
                    ],
                ],
            ],

        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Buuug7\Statistics\ReportWidgets\LatestYearLineChart' => [
                'label' => 'Latest Year Line Widget',
                'context' => 'dashboard',
            ],
        ];
    }
}
