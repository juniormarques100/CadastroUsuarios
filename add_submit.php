<?php
require "config.php";
require 'models/Usuarios.php';

$u = new Usuarios();

if(!empty($_POST['email'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$fone = $_POST['fone'];

	$u->create($nome, $email, $senha, $fone);

	header("Location: ./");

}

