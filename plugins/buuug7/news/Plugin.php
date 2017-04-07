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
            'name' => 'buuug7.news::lang.plugin.name',
            'description' => 'buuug7.news::lang.plugin.description',
            'author' => 'Buuug7',
            'icon' => 'icon-leaf',
            'homepage' => 'https://github.com/buuug7/news-plugin',
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
                'tab' => 'buuug7.news::lang.news.tab',
                'label' => 'buuug7.news::lang.news.access_posts'
            ],
            'buuug7.news.access_categories' => [
                'tab' => 'buuug7.news::lang.news.tab',
                'label' => 'buuug7.news::lang.news.access_categories'
            ],
            'buuug7.news.access_other_posts' => [
                'tab' => 'buuug7.news::lang.news.tab',
                'label' => 'buuug7.news::lang.news.access_other_posts',
            ],
            'buuug7.news.access_publish' => [
                'tab' => 'buuug7.news::lang.news.tab',
                'label' => 'buuug7.news::lang.news.access_publish',
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
                'label' => 'buuug7.news::lang.news.menu_label',
                'url' => Backend::url('buuug7/news/posts'),
                'icon' => 'icon-newspaper-o',
                'permissions' => ['buuug7.news.*'],
                'order' => 500,

                'sideMenu' => [
                    'new_post' => [
                        'label' => 'buuug7.news::lang.news.new_post',
                        'icon' => 'icon-plus',
                        'url' => Backend::url('buuug7/news/posts/create'),
                        'permission' => ['buuug7.news.access_posts'],
                    ],
                    'posts' => [
                        'label' => 'buuug7.news::lang.news.posts',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('buuug7/news/posts'),
                        'permission' => ['buuug7.news.access_posts'],
                    ],
                    'categories' => [
                        'label' => 'buuug7.news::lang.news.categories',
                        'icon' => 'icon-list-ul',
                        'url' => Backend::url('buuug7/news/categories'),
                        'permission' => ['buuug7.news.access_posts'],
                    ],
                ],
            ],
        ];
    }
}
