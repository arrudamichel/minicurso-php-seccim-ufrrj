<?php 
	//Conecta
	$conecta = mysql_connect("localhost", "root", "") or print (mysql_error()); 
	mysql_select_db("seccim", $conecta) or print(mysql_error()); 
	
	//Consulta
	$sql = "INSERT INTO aluno (nome, nota)
			VALUES ('Renato', 10)";

	if (mysql_query($sql) === TRUE) {
	    echo "Inserido com sucesso";
	} else {
	    echo "Error: " . $sql . "<br>" . mysql_error();
	}
	mysql_close($conecta);
?>