<?php namespace Buuug7\Location;

use Backend;
use System\Classes\PluginBase;

/**
 * Location Plugin Information File
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
            'name'        => 'Location',
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
        return []; // Remove this line to activate
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'buuug7.location.access_setting' => [
                'tab' => '本地位置',
                'label' => '管理本地位置'
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
        return []; // Remove this line to activate
    }
    
    public function registerSettings()
    {
        return [
            'location' => [
                'label' => '本地位置',
                'description' => '本地位置',
                'category' => '位置',
                'icon' => 'icon-globe',
                'url' => Backend::url('buuug7/location/locations'),
                'order' => 500,
                'permissions' => ['buuug7.location.access_setting'],
            ],
        ];
    }
}
