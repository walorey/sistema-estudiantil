<?php

	
	class conexion3{


			function recuperarDatos(){

				$host= "mysql.hostinger.com.ar";
				$user= "u752414517_admin";
				$pw= "abcd1234";
				$db= "u752414517_sist";


				$con = mysql_connect( $host, $user, $pw) or die ("No se pudo conectar");
				mysql_select_db($db, $con) or die ("No se encontro la base de datos");
				$query= "SELECT * FROM alumno";
				$resultado = mysql_query($query);

				/*while ($fila = mysql_fetch_array($resultado)) {

 
					
					echo $fila['nombre']." <br>";
					echo $fila['aula'];
					echo $fila['horario'];
					echo $fila['profesor'];
					
					
				}*/

				return $resultado;

			}


	}
	








?>