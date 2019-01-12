<?php
include ("conexion.php");

$usuario= $_REQUEST ['usuario'];
$password= $_REQUEST ['password'];

if (empty($usuario)|| empty($password)) {
	header("location:index.php");
	echo "string";
exit();
}
$con = mysql_connect ($host, $user, $pw)
			or die ("Pro_server");
       
			mysql_select_db ($db,$con)
			or die ("pro_select_db"); 

$result= mysql_query(" SELECT * FROM alumno WHERE usuario = '".$usuario."'");

if ($row= mysql_fetch_array($result)) {
						if ($row['password']==$password) {
							session_start();
							$_SESSION["usuario"]=$usuario;
							$_SESSION["password"]=$password;
							$_SESSION["id"]=$row['id'];
							header("location:alumnos.php");
							
							
						}
						
}

$result= mysql_query(" SELECT * FROM administrador WHERE usuario = '".$usuario."'");
if($row= mysql_fetch_array($result)) {
						if ($row['password']==$password) {
							session_start();
							$_SESSION["usuario"]=$usuario;
							$_SESSION["password"]=$password;
							$_SESSION["id"]=$row['id'];
							header("location:usuarios.php");
							
							
						}
						else{
							echo"<script type=\"text/javascript\">alert('Usuario o clave incorrecta'); window.location='index.php';</script>"; 
						}
						
}
else{
	echo"<script type=\"text/javascript\">alert('Usuario o clave incorrecta'); window.location='index.php';</script>";  

	}

?>	
