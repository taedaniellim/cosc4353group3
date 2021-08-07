<?php

$host = 'localhost';
$db_user = "danyullim";
$db_pass = "john1135";
$db_name = 'users';

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

#$con = mysqli_connect($host,$db_user,$db_pass,$db_name);
?>