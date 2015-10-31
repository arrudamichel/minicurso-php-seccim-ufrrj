<?php 
	//Conecta
	$conecta = mysql_connect("localhost", "root", "") or print (mysql_error()); 
	mysql_select_db("seccim", $conecta) or print(mysql_error()); 
	
	//Consulta
	$sql = "UPDATE aluno
			SET nome = 'Roberto'
			WHERE nome = 'Renato'";

	if (mysql_query($sql) === TRUE) {
	    echo "Atualizado com sucesso";
	} else {
	    echo "Error: " . $sql . "<br>" . mysql_error();
	}
	mysql_close($conecta);
?>