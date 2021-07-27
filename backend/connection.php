<?php

DEFINE('DB_USER', 'danyullim');
DEFINE('DB_PASSWORD', 'john1135');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'users');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)  //@ is to get rid of warning messages and such
OR die('Could not connect to MySQL (in connection.php)'.mysqli_connect_error());

?>

