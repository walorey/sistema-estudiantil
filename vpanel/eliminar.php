<?php 



	$server="mysql.hostinger.com.ar";
	$user="u752414517_admin";
	$pw="abcd1234";
	$db="u752414517_sist";


	$conexion=mysqli_connect($server,$user,$pw,$db) or die ("Error al conectar");



	$id=$_GET['id'];

	
	mysqli_query($conexion,"DELETE from alumno where id='$id'") or die ("Error al eliminar");
	mysqli_close($conexion);
	$conexion=mysqli_connect($server,$user,$pw,$db) or die ("Error al conectar");
	mysqli_query($conexion,"DELETE from alumnosc where ida='$id'") or die ("Error al eliminar");
	echo"<script type=\"text/javascript\">alert('El usuario se elimino correctamente'); window.location='usuarios.php';</script>";
?>