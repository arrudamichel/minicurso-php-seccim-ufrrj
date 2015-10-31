<?php
class Aluno {
	
	private $nome;
	private $email;
	private $nota;
	private $professor;

	function __construct($nome, $email, $nota, $professor){
		$this->nome = $nome;
		$this->email = $email;
		$this->nota = $nota;
		$this->professor = $professor;	
	}

	function __destruct(){
		echo "<br>Destruido<br>";
	}

	function showNome(){
		echo $this->nome;
	}
}



?>