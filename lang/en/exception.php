<?php

return [
    '_base' => [
        'default'   => 'Whoops, looks like something went wrong.',
        'throttle'  => 'Too many attempts!',
        'not_found' => [
            'route' => 'We can\'t find route',
            'item'  => [
                'default'  => 'The desired Item not found.',
                'variable' => 'The desired :item not found.'
            ]
        ]
    ],

    'validation' => [
        'base' => 'Validation params error.'
    ],

    'auth' => [
        'account' => [
            'not_active' => 'Account is not active.',
            'activate' => [
                'failed' => 'Activate account failed.',
                'input' => 'Invalid activate account input.',
                'code' => [
                    'generation' => [
                        'failed' => 'Generate activation code failed.',
                        'input' => 'Invalid send activation link input.',
                    ],
                    'invalid' => 'Inavlid activation code.',
                ]
            ],
            'reset_password' => [
                'failed' => 'Reset password failed.',
                'input' => 'Invalid reset password input.',
                'limit' => 'Reset password limit reached.',
                'code' => [
                    'generation' => [
                        'failed' => 'Generate reset password code failed.',
                        'input' => 'Invalid send reset password link input.',
                    ],
                    'invalid' => 'Inavlid reset password code.',
                ]
            ]
        ],
    ],
];
