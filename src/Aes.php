<?php

namespace Fengdangxing\Aes;

use Hyperf\Contract\ConfigInterface;
use Hyperf\Utils\ApplicationContext;
use HyperfExt\Encryption\Crypt;

class Aes
{
    /**
     * 加密
     * @param string $data
     * @return string
     */
    public static function encrypt(string $data)
    {
        $config = ApplicationContext::getContainer()->get(ConfigInterface::class);
        $appConfig = $config->get('app');
        return openssl_encrypt($data, $appConfig['fengdangxing']['encrypt']['method'], $appConfig['fengdangxing']['encrypt']['key'], OPENSSL_RAW_DATA, $appConfig['fengdangxing']['encrypt']['iv']);
    }

    /**
     * 解密
     * @param string $data
     * @return mixed
     */
    public static function decrypt(string $data)
    {
        $config = ApplicationContext::getContainer()->get(ConfigInterface::class);
        $appConfig = $config->get('app');
        return openssl_decrypt($data, $appConfig['fengdangxing']['encrypt']['method'], $appConfig['fengdangxing']['encrypt']['key'], OPENSSL_RAW_DATA, $appConfig['fengdangxing']['encrypt']['iv']);
    }


}