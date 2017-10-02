<?php

return [
    'github' => [
        'client_id' => '48c3892f207d8e87dec4',
        'client_secret' => '02af115b9148ecffcb53e6a824f8cc8d17bf98b6',
        'redirect_uri' => 'http://6.jq2.com/login/github/callback',
    ],
    
    'tianqi' => [
        'client_id' => '2',
        'client_secret' => 'BzXQ9q5G9kdYYsUuvjEFUOMw1V56cQt1H4EEcLj2',
        'redirect_uri' => 'http://6.jq2.com/login/tianqi/callback',
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

