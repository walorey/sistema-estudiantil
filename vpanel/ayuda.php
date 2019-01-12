<?php
session_start();
if (!isset($_SESSION["usuario"])||$_SESSION["usuario"]==null ||
  !isset($_SESSION["password"])||$_SESSION["password"]==null) {
  header("location:index.php");
}

$user=$_SESSION ["usuario"];
$pass=$_SESSION ["password"];

?>


<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/navicons/112.png">

    <title>Ayuda</title>

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
           <h3>Ayuda</h3>
     
          <p>Para recibir asistencia técnica comunicarse con administración a <span>ayuda@instituto.com</span></p>
        </div>
      </div>


    

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="css/ie10-viewport-bug-workaround.js"></script>
  

</body></html>