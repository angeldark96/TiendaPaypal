<?php
/**
 * Created by PhpStorm.
 * User: GeancarloCE
 * Date: 11/02/2017
 * Time: 5:33
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => DATABASE['driver'] ?? 'mysql',
    'host'      => DATABASE['host'] ?? 'host',
    'database'  => DATABASE['database'] ?? 'bdtienda',
    'username'  => DATABASE['username'] ?? 'my-username',
    'password'  => DATABASE['password'] ?? 'my-password',
    'charset'   => DATABASE['charset'] ?? 'utf8',
    'collation' => DATABASE['collation'] ??'utf8_unicode_ci',
    'prefix'    => '',
]);


//Iniciar la capsula para conexion de BD
$capsule->bootEloquent();