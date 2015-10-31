<?php
	include_once '25.3 - conexao.php';

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$professor = $_POST["professor"];
	$nota = $_POST["nota"];
	
	session_start();
	$_SESSION['sucesso'] = "";
	$_SESSION['erro'] = "";
	
    if (isset($_POST['inserir'])) {

    	validaCampos($nome, $email, $professor, $nota);
		
		$sql = "INSERT INTO aluno (nome, email, professor, nota) VALUES ('$nome', '$email', '$professor', $nota)";
	
		$conexao = new Conexao();
		$resultado = $conexao->execute($sql);

		if($resultado == 1){
			$_SESSION['sucesso'] = "Inserido com sucesso.<br>";		
			header("location: 25.1 - formularioBanco.php");	    		
		} else {
			$_SESSION['erro'] = "Erro ao inserir.<br>";		
			header("location: 25.1 - formularioBanco.php");	
		}

    } elseif (isset($_POST['excluir'])) {

    	validaCampos($nome, $email, $professor, $nota);

    	$sql = "DELETE FROM aluno WHERE nome = '$nome' AND email = '$email' AND professor = '$professor' AND nota = $nota";
	
		$conexao = new Conexao();
		$resultado = $conexao->execute($sql);

		if($resultado == 1){
			$_SESSION['sucesso'] = "Excluido com sucesso.<br>";		
			header("location: 25.1 - formularioBanco.php");	    		
		} else {
			$_SESSION['erro'] = "Erro ao excluir.<br>";		
			header("location: 25.1 - formularioBanco.php");	
		}
        
    } elseif (isset($_POST['alterar'])) {
		
		validaCampos($nome, $email, $professor, $nota);

    	$sql = "UPDATE aluno " .
			   "SET nome = '$nome', email = '$email', professor = '$professor', nota = $nota " .
			   "WHERE nome = '$nome' ";

		$conexao = new Conexao();
		$resultado = $conexao->execute($sql);

		if($resultado == 1){
			$_SESSION['sucesso'] = "Alterado com sucesso.<br>";		
			header("location: 25.1 - formularioBanco.php");	    		
		} else {
			$_SESSION['erro'] = "Erro ao alterar.<br>";		
			header("location: 25.1 - formularioBanco.php");	
		}
        
    } elseif (isset($_POST['selecionar'])) {

    	if (empty($nome)) {

			$_SESSION['erro'] = "Por favor, preencha o seu nome.<br>";
			header("location: 25.1 - formularioBanco.php");

		}

    	$sql = "SELECT nome, email, professor, nota " .
			   "FROM aluno " .
			   "WHERE nome = '$nome' ";

		$conexao = new Conexao();
		$resultado = $conexao->query($sql);

		if(mysql_num_rows($resultado) > 0){
			while($consulta = mysql_fetch_array($resultado)) { 
			   
				$_SESSION['sucesso'] = "Nome: $consulta[nome] - Email: $consulta[email] - Professor: $consulta[professor] - Nota: $consulta[nota]<br>"; 
	   			header("location: 25.1 - formularioBanco.php");	

			} 
		} elseif (mysql_num_rows($resultado) <= 0) {
			$_SESSION['sucesso'] = "Registro não encontrado.<br>";		
			header("location: 25.1 - formularioBanco.php");	
		} else {
			$_SESSION['erro'] = "Erro ao selecionar.<br>";		
			header("location: 25.1 - formularioBanco.php");	
		}
		
    }

    function validaCampos($nome, $email, $professor, $nota){
    	if (empty($nome)) {

			$_SESSION['erro'] = "Por favor, preencha o seu nome.<br>";
			header("location: 25.1 - formularioBanco.php");

		} else if(empty($email)) {

			$_SESSION['erro'] = "Por favor, preencha o seu email.<br>";		
			header("location: 25.1 - formularioBanco.php");

		} else if(empty($professor)) {

			$_SESSION['erro'] = "Por favor, preencha o nome do seu professor.<br>";
			header("location: 25.1 - formularioBanco.php");
			
	 	} else if(empty($nota)) {

	 		$_SESSION['erro'] = "Por favor, preencha sua nota.<br>";		
			header("location: 25.1 - formularioBanco.php");
	 	}
    }
?>