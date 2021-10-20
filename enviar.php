<?php

	$nombre=$_POST['nombre'];
	$mail=$_POST['correo'];
	$telefono= $_POST['telefono'];
	$asunto=$_POST['asunto'];
	$mensaje=$_POST['mensaje'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemensaje=mysqli_query($mysqli,"INSERT INTO contacto VALUES('','$nombre','$mail','$telefono','$asunto','$mensaje')");
	//echo 'Se ha registrado con exito';
	echo ' <script language="javascript">alert("Mensaje mandado correctamente");</script> ';
	
	?>