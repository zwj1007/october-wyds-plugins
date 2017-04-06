<?php namespace Buuug7\News;

use Backend;
use System\Classes\PluginBase;

/**
 * ExtContentPlus Plugin Information File
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
            'name'        => 'News',
            'description' => 'news',
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

        return [
            'Buuug7\ExtContentPlus\Components\MyComponent' => 'myComponent',
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
            'buuug7.extcontentplus.some_permission' => [
                'tab' => 'ExtContentPlus',
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
            'news' => [
                'label'       => '新闻',
                'url'         => Backend::url('buuug7/news/posts'),
                'icon'        => 'icon-leaf',
                'permissions' => ['buuug7.news.*'],
                'order'       => 500,
                
                'sideMenu' => [
                    'new_post' => [
                        'label' => '添加新闻',
                    ],
                ],
            ],
        ];
    }
}
