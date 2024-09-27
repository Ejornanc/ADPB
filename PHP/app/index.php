<?php
phpinfo();die;
error_reporting(E_ALL);
ini_set('display_errors', 1);
$pdo = new PDO("mysql:host=mysql;dbname=demo;charset=utf8mb4","root","123user");
//$this->pdo = new PDO('mysql:host=localhost;dbname=mvc;charset=utf8mb4', 'root', '');
$query = $pdo->query("select * from user");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);