<?php
session_start();
if (!isset($_SESSION["usuario"])||$_SESSION["usuario"]==null ||
  !isset($_SESSION["password"])||$_SESSION["password"]==null) {
  header("location:index.php");
}

$user=$_SESSION ["usuario"];
$pass=$_SESSION ["password"];
$id=$_SESSION ['id'];

?>


<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/navicons/123.ico">

    <title>Panel administrativo </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<nav class="navbar navbar-inverse navbar-fixed-top barra">
      <div class="container-fluid">
        <div class="navbar-header barrita">
        <div class="logo">
            <span><img src="images/logo.png"></span>
          </div>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <!-- <li><a href="http://getbootstrap.com/examples/dashboard/#">Dashboard</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/#">Settings</a></li> -->
           
            <li> <div class="barrabarra">
          <span class="icono"><img src="images/navicons/156.png"></span>
         <span class="icono"> <h4><?php print($user); ?></h4></span></div></li>

           <li> <form class="navbar-form navbar-right" method="post" action="resultadodebusqueda.php">
            <input type="text" class="form-control" placeholder="Buscar alumnos" name="palabra">
          </form></li>
            <li><a href="cerrarsesion.php" class="linkss">Salir</a></li>
          </ul>
         
          
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
         <li ><a href="usuarios.php"><span><img src="images/navicons/112.png"></span><span>Usuarios</span> </a></li>

            <li><a href="crearusuario.php">
              <span><img src="images/navicons/10.png"></span>
              <span>Crear usuarios</span>
            </a></li>
            <li><a href="cursos.php">
            <span><img src="images/navicons/96.png"></span>
            <span>Cursos</span>

            </a></li>
            <li><a href="crearcurso.php">
              <img src="images/navicons/10.png"></span>
              <span>Crear curso</span>
              </a></li>
            <li><a href="asignar.php">
              <span><img src="images/navicons/145.png"></span>
              <span>Asignar</span>
            </a></li>
            <li class="active"> <a href="configuracion.php" >
                   <span> <img src="images/navicons/20.png"></span>
                   <span> Configuración</span>
                   <span class="sr-only">(current)</span>
                </a></li>
          </ul>
          <!--<ul class="nav nav-sidebar">
            <li><a href="http://getbootstrap.com/examples/dashboard/">Nav item</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/">Nav item again</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/">One more nav</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/">Another nav item</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="http://getbootstrap.com/examples/dashboard/">Nav item again</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/">One more nav</a></li>
            <li><a href="http://getbootstrap.com/examples/dashboard/">Another nav item</a></li>
          </ul>-->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
         

          
          <h2 class="sub-header">Configuración</h2>
          

          <h3 class="sub-header">Cambiar contraseña</h3>
          <section>
          <form action="cambiarcontra.php" method="post">
            <div class="row">
            <input type="hidden" id="exampleInputEmail1" name="id" value="<?php echo $id; ?>" />
              <div class="col-md-3">
               <label for="exampleInputEmail1">Contraseña actual</label>
                <input type="password" name="contrasena" class="form-control formi" id="exampleInputEmail1" required="required" placeholder="Ingrese la contraseña actual">
                </div>
              <div class="col-md-3">
                <label for="exampleInputEmail1">Contraseña nueva</label>
                <input type="password" name="contrasenanue" class="form-control formi" id="exampleInputEmail1" required="required" placeholder="Ingrese la contraseña nueva">
              </div>
              <div class="col-md-3"> <label for="exampleInputEmail1">Reingrese la contraseña</label>
                <input type="password" name="contrasenanue2" class="form-control formi" id="exampleInputEmail1" required="required" placeholder="Reingrese la contraseña nueva"></div>
              <div class="col-md-3"><button type="submit" class="btn btn-default asignar ">Cambiar</button></div>
            </div>
            </form>
          </section>




          <h3 class="sub-header">Crear administrador</h3>   
          <section class="formi">
            

               <form action="crearadmin.php" method="post" >

              <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" name="nombre" class="form-control formi" id="exampleInputEmail1" required="required" placeholder="Nombre completo">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" name="usuario" class="form-control formi" id="exampleInputEmail1"  required="required" placeholder="Usuario">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control formi" id="exampleInputEmail1" required="required" placeholder="Email">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" name="password" class="form-control formi" id="exampleInputPassword1" required="required" placeholder="Contraseña">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Repetir contraseña</label>
                <input type="password" name="password2" class="form-control formi" id="exampleInputPassword1" required="required" placeholder="Repita la contraseña">
              </div>

              <div><button type="submit" class="btn btn-default  ">Crear</button></div>
          
        
        </form>


          </section>         

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="css/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  

</body></html>