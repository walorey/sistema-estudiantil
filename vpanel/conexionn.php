<?php
	
	$conexion = mysql_connect("mysql.hostinger.com.ar", "u752414517_admin", "abcd1234", "personalu752414517_sist");
	
	if($conexion){

		echo "conexion exitosa";
		
		
		
	}
	else{
		echo "error";
	}
?>