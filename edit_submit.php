<?php
require "config.php";
require 'models/Usuarios.php';

$u = new Usuarios();

if(!empty($_POST['id'])) {
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$fone = $_POST['fone'];

	$u->edit($id, $nome, $email, $senha, $fone);

	header("Location: ./");

}
