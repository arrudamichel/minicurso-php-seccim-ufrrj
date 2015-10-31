<?php
class Pessoa {
	
	public $nome;
	protected $disciplina;
	private $cpf;

	public function showNome(){ echo $this->nome; }
	protected function showDisciplina(){ echo $this->disciplina; }
	private function showCpf(){ echo $this->cpf; }
}
?>