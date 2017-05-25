<?php namespace Buuug7\Courses;

use Backend;
use System\Classes\PluginBase;
use RainLab\User\Models\User as UserModel;

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
            'name' => '课程',
            'description' => '课程管理',
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
        UserModel::extend(function ($model){
            $model->belongsToMany['courses']=['Buuug7\Courses\Models\Course','table' => 'buuug7_user_users_courses',];
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
                'tab' => '课程',
                'label' => '管理课程'
            ],

            'buuug7.courses.access_categories' => [
                'tab' => '课程',
                'label' => '管理课程分类'
            ],

            'buuug7.courses.access_other_courses' => [
                'tab' => '课程',
                'label' => '管理其他人发布的课程'
            ],

            'buuug7.courses.access_publish' => [
                'tab' => '课程',
                'label' => '课程审核'
            ],

            'buuug7.courses.access_tags' => [
                'tab' => '课程',
                'label' => '课程标签管理'
            ],

            'buuug7.courses.create' => [
                'tab'   => '课程',
                'label' => '添加课程'
            ],
            'buuug7.courses.delete' => [
                'tab'   => '课程',
                'label' => '删除课程'
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
                'label' => '课程',
                'url' => Backend::url('buuug7/courses/courses'),
                'icon' => 'icon-book',
                'permissions' => ['buuug7.courses.*'],

                'sideMenu' => [
                    'new_course' => [
                        'label' => '添加课程',
                        'icon' => 'icon-plus',
                        'url' => Backend::url('buuug7/courses/courses/create'),
                        'permission' => ['buuug7.courses.access_courses'],
                    ],
                    'courses' => [
                        'label' => '课程管理',
                        'icon' => 'icon-copy',
                        'url' => Backend::url('buuug7/courses/courses'),
                        'permission' => ['buuug7.courses.access_courses'],
                    ],
                    'categories' => [
                        'label' => '课程分类',
                        'icon' => 'icon-list-ol',
                        'url' => Backend::url('buuug7/courses/categories'),
                        'permission' => ['buuug7.courses.access_courses'],
                    ],

                    'tags' => [
                        'label' => '标签管理',
                        'icon' => 'icon-tags',
                        'url' => Backend::url('buuug7/courses/tags'),
                        'permission' => ['buuug7.courses.access_tags'],
                    ],
                ],
            ],
        ];
    }
}
