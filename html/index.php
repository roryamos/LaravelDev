<?php
$db = new PDO('mysql:host=mariadb;dbname=mysql;charset=utf8', 'root', 'root');
$rows = $db->query("SELECT version()")->fetchAll();
var_dump($rows);
