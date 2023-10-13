<?php

$dsn = "mysql:host=localhost;dbname=phplogin";
$dbusername = "root";
$dbpassword = "";

try {
	$pdo = new PDO($dsn, $dbusername, $dbpassword);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException) {
	echo "Connection failed : ". $e->getMessage();

}


