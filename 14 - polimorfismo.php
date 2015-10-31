<?php
class Pessoa {
	
	private $nome;

	function __construct($nome){ 
		$this->nome = $nome; 
	}

	public function showAtributo(){ echo $this->nome; }
}

class Aluno extends Pessoa {
	
	private $nota;

	function __construct($nome, $nota){
		parent::__construct($nome);
		$this->nota = $nota;
	}

	public function showAtributo(){ echo $this->nota; }
}

$aluno = new Aluno("Manoel", 10);
$aluno->showAtributo();
?>