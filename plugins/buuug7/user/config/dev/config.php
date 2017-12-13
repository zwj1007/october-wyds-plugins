<?php

return [
    'github' => [
        'client_id' => '5abedbc11fbc40fdb971',
        'client_secret' => 'ee139b1e7398b4db10627569e4284f47720ba7ac',
        'redirect_uri' => 'http://october-wyds.app/login/github/callback',
    ],

    'tianqi' => [
        'client_id' => '7',
        'client_secret' => '	pmhkRsTHfASEOwGZ476Nsxqf3AxTy2r6ZbH2XKiG',
        'redirect_uri' => 'http://october-wyds.test/login/tianqi/callback',
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

