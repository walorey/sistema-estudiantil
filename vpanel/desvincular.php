<?php 



	$server="mysql.hostinger.com.ar";
	$user="u752414517_admin";
	$pw="abcd1234";
	$db="u752414517_sist";


	$conexion=mysqli_connect($server,$user,$pw,$db) or die ("Error al conectar");



	$id=$_GET['id'];

	
	mysqli_query($conexion,"DELETE from alumnosc where id='$id'") or die ("Error al eliminar");
	mysqli_close($conexion);
	
	echo"<script type=\"text/javascript\">alert('El curso se desvinculo correctamente'); window.location='usuarios.php';</script>";
?>