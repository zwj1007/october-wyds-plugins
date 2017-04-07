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
            'name' => 'News',
            'description' => 'news',
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

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Buuug7\News\Components\MyComponent' => 'myComponent',
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
            'buuug7.news.access_posts' => [
                'tab' => '新闻',
                'label' => '管理新闻'
            ],
            'buuug7.news.access_other_posts' => [
                'tab' => '新闻',
                'label' => '管理其他人发布的新闻',
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
                'label' => '新闻',
                'url' => Backend::url('buuug7/news/posts'),
                'icon' => 'icon-leaf',
                'permissions' => ['buuug7.news.*'],
                'order' => 500,

                'sideMenu' => [
                    'new_post' => [
                        'label' => '添加新闻',
                        'icon' => 'icon-plus',
                        'url' => Backend::url('buuug7/news/posts/create'),
                        'permission' => ['buuug7.news.access_posts'],
                    ],
                    'posts' => [
                        'label' => '新闻',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('buuug7/news/posts'),
                        'permission' => ['buuug7.news.access_posts'],
                    ],
                    'categories' => [
                        'label' => '分类',
                        'icon' => 'icon-list-ul',
                        'url' => Backend::url('buuug7/news/categories'),
                        'permission' => ['buuug7.news.access_posts'],
                    ],
                ],
            ],
        ];
    }
}
