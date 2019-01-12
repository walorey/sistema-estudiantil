<?php

include ("conexion.php");

if (isset($_POST['apellido']) && !empty($_POST['apellido'])&&
	isset($_POST['nombre']) && !empty($_POST['nombre'])&&
	isset($_POST['usuario']) && !empty($_POST['usuario'])&&
	isset($_POST['email']) && !empty($_POST['email'])&&
	
    isset($_POST['password']) && !empty($_POST['password'])&&
    isset($_POST['password2']) && !empty($_POST['password2']))
{



$apellido=$_POST["apellido"];
$nombre=$_POST["nombre"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

//parse_str($REPORTE);

if ($password==$password2) {

	
	$con = mysql_connect ($host, $user, $pw)
			or die ("Pro_server");
       
			mysql_select_db ($db,$con)
			or die ("pro_select_db"); 

			mysql_query("INSERT INTO alumno (apellido,nombre,usuario,email,password) VALUES ( '$apellido','$nombre',    '$usuario','$email','$password')", $con) or die ("pro_insert_db");
			
			header ("Location:usuarios.php");

			

   }
   else{

   	echo"<script type=\"text/javascript\">alert('Las claves no coinciden'); window.location='crearusuario.php';</script>"; 
   	
   }
}
?>
