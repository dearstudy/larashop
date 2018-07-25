<?php

return [
    'alipay' => [
        'app_id'         => '2016091600526773',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArhWCLbyrA1aTwqeQq6I5CggbOC91bx1U25B+zFtXxu10VINAv1S0VLWpI2tJ2V9ba4BF5sR3uC3ntjNUZWYTX7et6UcJ2TMOma5tUdfMKUasYqZTIeF+P66hFptcZqj1yBY0xKS8JL6AsRgBEM7iXyrjRMtplIRUiCWbphrYJW7dcw5/d0MiZZOJa5nEu9GC+GOzH3MTE54v5FIir13o+brqikZ9KSViMlu7q9LlrNSVfhXB+pT9XYYThMK/3RYvshsyF4bixMmgO9iI+kvb6D78qf4BlVt2kDv++RQC9Z9+GFoQi1yNlJzhh4EMAGSijQzsz3spktMdROczWJRKewIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEArhWCLbyrA1aTwqeQq6I5CggbOC91bx1U25B+zFtXxu10VINAv1S0VLWpI2tJ2V9ba4BF5sR3uC3ntjNUZWYTX7et6UcJ2TMOma5tUdfMKUasYqZTIeF+P66hFptcZqj1yBY0xKS8JL6AsRgBEM7iXyrjRMtplIRUiCWbphrYJW7dcw5/d0MiZZOJa5nEu9GC+GOzH3MTE54v5FIir13o+brqikZ9KSViMlu7q9LlrNSVfhXB+pT9XYYThMK/3RYvshsyF4bixMmgO9iI+kvb6D78qf4BlVt2kDv++RQC9Z9+GFoQi1yNlJzhh4EMAGSijQzsz3spktMdROczWJRKewIDAQABAoIBAEfobIh1+XH8jjaGvtSWwtbo+E1iFTEbvZSggC/rvztVlIrgWJtv4rlm/IG77JpUsE+cgcNL/mPe2mrBkyf7XR9ZoQXOKTxFwc8rZM68xAF8xvJM3+QL3/lwKexLqoRhYH0Q5yUfIvROmJwOXUpTGuDSt2QQXgFSFBTU7BFV31i+Xuh6HTTNVANbIspyMJVwdgjqtbc+KquAfRMCQe9e/m+ci6R0uGbI+fHUZXTFJ1Pr0AX8flma9AX6Erq3+CKHuSVzhQpI9WsBLDYTINYVTH+xXiPRHoc+gkYctrc5y0+qC45lzZZcgpjjMxOFURKkFw+tpxRQ6L4YJU+/YdclDjECgYEA44hWQDOY51JNHgOqBWq/b30nxvcg+X/k2zdIUX46mpICRBDzifB7OL7PQVTFLxMoRD6vlkIhoSz1QfImbfBcoyq8BNtQW/b+SP+JAkVbU8klphQSLIBvRbZz14VLt344owmA8n5LPUCB1KhLBJMQeHK8i6WrmgXEIW5/9F/zpMMCgYEAw91DQylGpRisY4rD8arN0r9OIUQr6jixbdXUv0ZxwC5xWFMPI1dd4y5cZdO7tsxUs85vWZf225vZnlHfnVr7FhoakHceRe6OTkS0dR2Q95Yv+DAeSiHb4foHbhC9C7l4xh3rJrsMq8UuKZW4UQ6BeVKyb/3Y2yWroPN0+K9GB+kCgYEArVZlFt34A2oAk/gIo73R/1ZiYkJMnaagK5zu/B5k+PJ4xXAAiLpqtS0v6T5yRc2bZHo4/Ah/ZDFC2q1mN2TgvfFFcZG+o4ED8YqyzscVrzvS8bXiroJdwscfczX6G90Nuq73zEUIfq5Q+jgHhoGfD5OhLeXVWC5CX5G16u7aR08CgYAYj3RRxalAJpnnWY08jqiElsybS0seccF9/mRRH+o/qRM5eiDZ06jIRhX8BtLxFyo/6dD4sR+ZZi+htK6PssrteJSALQ+0wTdDBUaDsRNumHynaJFDxn8mFQ49dQffooBMh4/nKWlrWKxzNn0IXQNLTV1mwbQhttWQtzahwIjNkQKBgQCzO2Jb5lhCSWAw5JBspy+xu99MVpHw1k0pvCuFD6JXj2EOGA5nM/VAobSSe7vML16zB9EojvxjV5pYMmjmF/tJG9+5E7xnlX6JFsbvtsAe0WM52ngRAWCuHQYz21HbD5l0buz55oYLW4FAiFTU219e92e+UFtF3s1YKl+WQMbbww==',
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
