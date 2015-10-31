<?php
	$cars = array("Volvo", "BMW", "Toyota");
	$arrlength = count($cars);

	for($x = 0; $x < $arrlength; $x++){
		echo $cars[$x] . "<br>";
	}

	$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");	

	foreach ($age as $x => $x_value) {
		echo "Key=" . $x . ", Value=" .$x_value. "<br>";
	}
?>