<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Image Driver
    |--------------------------------------------------------------------------
    |
    | Intervention Image supports "GD Library" and "Imagick" to process images
    | internally. You may choose one of them according to your PHP
    | configuration. By default PHP's "GD Library" implementation is used.
    |
    | Supported: "gd", "imagick"
    |
    */

    'driver' => 'gd',

    // 操作
    'operations' => [
        'upload' => [
            'user_avatar' => [
                'base_path' => public_path('uploads/images'),
                'base_url' => 'http://localhost:8000/uploads/images',
                'path' => 'avatar',
                // 限制上传图片的大小，以字节为单位
                'min_file_size' => 1,
                'max_file_size' => 2 * 1024 * 1024,
                // 缩略图
                'thumbnails' => [
                    ['width' => 300, 'height' => 300],
                ]
            ],

            'banner_carousel' => [
                'base_path' => public_path('uploads/images'),
                'base_url' => 'http://localhost:8000/uploads/images',
                'path' => 'banner_carousel',
                // 限制上传图片的大小，以字节为单位
                'min_file_size' => 1,
                'max_file_size' => 2 * 1024 * 1024,
            ],
        ],

        'crop' => [
            'user_avatar' => [
                'origin_path' => public_path('uploads/images'),
                'base_path' => public_path('uploads/images'),
                'base_url' => 'http://localhost:8000/uploads/images',
                // 缩略图
                'thumbnails' => [
                    ['width' => 60, 'height' => 60],
                    ['width' => 80, 'height' => 80],
                ]
            ],

            'banner_carousel' => [
                'origin_path' => public_path('uploads/images'),
                'base_path' => public_path('uploads/images'),
                'base_url' => 'http://localhost:8000/uploads/images',
                // 缩略图
                'thumbnails' => [
                    ['width' => 108, 'height' => 45],
                    ['width' => 1080, 'height' => 450],
                ]
            ],
        ]
    ],
];