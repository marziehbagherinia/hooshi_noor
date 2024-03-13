<?php

return
[
    'options' => 'Ready...!',

    'work_fine' => [
        'v1' => 'Authentication service api work fine ...!',
    ],

    'fail' => 'The operation encountered an error...!',

	'common' =>
	[
		'inputs_validator' =>
        [
            'fail' => 'Error in input data',
        ],
        'exceptions' =>
        [
            'Symfony\Component\HttpKernel\Exception\NotFoundHttpException'         => 'The requested page could not be found ...!',
            'Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException' => 'The request method is not valid...!',
        ]
    ],
];
