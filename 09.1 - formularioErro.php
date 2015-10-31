<html>
<body>
	<form action="09.2 - welcome2.php" method="get">
		Name: <input type="text" name="nome"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit">
	</form>
	<div>
	<?php 
		session_start();
		if(isset($_SESSION["erro"])) {	
			echo $_SESSION["erro"]; 
		}
	?></div>
	
</body>
</html>