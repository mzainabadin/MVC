<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();


/*
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "sample2";
*/
$capsule-> addConnection(
  [
    'driver'=>'mysql',
    'host'=>'127.0.0.1',
    'username'=>'root',
    'password'=>'root',
    'database'=>'sample2',
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci',
  ]
);
$capsule->bootEloquent();

 ?>
