<?php namespace Buuug7\Courses;

use Backend;
use System\Classes\PluginBase;

/**
 * Courses Plugin Information File
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
            'name' => 'Courses',
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
            'Buuug7\Courses\Components\MyComponent' => 'myComponent',
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
            'buuug7.courses.some_permission' => [
                'tab' => 'Courses',
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
            'courses' => [
                'label' => 'Courses',
                'url' => Backend::url('buuug7/courses/courses'),
                'icon' => 'icon-book',
                'permissions' => ['buuug7.courses.*'],

                'sideMenu' => [
                    'new_course' => [
                        'label' => 'buuug7.courses::lang.courses.new_course',
                        'icon' => 'icon-plus',
                        'url' => Backend::url('buuug7/courses/courses/create'),
                        'permission' => ['buuug7.courses.access_courses'],
                    ],
                    'posts' => [
                        'label' => 'buuug7.courses::lang.courses.courses',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('buuug7/courses/courses'),
                        'permission' => ['buuug7.courses.access_courses'],
                    ],
                    'categories' => [
                        'label' => 'buuug7.courses::lang.courses.categories',
                        'icon' => 'icon-list-ul',
                        'url' => Backend::url('buuug7/courses/categories'),
                        'permission' => ['buuug7.courses.access_courses'],
                    ],

                    'tags' => [
                        'label' => 'buuug7.courses::lang.courses.tags',
                        'icon' => 'icon-list-ul',
                        'url' => Backend::url('buuug7/courses/tags'),
                        'permission' => ['buuug7.courses.access_tags'],
                    ],
                ],
            ],
        ];
    }
}
