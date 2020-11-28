<?php

return [
    'repositories' => [
        'items' => 'Workshop\\DBAccess\\Repositories\\DBItemRepository'
    ],

    'presenters' => [
        'items' => 'App\\Presenters\\XMLItemPresenter'
    ],

    'response-types' => [
        'json' => 'App\\Presenters\\JsonItemPresenter',
        'xml' => 'App\\Presenters\\XMLItemPresenter',
        'html' => 'Workshop\\Ui\\Presenters\\HtmlItemPresenter',
    ]
];
