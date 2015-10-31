<html>
<body>
	<form action="25.2 - welcomeBanco.php" method="post">
		Name: <input type="text" name="nome"><br>
		E-mail: <input type="text" name="email"><br>
		Professor: <input type="text" name="professor"><br>
		Nota: <input type="text" name="nota"><br>
		<input type="submit" name="inserir" value="Inserir" />
		<input type="submit" name="excluir" value="Excluir" />
		<input type="submit" name="selecionar" value="Selecionar" />
		<input type="submit" name="alterar" value="Alterar" />
	</form>

	<div>
	<?php 
		session_start();
		if(isset($_SESSION["erro"])) {	
			echo $_SESSION["erro"]; 
		} 

		if (isset($_SESSION["sucesso"])) {
			echo $_SESSION["sucesso"]; 
		}
	?>
	</div>
</body>
</html>