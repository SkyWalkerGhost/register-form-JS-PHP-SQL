<?php
//connect database whit PDO


$db = 'mysql:dbname=new1_01nu9310h; host=localhost; charset=utf8;';
$user = 'root';
$password = '';

try {
    $PDO = new PDO($db, $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
