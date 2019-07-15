<?php
global $pdo;

$dbname = "login";
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO("mysql:dbname=".$dbname.";host=".$dbhost, $dbuser, $dbpass);
} catch(PDOExceptio $e) {
	echo "FALHOU: ".$e->getMessage();
	exit;
}

?>