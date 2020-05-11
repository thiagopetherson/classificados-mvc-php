<?php

class Usuarios extends model 
{

	public function getTotalUsuarios() {
	
		$sql = $this->db->query("SELECT COUNT(*) as c FROM usuarios");
		$row = $sql->fetch();

		return $row['c'];
	}


	public function registrar($nome,$email,$senha,$telefone)
	{
						
		$sql = $this->db->prepare("INSERT INTO usuarios(nome,email,senha,telefone)
		VALUES(:nome,:email,:senha,:telefone)");
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->bindValue(":telefone", $telefone);
		
		if($sql->execute())
		{
			return true;
		}
		else
		{
			return true;

		}
	}

	public function login($email, $senha) {

		$sql = $this->db->prepare("SELECT id, nome FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			$_SESSION['cLogin'] = $dado['id'];
			$_SESSION['cNome'] = $dado['nome'];
			return true;
		} else {
			return false;
		}

	}



	public function deslogin(){

		session_start();
		unset($_SESSION['cLogin']);
		unset($_SESSION['cNome']);
		session_destroy();
		return true;
	}




}

?>