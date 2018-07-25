<?php

return [
    'alipay' => [
        'app_id'         => '2016091600526773',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz8he9ukR0iaumMtGpoXhhBEiPGU5l2a9HAB0y9holJEJKRIAWTBVQKtyelKrwqD/Aoe3GWHAeZv2Aiisz6UoClK/C9t+1qjrySG3QkafdqFdyclKi9RklN7ggqxqFUr96JbT40orU2IbdK7bR20C+i22gIQiQSlgmO+rGSTnYdLpIt7Kpim2GhkijXf3WpojEbzJNUuMqy/IBQYj/hoGIBZT/c74/YNjMC4Lk/IjL2aHYGiSOm9blrUWDuOmXAjg9Frzvj+I/QdMu/oLYlCf7uPucsVZSaXHysxv5982DIgz7LrP3RahSUJvJicYVPbaQH060voWrWiFuaac8YcHRwIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAz8he9ukR0iaumMtGpoXhhBEiPGU5l2a9HAB0y9holJEJKRIAWTBVQKtyelKrwqD/Aoe3GWHAeZv2Aiisz6UoClK/C9t+1qjrySG3QkafdqFdyclKi9RklN7ggqxqFUr96JbT40orU2IbdK7bR20C+i22gIQiQSlgmO+rGSTnYdLpIt7Kpim2GhkijXf3WpojEbzJNUuMqy/IBQYj/hoGIBZT/c74/YNjMC4Lk/IjL2aHYGiSOm9blrUWDuOmXAjg9Frzvj+I/QdMu/oLYlCf7uPucsVZSaXHysxv5982DIgz7LrP3RahSUJvJicYVPbaQH060voWrWiFuaac8YcHRwIDAQABAoIBAAJjKfwqR2MjwKPOyhwFs8ahr8QD4bqEmq2kr7Lb5K+4TuOi6lAcBw68KY+QPZr54JQ13Pu0rNJ44UW7E+k624/qzXkkZ3ut6y+fbIydZR2m0v4Liwi6QwGW4ft+YaWm++3dNcgJxR+rI+eeTrSuYvde6Rbm7cHT6OE4971NOD9eeLFPdRWgix5iQRnRinGbQH0YKp5r91c6PEPlnDAX7zuRSmMmJPy5JnMlls55Mslqo/vr2aIpyUTpzywP76zo9rklNrNJ88YfTYZRPneBJrrqSgV7NkgHx72KKC3Cbo+UFdAJ/YslGWCHUSojcfFWsegVamR8yfDOTSRl4pl75pECgYEA9v2BVoAk0M1sEYLM58gQ94TOUZihK3Mb53zVl3yNOPskohdZTcjzH/MijQ/BD3iFFOk8m6gZtGH4gKB1eeot66U3HseL6X3jNgisulk73Cpu50psCWl+Z/huprSMkaCjoD3ax20kZjyGOC3c6B4xwsRaeVYdaaHZmrW9lx3IlX8CgYEA11y6z+mhXrHcf4Ie5xDE+R3goDV0Z5zamBKZ6Wto/kUQTtGKXGBflm5T7KWB5vgCoNnSBYaiAAqNo2n5T9qwlhRYlImwM7MhfSlZ+AxFTRgVhFiLtXH7QXSRjsDiV5V9bpVxrvpv1+dxL1XqSckU5vGoNBd8/3TeJkXbFa4tQjkCgYEA869iMIn1yN0kRpKawAQwWUV6mh7QxSGo4lfUFMYaP6HpntMSlSAyX89uw2ZLwIvUIbGMzranxcTzfVTTExntfJVhMMkITbKavfEJGkJ4QNzM1v4iYZbn1ITUBz4TgorPZYYhmKkiRIxqkHsPfSRtTBCWgyhnlJTPMUkmaTZFdNkCgYEAz/9/bc73S738eCn0LrbDhtaUXCdEhc24Uaelfwt+HBYX6gf22cE6kM99vtEa5TgjUbcOYMfnLqMCqRFw+O7+HfUImG1jAIvBjGCjxC4VwJ/CKFBcnqG3SUCMVJN2B6EZw/QSGC1IV/3wEwengBv1VBeRnL4Su6bj55MQRaAzlgECgYEAqs/d+UpAW2QcsRHWC49EeSgfhQaU+PMj0wSdDD3qJAiGJkMDJJKr+ChELJsCNXpDzyNQJkw039lPD9iv4P5FqAr84uGHJnIn/Vs9AZLpM8VOPhtilGTqLXWbk15xc1ZSAsFk+rA4NDQ/VtLlyo5qXp8Ci/JOeeng+EDc2+OgyZc=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
