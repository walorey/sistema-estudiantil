<?php


$host = "server174.hostinger.com.ar";

$user = "u963096033";

$pw = "walo9595";

$db = "u963096033_facu";



$connect = mysql_connect ($host, $user, $pw);
					if(!connect){
					echo ("No se pudo conectar a la base de datos");}
					else{
					$select = mysql_select_db($db);}


?>