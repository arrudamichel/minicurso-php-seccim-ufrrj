<?php
	$txt = "Hello world!";
	//global
	$x = 5;
	$y = 10.5;

	function myTest() {	
		//local    	
    	$x = 10;
    	echo "<p>Variavel x dentro da funcao: $x</p>";   	
    	//global
    	global $x;
    	echo "<p>Variavel x de fora da funcao: $x</p>";
		//global atualizada
   	    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
   	    echo "<p>Variavel global Y: ".$GLOBALS['y']."</p>";
	} 
	
	myTest();
?>