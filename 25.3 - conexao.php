<?php
	
	Class Conexao {
		
		private $servidor = "localhost";
		private $usuario = "root";
		private $senha = "";

		private $link = null;
		private $banco = "seccim";

		//Construtor  conecta e seleciona o banco
		function __construct(){
			$this->link = mysql_connect($this->servidor, $this->usuario, $this->senha) or print (mysql_error());
			mysql_select_db("seccim", $this->link) or print(mysql_error());
		}

		public function execute($sql){
			if (mysql_query($sql, $this->link) === TRUE) {
			    return 1;
			} else {
			    echo mysql_error();
			}			
		}

		public function query($sql){
			$result = mysql_query($sql, $this->link);
 
			return $result;				
		}		

		public function close(){
			mysql_close($this->link);	
		}
	}
?>