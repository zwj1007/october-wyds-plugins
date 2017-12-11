<?php

return [
    'github' => [
        'client_id' => 'a3dd8d9f8c9e4b5b5768',
        'client_secret' => 'db28c39eff8021339a1d634e7ab4ae4c31ae96a0',
        'redirect_uri' => 'http://ds8.com.cn/login/github/callback',
    ],

    'tianqi' => [
        'client_id' => '6',
        'client_secret' => '	bm5UmxU4oqlJqsaO1RfCJ6o5QL4Sk0uCzkgOCEHT',
        'redirect_uri' => 'http://ds8.com.cn/login/tianqi/callback',
    ],

    'qq' => [
        'client_id' => '101441921',
        'client_secret' => '0b51fea80164a1c697b8e1663f1d9da2',
        'redirect_uri' => 'http://ds8.com.cn/login/qq/callback',
    ],

    'packages' => [
        'jenssegers/agent' => [
            // Service providers to be registered by your plugin
            'providers' => [
                \Jenssegers\Agent\AgentServiceProvider::class,
            ],

            // Aliases to be registered by your plugin in the form of $alias => $pathToFacade
            'aliases' => [
                'Agent' => Jenssegers\Agent\Facades\Agent::class,
            ],

            // The namespace to set the configuration under. For this example, this package accesses it's config via config('purifier.' . $key), so the namespace 'purifier' is what we put here
            'config_namespace' => 'agent',

        ],
    ],
];

