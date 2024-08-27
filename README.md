# hyperf-php-aes
#配置mongodb  config/autoload/app.php
```php
return [
    'fengdangxing' => [
        'encrypt' => [
            'method' => 'AES-128-CBC',// Encryption methods: AES-256-CBC
            'key' => 'Y6eENzQ69OKqRaHE',// secret key
            'iv' => 'qweNzsd9OKJOIJoo',// offset key
        ]
    ]
];

```
#use
```php
<?php
$str =  \Fengdangxing\Aes\Aes::encrypt("121212");
echo $str.PHP_EOL;
echo \Fengdangxing\Aes\Aes::decrypt("121212");

```

