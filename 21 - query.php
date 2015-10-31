 <?php 
	//Conecta
	$conecta = mysql_connect("localhost", "root", "") or print (mysql_error()); 
	mysql_select_db("seccim", $conecta) or print(mysql_error()); 
	
	//Consulta
	$sql = "SELECT nome, nota FROM aluno"; 
	$result = mysql_query($sql, $conecta);
 
	while($consulta = mysql_fetch_array($result)) { 
	   print "Nome: $consulta[nome] - Nota: $consulta[nota]<br>"; 
	} 
	
	mysql_free_result($result);
	mysql_close($conecta);
?>