
<?php
	
	$server="mysql.hostinger.com.ar";
	$user="u752414517_admin";
	$pw="abcd1234";
	$db="u752414517_sist";


	$conexion=mysqli_connect($server,$user,$pw,$db) or die ("Error al conectar");

    



		$id=$_POST['id'];
        	$apellido = $_POST['apellido'];
			$nombre = $_POST['nombre'];
			$usuario = $_POST['usuario'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password2=$_POST['password2'];



	if ($password==$password2) {

		mysqli_query($conexion,"UPDATE alumno set apellido='$apellido',nombre='$nombre',usuario='$usuario',email='$email',password='$password' where id='$id'") or die ("Error al actualizar");

		

		mysqli_close($conexion);
		/*echo"<script type=\"text/javascript\">alert('El usuario se modifico correctamente'); window.location='usuarios.php';</script>"; */

		$conexion=mysqli_connect($server,$user,$pw,$db) or die ("Error al conectar");
		
		mysqli_query($conexion,"UPDATE alumnosc set apellidoalu='$apellido',nombrealu='$nombre',usuario='$usuario',email='$email' where ida='$id'") or die ("Error al actualizar");
						
		echo"<script type=\"text/javascript\">alert('El usuario se modifico correctamente'); window.location='usuarios.php';</script>";
	}

	else{

			echo"<script type=\"text/javascript\">alert('Las claves no coinciden'); window.location='usuarios.php';</script>"; 

	}
	
	
	
	
	
?>

