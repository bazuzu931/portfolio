<?php

return [
    'production' => false,
    'baseUrl' => '',
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'selected' : '';
    },
    'collections' => [
        'posts',
    ],
];
