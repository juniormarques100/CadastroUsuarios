<?php

class Usuarios {

	public function create($nome, $email, $senha, $fone) {
		global $pdo;

		if(!$this->existEmail($email)) {

			$sql = "INSERT INTO usuarios SET nome=:nome, email=:email, senha=:senha, fone=:fone";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->bindValue(":fone", $fone);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function edit($id, $nome, $email, $senha, $fone) {
		global $pdo;
		
		if($this->existEmail($email)) {
			$sql = "UPDATE usuarios SET nome=:nome, email=:email, senha=:senha, fone=:fone WHERE id=:id";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":id", $id);
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->bindValue(":fone", $fone);
			$sql->execute();

			return true;
		} else {
			return false;
		}
	}

	public function getAll() {
		global $pdo;

		$usuarios = array();

		 $sql = "SELECT * FROM usuarios";
		 $sql = $pdo->query($sql);
		 $sql->execute();

		 if($sql->rowCount() > 0) {
		 	$usuarios = $sql->fetchAll();
		 }

		 return $usuarios;
	}

	public function getInfo($id) {
		global $pdo;

		 $sql = "SELECT * FROM usuarios WHERE id=:id";
		 $sql = $pdo->prepare($sql);
		 $sql->bindValue(":id", $id);
		 $sql->execute();

		 if($sql->rowCount() > 0) {
		 	return $sql->fetch();
		 } else {
		 	return array();
		 }
	}

	public function delete($id) {
		global $pdo;

		$sql = "DELETE FROM usuarios WHERE id=:id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();
	}

	public function existEmail($email) {
		global $pdo;

		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}
}


?>