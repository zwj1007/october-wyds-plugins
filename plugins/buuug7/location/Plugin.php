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
            'name' => 'Location',
            'description' => 'No description provided yet...',
            'author' => 'Buuug7',
            'icon' => 'icon-leaf'
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
            'buuug7.location.access_settings' => [
                'tab' => 'B7_Location',
                'label' => '管理本地位置'
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'location' => [
                'label' => '本地位置',
                'description' => '管理位置信息',
                'category' => '本地位置',
                'icon' => 'icon-globe',
                'url' => Backend::url('buuug7/location/provincesandcities'),
                'order' => 500,
                'permissions' => ['buuug7.location.access_settings'],
                'keywords' => 'province, city',

                'sideMenu' => [
                  'provincesandcities' => [
                    'label' => '省市',
                    'icon' => 'icon-list-ul',
                    'url' => Backend::url('buuug7/location/provincesandcities '),
                    'permissions' => ['buuug7.location.access_settings'],
                  ],
                ],
            ],
        ];
    }

    public function registerNavigation(){
      return [
        'location' => [
          'sideMenu' => [
            'provincesandcities' => [
              'label' => '省市',
              'icon' => 'icon-list-ul',
              'url' => Backend::url('buuug7/location/provincesandcities '),
              'permissions' => ['buuug7.location.access_settings'],
            ],

            'countiesandtowns' => [
              'label' => '县乡',
              'icon' => 'icon-list-ul',
              'url' => Backend::url('buuug7/location/countiesandtowns '),
              'permissions' => ['buuug7.location.access_settings'],
            ],
          ],
        ],
      ];
    }
}
