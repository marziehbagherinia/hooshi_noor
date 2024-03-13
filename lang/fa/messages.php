<?php

return
[
    'options' => 'سرویس آماده است...',

    'work_fine' => [
        'v1' => 'سرویس احراز هویت به درستی کار می کند.!',
    ],

    'fail' => 'عملیات با خطا مواجه شد...!',

	'common' =>
	[
		'inputs_validator' =>
        [
            'fail' => 'خطا در اطلاعات ورودی',
        ],
        'exceptions' =>
        [
            'Symfony\Component\HttpKernel\Exception\NotFoundHttpException'         => 'صفحه مورد نظر یافت نشد ...!',
            'Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException' => 'متد درخواست معتبر نیست ...!',
        ]
    ],

    'users' => [
        'profile' => [
            'success' => 'عملیات با موفقیت انجام شد.',
        ],
        'edit' => [
            'success' => 'عملیات با موفقیت انجام شد.',
        ]
    ]
];
