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
            'name' => '新闻',
            'description' => '新闻插件',
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
            'Buuug7\News\Components\Post' => 'newsPost',
            'Buuug7\News\Components\Posts' => 'newsPosts',
            'Buuug7\News\Components\Categories' => 'newsCategories',
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
            'buuug7.news.access_categories' => [
                'tab' => '新闻',
                'label' => '管理新闻分类'
            ],
            'buuug7.news.access_other_posts' => [
                'tab' => '新闻',
                'label' => '管理别人发布的新闻',
            ],
            'buuug7.news.access_publish' => [
                'tab' => '新闻',
                'label' => '管理新闻审核',
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
                'icon' => 'icon-newspaper-o',
                'permissions' => ['buuug7.news.*'],

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
