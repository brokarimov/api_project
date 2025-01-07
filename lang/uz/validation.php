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

    'accepted' => ':Attribute maydoni qabul qilinishi kerak.',
    'accepted_if' => ':Attribute maydoni :other :value bo‘lganda qabul qilinishi kerak.',
    'active_url' => ':Attribute maydoni haqiqiy URL bo‘lishi kerak.',
    'after' => ':Attribute maydoni :date dan keyingi sana bo‘lishi kerak.',
    'after_or_equal' => ':Attribute maydoni :date dan keyingi yoki unga teng bo‘lgan sana bo‘lishi kerak.',
    'alpha' => ':Attribute maydoni faqat harflardan iborat bo‘lishi kerak.',
    'alpha_dash' => ':Attribute maydoni faqat harflar, raqamlar, chiziqlar va pastki chiziqlardan iborat bo‘lishi kerak.',
    'alpha_num' => ':Attribute maydoni faqat harflar va raqamlardan iborat bo‘lishi kerak.',
    'array' => ':Attribute maydoni massiv bo‘lishi kerak.',
    'ascii' => ':Attribute maydoni faqat bir baytli alfanumerik belgilar va belgilarni o‘z ichiga olishi kerak.',
    'before' => ':Attribute maydoni :date dan oldingi sana bo‘lishi kerak.',
    'before_or_equal' => ':Attribute maydoni :date dan oldingi yoki unga teng bo‘lgan sana bo‘lishi kerak.',
    'between' => [
        'array' => ':Attribute maydoni :min va :max orasida elementlarga ega bo‘lishi kerak.',
        'file' => ':Attribute maydoni :min va :max kilobayt orasida bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :min va :max orasida bo‘lishi kerak.',
        'string' => ':Attribute maydoni :min va :max belgilar orasida bo‘lishi kerak.',
    ],
    'boolean' => ':Attribute maydoni to‘g‘ri yoki noto‘g‘ri bo‘lishi kerak.',
    'can' => ':Attribute maydoni ruxsatsiz qiymatni o‘z ichiga oladi.',
    'confirmed' => ':Attribute maydoni tasdiqlash mos kelmaydi.',
    'contains' => ':Attribute maydonida zarur qiymat yo‘q.',
    'current_password' => 'Parol noto‘g‘ri.',
    'date' => ':Attribute maydoni haqiqiy sana bo‘lishi kerak.',
    'date_equals' => ':Attribute maydoni :date ga teng sana bo‘lishi kerak.',
    'date_format' => ':Attribute maydoni :format formatiga mos kelishi kerak.',
    'decimal' => ':Attribute maydoni :decimal kasr joylarga ega bo‘lishi kerak.',
    'declined' => ':Attribute maydoni rad etilishi kerak.',
    'declined_if' => ':Attribute maydoni :other :value bo‘lganda rad etilishi kerak.',
    'different' => ':Attribute va :other maydonlari har xil bo‘lishi kerak.',
    'digits' => ':Attribute maydoni :digits raqamlardan iborat bo‘lishi kerak.',
    'digits_between' => ':Attribute maydoni :min va :max raqamlar orasida bo‘lishi kerak.',
    'dimensions' => ':Attribute maydoni yaroqsiz tasvir o‘lchamlariga ega.',
    'distinct' => ':Attribute maydoni dublikat qiymatga ega.',
    'doesnt_end_with' => ':Attribute maydoni quyidagilardan biri bilan tugamasligi kerak: :values.',
    'doesnt_start_with' => ':Attribute maydoni quyidagilardan biri bilan boshlanmasligi kerak: :values.',
    'email' => ':Attribute maydoni haqiqiy elektron pochta manzili bo‘lishi kerak.',
    'ends_with' => ':Attribute maydoni quyidagilardan biri bilan tugashi kerak: :values.',
    'enum' => 'Tanlangan :attribute noto‘g‘ri.',
    'exists' => 'Tanlangan :attribute noto‘g‘ri.',
    'extensions' => ':Attribute maydoni quyidagi kengaytmalardan biriga ega bo‘lishi kerak: :values.',
    'file' => ':Attribute maydoni fayl bo‘lishi kerak.',
    'filled' => ':Attribute maydonida qiymat bo‘lishi kerak.',
    'gt' => [
        'array' => ':Attribute maydonida :value dan ko‘proq element bo‘lishi kerak.',
        'file' => ':Attribute maydoni :value kilobaytdan katta bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :value dan katta bo‘lishi kerak.',
        'string' => ':Attribute maydoni :value belgidan katta bo‘lishi kerak.',
    ],
    'gte' => [
        'array' => ':Attribute maydonida :value yoki undan ko‘p element bo‘lishi kerak.',
        'file' => ':Attribute maydoni :value kilobayt yoki undan katta bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :value yoki undan katta bo‘lishi kerak.',
        'string' => ':Attribute maydoni :value belgidan katta yoki teng bo‘lishi kerak.',
    ],
    'hex_color' => ':Attribute maydoni haqiqiy geksadecimal rang bo‘lishi kerak.',
    'image' => ':Attribute maydoni rasm bo‘lishi kerak.',
    'in' => 'Tanlangan :attribute noto‘g‘ri.',
    'in_array' => ':Attribute maydoni :other ichida mavjud bo‘lishi kerak.',
    'integer' => ':Attribute maydoni butun son bo‘lishi kerak.',
    'ip' => ':Attribute maydoni haqiqiy IP-manzil bo‘lishi kerak.',
    'ipv4' => ':Attribute maydoni haqiqiy IPv4-manzil bo‘lishi kerak.',
    'ipv6' => ':Attribute maydoni haqiqiy IPv6-manzil bo‘lishi kerak.',
    'json' => ':Attribute maydoni haqiqiy JSON qatori bo‘lishi kerak.',
    'list' => ':Attribute maydoni ro‘yxat bo‘lishi kerak.',
    'lowercase' => ':Attribute maydoni faqat kichik harflardan iborat bo‘lishi kerak.',
    'lt' => [
        'array' => ':Attribute maydonida :value dan kam element bo‘lishi kerak.',
        'file' => ':Attribute maydoni :value kilobaytdan kam bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :value dan kichik bo‘lishi kerak.',
        'string' => ':Attribute maydoni :value belgidan kichik bo‘lishi kerak.',
    ],
    'lte' => [
        'array' => ':Attribute maydonida :value dan oshiq element bo‘lmasligi kerak.',
        'file' => ':Attribute maydoni :value kilobayt yoki undan kichik bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :value yoki undan kichik bo‘lishi kerak.',
        'string' => ':Attribute maydoni :value belgidan kichik yoki teng bo‘lishi kerak.',
    ],
    'mac_address' => ':Attribute maydoni haqiqiy MAC manzili bo‘lishi kerak.',
    'max' => [
        'array' => ':Attribute maydonida :max dan oshiq element bo‘lmasligi kerak.',
        'file' => ':Attribute maydoni :max kilobaytdan katta bo‘lmasligi kerak.',
        'numeric' => ':Attribute maydoni :max dan katta bo‘lmasligi kerak.',
        'string' => ':Attribute maydoni :max belgidan katta bo‘lmasligi kerak.',
    ],
    'max_digits' => ':Attribute maydoni :max raqamlardan oshmasligi kerak.',
    'mimes' => ':Attribute maydoni quyidagi turdagi fayl bo‘lishi kerak: :values.',
    'mimetypes' => ':Attribute maydoni quyidagi turdagi fayl bo‘lishi kerak: :values.',
    'min' => [
        'array' => ':Attribute maydonida kamida :min element bo‘lishi kerak.',
        'file' => ':Attribute maydoni kamida :min kilobayt bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni kamida :min bo‘lishi kerak.',
        'string' => ':Attribute maydoni kamida :min belgidan iborat bo‘lishi kerak.',
    ],
    'min_digits' => ':Attribute maydoni kamida :min raqamlardan iborat bo‘lishi kerak.',
    'missing' => ':Attribute maydoni bo‘lishi kerak emas.',
    'missing_if' => ':Attribute maydoni :other :value bo‘lganda bo‘lmasligi kerak.',
    'missing_unless' => ':Attribute maydoni :other :value bo‘lmaganda bo‘lmasligi kerak.',
    'missing_with' => ':Attribute maydoni :values mavjud bo‘lganda bo‘lmasligi kerak.',
    'missing_with_all' => ':Attribute maydoni :values mavjud bo‘lganda bo‘lmasligi kerak.',
    'multiple_of' => ':Attribute maydoni :value ko‘paytmasi bo‘lishi kerak.',
    'not_in' => 'Tanlangan :attribute noto‘g‘ri.',
    'not_regex' => ':Attribute maydoni formati noto‘g‘ri.',
    'numeric' => ':Attribute maydoni son bo‘lishi kerak.',
    'password' => [
        'letters' => ':Attribute maydoni kamida bitta harfni o‘z ichiga olishi kerak.',
        'mixed' => ':Attribute maydoni kamida bitta katta va bitta kichik harfni o‘z ichiga olishi kerak.',
        'numbers' => ':Attribute maydoni kamida bitta raqamni o‘z ichiga olishi kerak.',
        'symbols' => ':Attribute maydoni kamida bitta belgi o‘z ichiga olishi kerak.',
        'uncompromised' => 'Berilgan :attribute ma’lumotlar qochqini bo‘lgan. Iltimos, boshqa :attribute tanlang.',
    ],
    'present' => ':Attribute maydoni mavjud bo‘lishi kerak.',
    'prohibited' => ':Attribute maydoni taqiqlangan.',
    'prohibited_if' => ':Attribute maydoni :other :value bo‘lganda taqiqlangan.',
    'prohibited_unless' => ':Attribute maydoni :other :values ichida bo‘lsa, taqiqlangan.',
    'prohibits' => ':Attribute maydoni :other mavjud bo‘lishini taqiqlaydi.',
    'regex' => ':Attribute maydoni formati noto‘g‘ri.',
    'required' => ':Attribute maydoni to‘ldirilishi shart.',
    'required_if' => ':Attribute maydoni :other :value bo‘lganda to‘ldirilishi shart.',
    'required_unless' => ':Attribute maydoni :other :values ichida bo‘lmasa, to‘ldirilishi shart.',
    'required_with' => ':Values mavjud bo‘lganda :attribute maydoni to‘ldirilishi shart.',
    'required_with_all' => ':Values mavjud bo‘lganda :attribute maydoni to‘ldirilishi shart.',
    'required_without' => ':Values mavjud bo‘lmaganda :attribute maydoni to‘ldirilishi shart.',
    'required_without_all' => ':Values mavjud bo‘lmaganda :attribute maydoni to‘ldirilishi shart.',
    'same' => ':Attribute va :other mos kelishi kerak.',
    'size' => [
        'array' => ':Attribute maydoni :size elementni o‘z ichiga olishi kerak.',
        'file' => ':Attribute maydoni :size kilobayt bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :size bo‘lishi kerak.',
        'string' => ':Attribute maydoni :size belgidan iborat bo‘lishi kerak.',
    ],
    'starts_with' => ':Attribute maydoni quyidagilardan biri bilan boshlanishi kerak: :values.',
    'string' => ':Attribute maydoni qator bo‘lishi kerak.',
    'timezone' => ':Attribute maydoni haqiqiy vaqt zonasi bo‘lishi kerak.',
    'unique' => ':Attribute maydoni allaqachon olingan.',
    'uploaded' => ':Attribute yuklash muvaffaqiyatsiz tugadi.',
    'uppercase' => ':Attribute maydoni faqat katta harflardan iborat bo‘lishi kerak.',
    'url' => ':Attribute maydoni haqiqiy URL bo‘lishi kerak.',
    'ulid' => ':Attribute maydoni haqiqiy ULID bo‘lishi kerak.',
    'uuid' => ':Attribute maydoni haqiqiy UUID bo‘lishi kerak.',



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
