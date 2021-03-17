<?php

$host = 'localhost'​;
$dbname = 'game_data';​
$user = 'root';
$password = '';

$dbh = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password);
$sdh->setAttribute(PDO:ATTR_ERRMODE, PDO::ERRMODE_WARING);

?>
