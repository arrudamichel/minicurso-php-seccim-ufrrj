<?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$professor = $_POST["professor"];
	$nota = $_POST["nota"];
	
	session_start();
	
	if (empty($nome)) {

		$_SESSION['erro'] = "Por favor, preencha o seu nome.<br>";
		header("location: formularioCompleto.php");

	} else if(empty($email)) {

		$_SESSION['erro'] = "Por favor, preencha o seu email.<br>";		
		header("location: formularioCompleto.php");

	} else if(empty($professor)) {

		$_SESSION['erro'] = "Por favor, preencha o nome do seu professor.<br>";
		header("location: formularioCompleto.php");
		
 	} else if(empty($nota)) {

 		$_SESSION['erro'] = "Por favor, preencha sua nota.<br>";		
		header("location: formularioCompleto.php");
 	}

    if (isset($_POST['inserir'])) {
	
		$_SESSION['sucesso'] = "Inserido com sucesso.<br>";		
		header("location: formularioCompleto.php");	    	
        
    } elseif (isset($_POST['excluir'])) {

    	$_SESSION['sucesso'] = "Excluido com sucesso.<br>";		
		header("location: formularioCompleto.php");
        
    } elseif (isset($_POST['alterar'])) {

    	$_SESSION['sucesso'] = "Alterado com sucesso.<br>";		
		header("location: formularioCompleto.php");
        
    } elseif (isset($_POST['selecionar'])) {

    	$_SESSION['sucesso'] = "Selecionado com sucesso.<br>";		
		header("location: formularioCompleto.php");        
		
    }
?>