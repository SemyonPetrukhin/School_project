<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'spd';
$db_user = 'root';
$db_password = 'root';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
    $pdo = new PDO (
        "$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_password, $options);
} catch (PDOException $i){
    die("Ошибка подключения к базе данных");

}

?>