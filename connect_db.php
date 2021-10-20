<?php


		$mysqli = new MySQLi("localhost", "root","", "academ");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQLi: (" . $mysql -> mysqli_connect_errno() 
				. ") " . $mysql -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>