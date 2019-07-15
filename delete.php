<?php
require "config.php";
require 'models/Usuarios.php';

$u = new Usuarios();

if(isset($_GET['u']) && !empty($_GET['u'])) {
	$u->delete($_GET['u']);
}

header('Location: index.php');
?>