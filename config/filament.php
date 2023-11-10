<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Filament Dashboard Configuration
    |--------------------------------------------------------------------------
    |
    | This option defines the configuration for the Filament dashboard.
    |
    */

    'dashboard' => [
        [
            'label' => 'Main',
            'items' => [
                [
                    'label' => 'Dashboard',
                    'route' => 'filament.dashboard',
                    'icon' => 'heroicon-o-home',
                ],
                [
                    'label' => 'Users',
                    'route' => 'filament.resource.users',
                    'icon' => 'heroicon-o-users',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Filament Logo
    |--------------------------------------------------------------------------
    |
    | This option defines the logo for the Filament dashboard.
    |
    */

    'logo' => [
        'path' => '/path/to/logo.png',
        'alt' => 'Filament Logo',
    ],

    /*
    |--------------------------------------------------------------------------
    | Filament Title
    |--------------------------------------------------------------------------
    |
    | This option defines the title for the Filament dashboard.
    |
    */

    'title' => 'Filament Admin',

    /*
    |--------------------------------------------------------------------------
    | Filament User
    |--------------------------------------------------------------------------
    |
    | This option defines the user model to be used by Filament.
    |
    */

    'user' => App\Models\User::class,

    /*
    |--------------------------------------------------------------------------
    | Filament Localization
    |--------------------------------------------------------------------------
    |
    | This option allows you to customize the localization of Filament.
    |
    */

    'localization' => [
        'translations' => 'auto', // You can also specify a path to your custom translations
        'locale' => 'en', // The default locale for Filament
    ],

];
