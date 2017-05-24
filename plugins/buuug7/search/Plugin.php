<?php namespace Buuug7\Search;

use Backend;
use System\Classes\PluginBase;

/**
 * Search Plugin Information File
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
            'name'        => 'Search',
            'description' => 'No description provided yet...',
            'author'      => 'Buuug7',
            'icon'        => 'icon-leaf'
        ];
    }


    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Buuug7\Search\Components\Search' => 'b7Search',
        ];
    }
}
