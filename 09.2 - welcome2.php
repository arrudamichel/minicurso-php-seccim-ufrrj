<?php
	$nome = $_GET["nome"];
	$email = $_GET["email"];

	session_start();
	
	if (empty($nome)) {	

		$_SESSION['erro'] = "Por favor, preencha o seu nome.<br>";
		header("location: formularioErro.php");

	} else if(empty($email)) {

		$_SESSION['erro'] = "Por favor, preencha o seu email.<br>";		
		header("location: formularioErro.php");

	} else {
		echo "Welcome ".$nome."<br>";
		echo "Your email address is: ".$email;
		unset($_SESSION['erro']);
	}
?>