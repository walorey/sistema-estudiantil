<?php
session_start();
if (!isset($_SESSION["usuario"])||$_SESSION["usuario"]==null ||
  !isset($_SESSION["password"])||$_SESSION["password"]==null) {
  header("location:index.php");
}

$user=$_SESSION ["usuario"];
$pass=$_SESSION ["password"];
$id=$_SESSION ["id"];

?>

<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/navicons/112.png">

    <title>Cursado</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/alumnos.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="images/backgrounds/01.png">

    <div class="container contenido">
      <div class="header clearfix">
        <nav>
          
               
         <div class="row">

         <div class="col-lg-6 col-md-6 col-sm-12">
         
         <div class="logo">
           
         <img src="images/logo.png">
         </div>
         
           
         </div>
        
        
           
         
         
         <div class="col-lg-6 col-md-6 col-sm-12">

            
          
           <ul class="nav nav-pills pull-right botones">
           <li><img src="images/navicons/111.png"></li>
           <li class="uss"><span class="user">Hola <?php print($user); ?></span></li>
            <li class="bot"><a href="alumnos.php">Cursos</a></li>
            <li class="bot"><a href="ayuda.php">Ayuda</a></li>
            <li class="bot" ><a href="cerrarsesion.php">Salir</a></li>
          </ul>

         
         
          
           
         </div>
           
         </div>
                 
       
        </nav>

      </div>

   

      <div class="row marketing">

        <div class="col-lg-12 col-md-12">
         <h3>Estos son los cursos en los que te encuentras inscripto </h3>
         <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                
                  <th>Nombre</th>
                  <th>Aula</th>
                  <th>Horario</th>
                  <th>Profesor</th>
                </tr>
              </thead>
              <tbody>
                <?php




$host= "mysql.hostinger.com.ar";
        $user= "u752414517_admin";
        $pw= "abcd1234";
        $db= "u752414517_sist";


        $con = mysql_connect( $host, $user, $pw) or die ("No se pudo conectar");
        mysql_select_db($db, $con) or die ("No se encontro la base de datos");
        $query= "SELECT * FROM alumnosc where ida=$id";
        $resultado = mysql_query($query);
        $filacursos= mysql_fetch_array($resultado);

        while ($filacursos = mysql_fetch_array($resultado)) { 

        echo '<tr>';
                echo '  <td>'.$filacursos['nombre'].'</td>';
                echo '  <td>'.$filacursos['aula'].'</td>';
                echo '  <td>'.$filacursos['horario'].'</td>';
                echo '  <td>'.$filacursos['profesor'].'</td>';
                echo '</tr>';


}

?>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>

    

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="css/ie10-viewport-bug-workaround.js"></script>
  

</body></html>