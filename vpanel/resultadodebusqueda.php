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
<!-- saved from url=(0043)http://getbootstrap.com/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/navicons/123.ico">

    <title>Panel administrativo</title>

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
            <li><a href="usuarios.php"><span><img src="images/navicons/112.png"></span><span>Usuarios</span></a></li>

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
            <li> <a href="configuracion.php" >
                   <span> <img src="images/navicons/20.png"></span>
                   <span> Configuración</span>
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
         

          
          <h2 class="sub-header">Resultados de la busqueda:</h2>

          <?php


            
            $busca=$_REQUEST['palabra'];
            mysql_connect("mysql.hostinger.com.ar","u752414517_admin","abcd1234");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
            mysql_select_db("u752414517_sist");//nombre de la base de datos
            if($busca!=""){
            $busqueda=mysql_query("SELECT * FROM alumnosc WHERE apellidoalu LIKE '%".$busca."%'   ");


           echo '<div class="table-responsive">';
           echo ' <table class="table table-striped">';
             echo ' <thead>';
              echo '  <tr>';
              echo ' <th>#</th>';
               echo '<th>Nombre</th>';
              echo '<th>Apellido</th>';
                echo '<th>Usuario</th>';
                echo'<th>Email</th>';
                  echo '<th>Curso</th>';
                 echo ' <th>Aula</th>';
                 echo ' <th>Horario</th>';
                 echo ' <th>Profesor</th>';
                 echo '<th>Editar</th>';
                 echo'<th>Borrar</th>';
                 echo'<th>Vinculo</th>';
               echo ' </tr>';
              echo '</thead>';
             echo ' <tbody>';


            while ($fila = mysql_fetch_array($busqueda)) { 

                echo '<tr>';
                echo '  <td>'.$fila['ida'].'</td>';
                echo '  <td>'.$fila['nombrealu'].'</td>';
                echo '  <td>'.$fila['apellidoalu'].'</td>';
                echo '  <td>'.$fila['usuario'].'</td>';
                echo '  <td>'.$fila['email'].'</td>';
                echo '  <td>'.$fila['nombre'].'</td>';
                echo '  <td>'.$fila['aula'].'</td>';
                echo '  <td>'.$fila['horario'].'</td>';
                echo '  <td>'.$fila['profesor'].'</td>';
                $id=$fila['ida']
                ?>
                <td><a href="editarusuario.php?id= <?php  echo$id; ?> "> Editar</a></td>
                 <td><a   href="#" data-toggle="modal" data-target="#confirm-delete"> Borrar</a></td>
                 <td><a   href="#" data-toggle="modal" data-target="#confirm-delete-curso"> Desvincular</a></td>

                  <div class="modal fade" tabindex="-1" role="dialog" id="confirm-delete-curso"  aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Desvincular</h4>
              </div>
              <div class="modal-body">
                <p>¿Realmente desea desvincular el curso con el usuario?</p>
              </div>
            
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok" href="desvincular.php?id=<?php echo $fila['id'];?>">Desvincular</a>
              </div>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>
         <div class="modal fade" tabindex="-1" role="dialog" id="confirm-delete"  aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Borrar usuario</h4>
              </div>
              <div class="modal-body">
                <p>¿Realmente desea borrar este usuario?</p>
              </div>
            
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-danger btn-ok" href="eliminar.php?id=<?php echo $fila['ida'];?>">Borrar</a>
              </div>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div>
<?php

                
                echo '</tr>';


                  
                  
                }
            

             echo' </tbody> ';
            
           echo  '</table>';
           echo'</div>';
        }
        else
        {
          echo ' <h4>No se encontraron resultados</h4>';
        }

            ?>
          
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