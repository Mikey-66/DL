<?php
/**
 * Created by PhpStorm.
 * User: fudi
 * Date: 2018/12/10
 * Time: 18:00
 */

$config = [
    'MysqlConfig' => [
        'host' => '127.0.0.1',
        'port' => '3306',
        'user' => '123456',
        'pwd' => '123456',
    ],
];


if (!function_exists("say"))
{
    function say()
    {
        echo 'aaaa<br/>';
    }
}