<?php 
require("funciones/funciones.php");
 
 sessionstarydestroy(); 

 ?>
<!DOCTYPE html>
<html class="full-height">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" />
  </head>
  <body id="top">
    <header>
      <!-- Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" id="navbar">
        <div class="container"><a class="navbar-brand" href="#"><strong>Nomina Sys</strong></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="#" value="open con parámetros" onClick="abrirParametros()">
            <!--<i class="fa fa-fw fa-question-circle"></i>-->
            <span class="nav-link-text">Nosotros</span>
          </a></li>
              <!--<li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
              <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
              <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>-->
          </div>
        </div>
      </nav>
      <!-- Intro Section-->
      <section class="view hm-gradient" id="intro">
        <div class="full-bg-img d-flex align-items-center">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-md-10 col-lg-6 text-center text-md-left margins">
                <div class="white-text">
                  <div class="wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-bold mt-sm-5">Bienvenido.</h1>
                    <div class="h6">
                     Nomina Sys 1.0
                    </div>
                  </div><br>
                  <!--<div class="wow fadeInLeft" data-wow-delay="0.3s"><a class="btn btn-white dark-grey-text font-bold ml-0" href="#" target="_blank"><i class="fa fa-play mr-1"></i>Registrate</a>-->
                  <a class="btn btn-outline-white" data-toggle="modal" data-target="#exampleModal">Login</a>
                    <a class="btn btn-outline-white" data-toggle="modal" href="#myModal">Olvidaste tu contraseña <i class="fa fa-question-circle"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    


<!-- Modal recuperacion de clave -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header");">
          <h4 class="modal-title"><font color="#FFFFFF">¿Olvidaste tu contraseña?</font></h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
<form action="formpass.php" role="form" method="POST" >  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" required="">
  </div>
  <div class="form-group">
    <label for="pregunta">Respuesta a la Pregunta de Seguridad</label>
    <input type="text" class="form-control" name="pregunta" id="pregunta" required="">
  </div>
  <button type="submit" class="btn btn-secondary">Continuar</button>
</form>

        </div>

      </div><!-- /.modal 2-content -->
    </div><!-- /.modal 2-dialog -->
  </div><!-- /.modal 2 -->







<!-- Modal login-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Login</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="validaciones/autentica.php" method="post">
        
        <div class="form-group">
          <label for="cedula">Cedula</label>
          <input type="number" class="form-control" name="cedula" required="" pattern="[0-9]{1,15}" title="Verifique su cedula">
        </div>
          
        <div class="form-group">
          <label for="password">contraseña</label>
          <input type="password" class="form-control" name="password" id="password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres">
        </div>
          

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/modal-->

            <script>
    function abrirParametros()
  {
    var ventana=open('','','status=yes,width=700,height=400,menubar=yes');
    ventana.document.write("Quienes somos!!! <br> Estudiantes con una vision a futuro crear aplicativos para todo tipo de requerimiento para tu empresa.<br>");
    ventana.document.write("<img src='img/log.png'>");
  }

//Global var to store a reference to the opened window
var openedWindow;

function openWindow()
{
  openedWindow = window.open('moreinfo.htm');
}

function closeOpenedWindow()
{
  openedWindow.close();
}

  </script>
</section></div>
    <footer class="page-footer indigo darken-2 center-on-small-only pt-0 mt-0">
      
      <div class="footer-copyright">
        <div class="container-fluid">
          <p>&copy; <a href="/">Sirient</a> - Corp: <a href="#" target="_blank">Desing</a></p>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>new WOW().init();</script>
  </body>
</html>