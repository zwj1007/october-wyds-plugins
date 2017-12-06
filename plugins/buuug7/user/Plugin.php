<?php namespace Buuug7\User;

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use System\Classes\PluginBase;
use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;
use Yaml;
use File;
use Backend;
use October\Rain\Auth\AuthException;
use App;
use Lang;
use Event;
use Config;
use Agent;
use Illuminate\Foundation\AliasLoader;

/**
 * User Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'User',
            'description' => 'extend rainlab user plugins',
            'author' => 'Buuug7',
            'icon' => 'icon-leaf'
        ];
    }


    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        // Setup required packages
        $this->bootPackages();

        // Listen
        // 切换主题 如果客户端从手机访问，将主题设置为手机端主题
        /*Event::listen('cms.theme.getActiveTheme',function(){
            if(Agent::isDesktop()){
                return "wy-theme-v2";
            }else{
                return "wy-theme";
            }
        });*/

        // 翻译用户验证的问题
        App::error(function (AuthException $exception) {
            $message = $exception->getMessage();
            if ($message == 'A user was found to match all plain text credentials however hashed credential "password" did not match.') {
                return Lang::get('buuug7.user::lang.exception_wrong_password');
            } elseif ($message == 'A user was not found with the given credentials.') {
                return Lang::get('buuug7.user::lang.exception_not_found_user');
            } elseif (strpos($message, 'as they are not activated')) {
                return Lang::get('buuug7.user::lang.exception_not_activated');
            } elseif(strpos($message,'has been suspended')){
                return Lang::get('buuug7.user::lang.exception_suspended');
            }
        });

        Carbon::setLocale('zh');

        UserModel::extend(function ($model) {
            /*$model->addFillable([
                'county_id',
                'town_id',
                'village_id'
            ]);*/
            $model->attributeNames['email'] = '电子邮箱';
            $model->attributeNames['password'] = '密码';

            $model->implement[] = 'Buuug7.Location.Behaviors.LocationModel';
            $model->hasMany['companies'] = ['Buuug7\User\Models\Company', 'table' => 'buuug7_user_companies'];
            $model->hasMany['needs'] = ['Buuug7\User\Models\Need', 'table' => 'buuug7_user_needs',];
            $model->hasMany['shops'] = ['Buuug7\User\Models\Shop', 'table' => 'buuug7_user_shops',];
        });

        UsersController::extendFormFields(function ($widget) {
            if (!$widget->model instanceof UserModel) {
                return;
            }
            $configFile = __DIR__ . '/config/profile_fields.yaml';
            $config = Yaml::parse(File::get($configFile));
            $widget->addTabFields($config);
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
            'Buuug7\User\Components\ShouCang' => 'shouCang',
            'Buuug7\User\Components\Account' => 'b7Account',
            'Buuug7\User\Components\ResetPassword' => 'b7ResetPassword',
            'Buuug7\User\Components\Company' => 'b7Company',
            'Buuug7\User\Components\Need' => 'b7Need',
            'Buuug7\User\Components\Shop' => 'b7Shop',
            'Buuug7\User\Components\bindQQ' => 'b7bindQQ',
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
            'buuug7.user.access_companies' => [
                'tab' => '营销',
                'label' => '企业管理'
            ],
            'buuug7.user.access_needs' => [
                'tab' => '营销',
                'label' => '管理供求信息',
            ],
            'buuug7.user.access_shops' => [
                'tab' => '营销',
                'label' => '管理店铺',
            ]
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
            'user' => [
                'label' => '营销',
                'url' => Backend::url('buuug7/user/companies'),
                'icon' => 'icon-diamond',
                'permissions' => ['buuug7.user.*'],
                'sideMenu' => [
                    'companies' => [
                        'label' => '用户企业',
                        'icon' => 'icon-building',
                        'url' => Backend::url('buuug7/user/companies'),
                        'permissions' => ['buuug7.user.*'],
                    ],
                    'shops' => [
                        'label' => '用户店铺',
                        'icon' => 'icon-shopping-bag',
                        'url' => Backend::url('buuug7/user/shops'),
                        'permissions' => ['buuug7.user.*'],
                    ],
                    'needs' => [
                        'label' => '供求信息',
                        'icon' => 'icon-file-text',
                        'url' => Backend::url('buuug7/user/needs'),
                        'permissions' => ['buuug7.user.*'],
                    ],
                ],
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'time_diff' => [$this, 'makeTimeDiff'],
            ],
            'functions' => [
                // Using an inline closure
                'helloWorld' => function () {
                    return 'Hello World!';
                }
            ]
        ];
    }

    public function makeTimeDiff($text)
    {
        return Carbon::parse($text)->diffForHumans();
    }

    /**
     * Boots (configures and registers) any packages found within this plugin's packages.load configuration value
     *
     * @see https://luketowers.ca/blog/how-to-use-laravel-packages-in-october-plugins
     * @author Luke Towers <octobercms@luketowers.ca>
     */
    public function bootPackages()
    {
        // Get the namespace of the current plugin to use in accessing the Config of the plugin
        $pluginNamespace = str_replace('\\', '.', strtolower(__NAMESPACE__));

        // Instantiate the AliasLoader for any aliases that will be loaded
        $aliasLoader = AliasLoader::getInstance();

        // Get the packages to boot
        $packages = Config::get($pluginNamespace . '::packages');

        // Boot each package
        foreach ($packages as $name => $options) {
            // Setup the configuration for the package, pulling from this plugin's config
            if (!empty($options['config']) && !empty($options['config_namespace'])) {
                Config::set($options['config_namespace'], $options['config']);
            }

            // Register any Service Providers for the package
            if (!empty($options['providers'])) {
                foreach ($options['providers'] as $provider) {
                    App::register($provider);
                }
            }

            // Register any Aliases for the package
            if (!empty($options['aliases'])) {
                foreach ($options['aliases'] as $alias => $path) {
                    $aliasLoader->alias($alias, $path);
                }
            }
        }
    }

    public function registerMailTemplates()
    {
        return [
            'buuug7.user::mail.activate',
            'buuug7.user::mail.welcome',
            'buuug7.user::mail.restore',
            'buuug7.user::mail.new_user',
            'buuug7.user::mail.reactivate',
            'buuug7.user::mail.invite',
        ];
    }
}
