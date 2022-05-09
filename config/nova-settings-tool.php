<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings Path
    |--------------------------------------------------------------------------
    |
    | Path to the JSON file where settings are stored.
    |
    */

    'path' => storage_path('app/settings.json'),

    /*
    |--------------------------------------------------------------------------
    | Sidebar Label
    |--------------------------------------------------------------------------
    |
    | The text that Nova displays for this tool in the navigation sidebar.
    |
    */

    'sidebar-label' => 'Settings',

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The browser/meta page title for the tool.
    |
    */

    'title' => 'Settings',

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | The good stuff :). Each setting defined here will render a field in the
    | tool. The only required key is `key`, other available keys include `type`,
    | `label`, `help`, `placeholder`, `language`, and `panel`.
    |
    */

    'settings' => [

        [
            'key' => 'address',
            'label' => 'Address',
            'panel' => 'Contact Information',
        ],
        [
            'key' => 'phone_1',
            'label' => 'Phone 1',
            'panel' => 'Contact Information',
        ],
        [
            'key' => 'phone_2',
            'label' => 'Phone 2',
            'panel' => 'Contact Information',
        ],
        [
            'key' => 'email',
            'label' => 'Email',
            'panel' => 'Contact Information',
        ],

        [
            'key' => 'facebook_url',
            'label' => 'Facebook URL',
            'panel' => 'Social',
        ],
        [
            'key' => 'instagram_url',
            'label' => 'Instagram URL',
            'panel' => 'Social',
        ],
        [
            'key' => 'linkedin_url',
            'label' => 'LinkedIn URL',
            'panel' => 'Social',
        ],


        [
            'key' => 'snippet',
            'label' => 'Tracking Code',
            'type' => 'code',
            'language' => 'htmlmixed',
            'help' => 'Analytics snippet which will be added in all pages',
        ],

    ],

];
