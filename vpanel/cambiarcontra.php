<?php

	include ("conexion.php");

	$con = mysql_connect ($host, $user, $pw)
			or die ("Pro_server");
       
			mysql_select_db ($db,$con)
			or die ("pro_select_db"); 

	$id=$_POST['id'];
	$password0 = $_POST['contrasena'];
	$newpassword=$_POST['contrasenanue'];
	$newpassword2=$_POST['contrasenanue2'];

	$result=mysql_query("SELECT * from administrador where id='$id'") ;
	$row=mysql_fetch_array($result);
	
	if ($row['password']==$password0) {
		
			if ($newpassword==$newpassword2) {
				mysql_query("UPDATE administrador set password='$newpassword' where id='$id'") or die ("Error al actualizar");
				echo"<script type=\"text/javascript\">alert('Clave modificada con exito'); window.location='configuracion.php';</script>"; 
			}
			else{
				echo"<script type=\"text/javascript\">alert('Las claves no coinciden'); </script>"; 
			}

	}
	else{
		echo"<script type=\"text/javascript\">alert('Clave incorrecta');</script>"; 
	}

?>