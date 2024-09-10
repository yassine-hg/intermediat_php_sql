<?php

$hostname = '/tmp';
$dbname = 'ccuser';
$username = 'ccuser';
$password = 'pass';
$dsn = "pgsql:host=$hostname;dbname=$dbname";
$db = new PDO($dsn, $username, $password);

$_POST['id'] = 1;
