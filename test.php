<?php

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];


if ($_GET) {
	echo "error";
}else {


	
	if ($lastname=='perez') {
		//echo $lastname;
		echo $name." ";
		echo $lastname;
	}else {
		echo "el apellido es incorrecto";
	}
	

}

?>

