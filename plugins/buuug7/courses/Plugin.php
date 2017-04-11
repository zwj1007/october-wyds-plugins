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
        return [
            'Buuug7\Courses\Components\Course' => 'coursesCourse',
            'Buuug7\Courses\Components\Categories' => 'coursesCategories',
            'Buuug7\Courses\Components\Courses' => 'coursesCourses',
            'Buuug7\Courses\Components\Tags' => 'coursesTags',
            'Buuug7\Courses\Components\Tag' => 'coursesTag',
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
            'buuug7.courses.access_courses' => [
                'tab' => 'buuug7.courses::lang.courses.tab',
                'label' => 'buuug7.courses::lang.permission.access_courses'
            ],

            'buuug7.courses.access_categories' => [
                'tab' => 'buuug7.courses::lang.courses.tab',
                'label' => 'buuug7.courses::lang.permission.access_categories'
            ],

            'buuug7.courses.access_other_courses' => [
                'tab' => 'buuug7.courses::lang.courses.tab',
                'label' => 'buuug7.courses::lang.permission.access_other_courses'
            ],

            'buuug7.courses.access_publish' => [
                'tab' => 'buuug7.courses::lang.courses.tab',
                'label' => 'buuug7.courses::lang.permission.access_publish'
            ],

            'buuug7.courses.access_tags' => [
                'tab' => 'buuug7.courses::lang.courses.tab',
                'label' => 'buuug7.courses::lang.permission.access_tags'
            ],

            'buuug7.courses.create' => [
                'tab'   => 'buuug7.courses::lang.courses.tab',
                'label' => 'buuug7.courses::lang.permission.create'
            ],
            'buuug7.courses.delete' => [
                'tab'   => 'buuug7.courses::lang.courses.tab',
                'label' => 'buuug7.courses::lang.permission.delete'
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
                    'courses' => [
                        'label' => 'buuug7.courses::lang.courses.courses',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('buuug7/courses/courses'),
                        'permission' => ['buuug7.courses.access_courses'],
                    ],
                    'categories' => [
                        'label' => 'buuug7.courses::lang.courses.categories',
                        'icon' => 'icon-list-ol',
                        'url' => Backend::url('buuug7/courses/categories'),
                        'permission' => ['buuug7.courses.access_courses'],
                    ],

                    'tags' => [
                        'label' => 'buuug7.courses::lang.courses.tags',
                        'icon' => 'icon-tags',
                        'url' => Backend::url('buuug7/courses/tags'),
                        'permission' => ['buuug7.courses.access_tags'],
                    ],
                ],
            ],
        ];
    }
}
