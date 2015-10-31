<?php
	$link = mysql_connect('localhost', 'root', '');

	if (!$link) {
	    die('Não foi possível conectar: ' . mysql_error());
	}
	
	echo 'Conexão bem sucedida';

	mysql_select_db("seccim", $link) or print(mysql_error()); 

	mysql_close($link);
?>
