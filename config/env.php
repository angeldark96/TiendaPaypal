<?php
/**
 * Created by PhpStorm.
 * User: GeancarloCE
 * Date: 11/02/2017
 * Time: 5:58
 */

define('DATABASE',[


    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'bdtienda',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',

]);


define('ED_MAIL', [
    'Host' => 'smtp.gmail.com',
    'SMTPAuth' => true,
    'Username' => 'angdark20@gmail.com',
    'Password' => 'huaral321',
    'SMTPSecure' => 'tls',
    'Port' => 587,
    'AddressFrom' => 'angdark20@gmail.com',
    'NameFrom' => 'Tienda Compra',

    'AddressInbox' => 'geancarlosce96@gmail.com',
    'NameInbox' => 'Geancarlos CE'

]);