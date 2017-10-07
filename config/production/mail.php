<?php

return [


    'driver' => env('MAIL_DRIVER', 'smtp'),

    'host' => env('MAIL_HOST', 'smtp.qq.com'),

    'port' => env('MAIL_PORT', 465),

    'from' => ['address' => '3190136675@qq.com', 'name' => '渭源电子商务公共平台'],

    'encryption' => env('MAIL_ENCRYPTION', 'ssl'),

    'username' => env('MAIL_USERNAME', '3190136675@qq.com'),

    'password' => env('MAIL_PASSWORD', 'adxwvgbqhwejdfcj'),

    'sendmail' => '/usr/sbin/sendmail -bs',

];
