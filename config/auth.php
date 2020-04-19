<?php

 

return [

    'defaults' => [

        'guard' => 'web',

        'passwords' => 'users',

    ],

 

    'guards' => [

        'web' => [

            'driver' => 'session',

            'provider' => 'users',

        ],

        'api' => [

            'driver' => 'token',

            'provider' => 'users',

        ],

        'employee' => [

            'driver' => 'session',

            'provider' => 'employees',

        ],

    ],

 

    'providers' => [

        'users' => [

            'driver' => 'eloquent',

            'model' => App\User::class,

        ],

        'employees' => [

            'driver' => 'eloquent',

            'model' => App\Employee::class,

        ]

    ],

 

    'passwords' => [

        'users' => [

            'provider' => 'users',

            'email' => 'auth.emails.password',

            'table' => 'password_resets',

            'expire' => 60,

        ],

        'employees' => [

            'provider' => 'employees',

            'email' => 'auth.emails.password',

            'table' => 'password_resets',

            'expire' => 60,

        ],

    ],

 

];