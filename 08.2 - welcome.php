<?php
	$nome = $_GET["nome"];
	$email = $_GET["email"];

	if (empty($nome)) {
  		echo "Por favor, preencha o seu nome.";
	} else if(empty($email)) {
		echo "Por favor, preencha o seu email.";
		
	} else {
		echo "Welcome ".$nome."<br>";
		echo "Your email address is: ".$email;
	}
?>