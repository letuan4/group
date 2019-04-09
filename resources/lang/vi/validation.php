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

    'accepted'             => ':attribute phải được chấp nhận.',
    'active_url'           => ':attribute không phải là một URL hợp lệ.',
    'after'                => ':attribute phải là một ngày sau :date.',
    'after_or_equal'       => ':attribute phải là một ngày sau hoặc bằng :date.',
    'alpha'                => ':attribute chỉ có thể là chữ.',
    'alpha_dash'           => ':attribute chỉ có thể chứa chữ cái, số và dấu gạch ngang.',
    'alpha_num'            => ':attribute chỉ có thể chứa chữ cái và số.',
    'array'                => ':attribute phải là mảng.',
    'before'               => ':attribute phải là một ngày trước :date.',
    'before_or_equal'      => ':attribute phải là ngày trước hoặc bằng :date.',
    'between'              => [
        'numeric' => ':attribute phải nằm giữa :min và :max.',
        'file'    => ':attribute phải nằm giữa :min và :max kilobytes.',
        'string'  => ':attribute phải nằm giữa :min và :max characters.',
        'array'   => ':attribute phải nằm giữa :min và :max items.',
    ],
    'boolean'              => ':attribute trường true hoặc false.',
    'confirmed'            => ':attribute xác nhận không khớp.',
    'date'                 => ':attribute không phải là ngày hợp lệ.',
    'date_format'          => ':attribute không khớp với định dạng :format.',
    'different'            => ':attribute và :other phải khác.',
    'digits'               => ':attribute cần phải :digits chữ số.',
    'digits_between'       => ':attribute phải nằm giữa :min và :max chữ số.',
    'dimensions'           => ':attribute có kích thước hình ảnh không hợp lệ.',
    'distinct'             => ':attribute trường có giá trị trùng lặp
    .',
    'email'                => ':attribute phải là một địa chỉ email hợp lệ
.',
    'exists'               => ':attribute đã chọn không có hiệu lực.',
    'file'                 => ':attribute phải là một tập tin.',
    'filled'               => ':attribute phải có giá trị.',
    'image'                => ':attribute phải có đinh dạng image.',
    'in'                   => ':attribute đã chọn không có hiệu lực.',
    'in_array'             => ':attribute trường không tồn tại trong :other.',
    'integer'              => ':attribute phải là một số nguyên.',
    'ip'                   => ':attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4'                 => ':attribute phải là một địa chỉ IPV4 hợp lệ.',
    'ipv6'                 => ':attribute phải là một địa chỉ IPV6 hợp lệ.',
    'json'                 => ':attribute phải là một chuỗi JSON hợp lệ.',
    'max'                  => [
        'numeric' => ':attribute không được lớn hơn :max.',
        'file'    => ':attribute không được lớn hơn :max kilobytes.',
        'string'  => ':attribute không được lớn hơn :max ký tự.',
        'array'   => ':attribute không được lớn hơn :max phần tử.',
    ],
    'mimes'                => ':attribute phải là tập tin của type: :values.',
    'mimetypes'            => ':attribute phải là tập tin của type: :values.',
    'min'                  => [
        'numeric' => ':attribute phải là ít nhất :min.',
        'file'    => ':attribute phải là ít nhất :min kilobytes.',
        'string'  => ':attribute phải là ít nhấtt :min ký tự.',
        'array'   => ':attribute phải là ít nhất :min phần tử.',
    ],
    'not_in'               => ':attribute đã chọn không có hiệu lực.',
    'numeric'              => ':attribute phải là số.',
    'present'              => ':attribute trường phải có mặt.',
    'regex'                => ':attribute định dạng không hợp lệ.',
    'required'             => ':attribute chưa được nhập.',
    'required_if'          => ':attribute trường được yêu cầu khi :other is :value.',
    'required_unless'      => ':attribute trường là bắt buộc trừ khi :other is in :values.',
    'required_with'        => ':attribute trường được yêu cầu khi :values hiện diện.',
    'required_with_all'    => ':attribute trường được yêu cầu khi :values hiện diện.',
    'required_without'     => ':attribute trường được yêu cầu khi :values không hiện diện.',
    'required_without_all' => ':attribute trường bắt buộc khi không có trường :values hiện diện.',
    'same'                 => ':attribute và :other phải phù hợp.',
    'size'                 => [
        'numeric' => ':attribute cần phải :size.',
        'file'    => ':attribute cần phải :size kilobytes.',
        'string'  => ':attribute cần phải có :size ký tự.',
        'array'   => ':attribute phải chứa :size phần tử.',
    ],
    'string'               => ':attribute phải là kiểu chữ.',
    'timezone'             => ':attribute phải là một vùng hợp lệ.',
    'unique'               => ':attribute đã được sử dụng.',
    'uploaded'             => ':attribute không tải lên được.',
    'url'                  => ':attribute định dạng không hợp lệ.',
    'uuid' => 'Các :attribute phải là một UUID hợp lệ.',

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
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
