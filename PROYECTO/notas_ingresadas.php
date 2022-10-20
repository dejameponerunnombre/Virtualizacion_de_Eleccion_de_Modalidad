<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Secretaría</title>

    <link href="bootstrap.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet" />
    <link href="custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="boton.css">
    <link rel="stylesheet" href="footer.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="icon" href="../IMG/Logo_azul (2).PNG">

</head>
<body>
     
            
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" ><img src="../IMG/Escuela.png" style="width: 40px; margin-top: 2px;"/></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="panel de control.html">Volver</a></li>
                        <li><a href="inicio.html">Cerrar Sesión</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="../IMG/find_user.png" class="img-responsive" />
                    </li>
                    <li> 
                        <a href="ingreso-alumno.php"><i class="fa fa-desktop "></i>Cargar alumno</a>
                    </li>
                    <li> 
                        <a href="form-ingreso.php"><i class="fa fa-desktop "></i>Cargar notas</a>
                    </li>
                    <li>
                        <a href="promedios2.0.php"><i class="fa fa-table "></i>Ver listas de cada modalidad</a>
                    </li>
                    <li>
                        <a href="eliminar-alumno.php"><i class="fa fa-trash-o "></i>Eliminar alumno</a>
                    </li>
                    <li>
                        <a href="form_ingreso_DNI.php"><i class="fa fa-bar-chart-o"></i>Cambiar notas</a>
                    </li>
                    <li>
                        <a href="cambio-eleccion.php"><i class="fa fa-edit "></i>Permitir rehacer elección</a>
                    </li>
                    <li>
                        <a href="todoscursoss.php"><i class="fa fa-table "></i>Ver todos los alumnos cargados</a>
                    </li>
                </ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
                    <div class="col-md-12">
                    </div>
                </div>  
                <h2>Notas de alumno ya cargadas</h2>   
                        <hr /> 
<?php
include("db.php");
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
    $DNI = $_SESSION['DNI'];
    $request = "SELECT*FROM total where DNI = '$_SESSION[DNI]'";
    $resultado=mysqli_query($conexion,$request);
    $array = $resultado -> fetch_array();
    ?> <div class="boton_formulario">
        <br>
        <h2>Las notas de este alumno ya fueron ingresadas</h2>
    <p>Promedio total: <?php echo $array["PromediosT"]?></p>
    <p>Fichas totales: <?php echo $array["FichasT"]?></p>
    <p>Inasistencias totales: <?php echo $array["InasistenciasT"]?></p>
    <p>Observaciones totales: <?php echo $array["ObservacionesT"]?></p>
    <p>Comentario: <?php echo $array["Comentario"]?></p></div>
    <div class="texto-centro">
    <form action = "form-ingreso.php" method = "post" class="boton_formulario"> 
    <ul>
    <li><button type="submit" class="boton2" style="margin-left: 20%;">Ingresa otro alumno</button></li>
    </ul>    
        </div>
    </div>
            </div>
   
        </div>
      <script src="../js/jquery-1.10.2.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/jquery.metisMenu.js"></script>
      <script src="../js/custom.js"></script>
   
</body>
<footer class="pie-pagina" style="left: 0;" style="right: 0;">
    <div class="grupo-2">
        <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
    </div>
</footer>
</html>
