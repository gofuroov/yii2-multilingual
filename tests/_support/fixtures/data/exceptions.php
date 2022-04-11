<?php

return [
    'no_attributes' => [
        'message' => 'Please specify multilingual attributes for the gofuroov\multilingual\behaviors\MultilingualBehavior in the models\PostAdvanced',
        'settings' => [
            'class' => 'gofuroov\multilingual\behaviors\MultilingualBehavior',
        ],
    ],
    'no_languages' => [
        'message' => 'Please specify array of available languages in the gofuroov\multilingual\behaviors\MultilingualBehavior or in the application parameters',
        'settings' => [
            'class' => 'gofuroov\multilingual\behaviors\MultilingualBehavior',
            'attributes' => ['title', 'content'],
        ],
    ],
    'table_not_exist' => [
        'message' => 'The table does not exist: {{%post_advanced_lang}}',
        'settings' => [
            'class' => 'gofuroov\multilingual\behaviors\MultilingualBehavior',
            'attributes' => ['title', 'content'],
            'languages' => ['en-US' => 'English'],
        ],
    ],
];

