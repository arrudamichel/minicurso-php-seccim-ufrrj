<?php
class Pessoa {
	
	private $nome;

	function __construct($nome){
		$this->nome = $nome;
	
}
	public function getNome(){
		return $this->nome;
	}
}

class Aluno extends Pessoa {
	
	private $nota;

	function __construct($nome, $nota){
		parent::__construct($nome);
		$this->nota = $nota;
	}

	public function showAtributos(){
		echo $this->getNome()." - ".$this->nota;
	}

}

class Professor extends Pessoa {

	private $salario;

	function __construct($nome, $salario){
		parent::__construct($nome);
		$this->salario = $salario;
	}

}

$aluno = new Aluno("Manoel", 10);
$aluno->showAtributos();
?>