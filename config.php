<?php

$db_user = 'root';
$db_password = '';
$db_host = 'localhost';
$db_name = 'registerform';

$dbh = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>