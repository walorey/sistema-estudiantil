<?php

include ("conexion.php");

if (isset($_POST['nombre']) && !empty($_POST['nombre'])&&
	isset($_POST['aula']) && !empty($_POST['aula'])&&
	
    isset($_POST['horario']) && !empty($_POST['horario'])&&
    isset($_POST['profesor']) && !empty($_POST['profesor']))
{

$nombre = $_POST["nombre"];
$aula = $_POST["aula"];
$horario = $_POST["horario"];
$profesor = $_POST["profesor"];

//parse_str($REPORTE);


	$con = mysql_connect ($host, $user, $pw)
			or die ("Pro_server");
       
			mysql_select_db ($db,$con)
			or die ("pro_select_db"); 

			mysql_query("INSERT INTO curso (nombre,aula,horario,profesor) VALUES ( '$nombre','$aula','$horario','$profesor' )", $con) or die ("pro_insert_db");
			
			header ("Location:cursos.php");
			

   }
?>
