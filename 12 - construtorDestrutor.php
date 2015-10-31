<?php
class Pessoa {
	
	private $nome;

	function __construct($nome){
		$this->nome = $nome;
	}

	function __destruct(){
		echo "<br>Destruido<br>";
	}

	function showNome(){
		echo $this->nome;
	}
}

$pessoa = new Pessoa("Manoel");
$pessoa->showNome();

?>