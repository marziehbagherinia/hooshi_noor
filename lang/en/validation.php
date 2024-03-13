<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'error'                => 'An error occurred in input data validation.',
    'accepted'             => ':attribute should be accepted.',
    'active_url'           => 'Address :attribute is not valid.',
    'after'                => ':attribute should be after :date .',
    'after_or_equal'       => ':attribute should be after or same as :date ،',
    'alpha'                => ':attribute should be just alphabet.',
    'alpha_dash'           => ':attribute should be just alphabet, number, dash, or underline.',
    'alpha_num'            => ':attribute should be just alphabet and number.',
    'array'                => ':attribute should be just array.',
    'before'               => ':attribute should be before :date .',
    'before_or_equal'      => ':attribute should be before or same as :date',
    'between'              => [
        'numeric' => ':attribute should be between :min and :max .',
        'file'    => ':attribute should be between :min and :max kB.',
        'string'  => ':attribute should be between :min and :max character.',
        'array'   => ':attribute should be between :min and :max items.',
    ],
    'boolean'              => ':attribute could be just true or false .',
    'confirmed'            => ':attribute is not confirmed.',
    'date'                 => ':attribute is not a valid date.',
    'date_equals'          => 'The :attribute must be a date equal to :date.',
    'date_format'          => ':attribute does not match with :format.',
    'different'            => ':attribute and :other should be different.',
    'digits'               => ':attribute should be :digits digits.',
    'digits_between'       => ':attribute should be between :min and :max digits.',
    'dimensions'           => 'The dimensions of :attribute are not acceptable.',
    'distinct'             => ':attribute has duplicate value.',
    'email'                => ':attribute should be valid email.',
    'exists'               => 'Selected :attribute is not valid.',
    'file'                 => ':attribute should be valid field.',
    'filled'               => ':attribute should have value.',
    'gt'                   => [
        'numeric' => ':attribute should be greater than :value.',
        'file'    => ':attribute should be greater than :value kB.',
        'string'  => ':attribute should be more than :value characters.',
        'array'   => ':attribute should be more than :value items.',
    ],
    'gte'                  => [
        'numeric' => ':attribute should be greater than or equal to :value.',
        'file'    => ':attribute should be greater than or equal to :value kB.',
        'string'  => ':attribute should be more than or equal to :value characters.',
        'array'   => ':attribute should be more than or equal to :value items.',
    ],
    'image'                => ':attribute should be valid picture.',
    'in'                   => 'Selected :attribute is not valid.',
    'in_array'             => ':attribute does not exist in :other list.',
    'integer'              => ':attribute should be integer.',
    'ip'                   => ':attribute should be valid IP address.',
    'ipv4'                 => ':attribute must be a valid address of type IPv4.',
    'ipv6'                 => ':attribute must be a valid address of type IPv6.',
    'json'                 => ':attribute must be a valid text of type JSON.',
    'lt'                   => [
        'numeric' => ':attribute should be smaller than :value.',
        'file'    => ':attribute should be smaller than :value kB.',
        'string'  => ':attribute should be less than :value characters.',
        'array'   => ':attribute should be less than :value items.',
    ],
    'lte'                  => [
        'numeric' => ':attribute should be smaller than or equal to :value باشد.',
        'file'    => ':attribute should be smaller than or equal to :value kB.',
        'string'  => ':attribute should be less than or equal to :value characters.',
        'array'   => ':attribute should be less than or equal to :value items.',
    ],
    'max'                  => [
        'numeric' => ':attribute should not be greater than :max.',
        'file'    => ':attribute should not be greater than :max kB.',
        'string'  => ':attribute should not be more than :max characters.',
        'array'   => ':attribute should not be more than :max items.',
    ],
    'mimes'                => 'Valid formats of files are: :values.',
    'mimetypes'            => 'Valid formats of files are: :values.',
    'min'                  => [
        'numeric' => ':attribute should not be smaller than :min.',
        'file'    => ':attribute should not be smaller than :min kB.',
        'string'  => ':attribute should not be less than :min characters.',
        'array'   => ':attribute should not be less than :min items.',
    ],
    'not_in'               => 'Selected :attribute is not valid.',
    'not_regex'            => 'Format of :attribute is not valid.',
    'numeric'              => ':attribute should be digits or string of digits.',
    'present'              => ':attribute should be exists in sending parameters.',
    'regex'                => ':attribute is not valid.',
    'required'             => ':attribute is required.',
    'required_if'          => 'While :other is equal to :value, :attribute is required.',
    'required_unless'      => 'The :attribute field is required, unless :other is present in :values.',
    'required_with'        => 'If there is a :values field, the :attribute field is also required.',
    'required_with_all'    => 'If there are :values fields, the :attribute field is also required.',
    'required_without'     => 'If there is no :values field, the :attribute field is required.',
    'required_without_all' => 'In the absence of any of the :values fields, the :attribute field is required.',
    'same'                 => ':attribute and :other must be the same.',
    'size'                 => [
        'numeric' => ':attribute must be equal to :size.',
        'file'    => ':attribute must be equal to :size kB.',
        'string'  => ':attribute must be equal to :size characters.',
        'array'   => ':attribute must be equal to :size items.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values',
    'string'               => ':attribute should be string.',
    'timezone'             => ':attribute should be valid timezone.',
    'unique'               => ':attribute has selected before.',
    'uploaded'             => 'Failed to load :attribute file.',
    'url'                  => ':attribute is not valid.',
    'uuid'                 => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name'                  => 'name',
        'username'              => 'username',
        'email'                 => 'email',
        'first_name'            => 'first_name',
        'last_name'             => 'last_name',
        'password'              => 'password',
        'password_confirmation' => 'password_confirmation',
        'city'                  => 'city',
        'country'               => 'country',
        'address'               => 'address',
        'phone'                 => 'phone',
        'mobile'                => 'mobile',
        'age'                   => 'age',
        'sex'                   => 'sex',
        'gender'                => 'gender',
        'day'                   => 'day',
        'month'                 => 'month',
        'year'                  => 'year',
        'hour'                  => 'hour',
        'minute'                => 'minute',
        'second'                => 'second',
        'title'                 => 'title',
        'text'                  => 'text',
        'content'               => 'content',
        'description'           => 'description',
        'excerpt'               => 'excerpt',
        'date'                  => 'date',
        'time'                  => 'time',
        'available'             => 'available',
        'size'                  => 'size',
        'terms'                 => 'terms',
        'province'              => 'province',
        'transport_type'        => 'transport_type',
    ],
];
