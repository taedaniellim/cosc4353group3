<?php

$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'fuel';

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$con = mysqli_connect($host,$db_user,$db_pass,$db_name)
OR die('Could not connect to MySQL (in connection.php)'.mysqli_connect_error());

?>


