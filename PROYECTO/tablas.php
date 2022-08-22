<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Listas de Modalidades</title>

    <link href="bootstrap.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet" />
    <link href="custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="boton.css">
    <link rel="stylesheet" href="footer.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                    <a class="logo" href="#" ><img src="../IMG/Escuela.png" style="width: 40px; margin-top: 2px;"/></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="panel de control.html">Volver</a></li>
                        <li><a href="inicio.html">Cerrar Sesión</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="../IMG/find_user.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="form-ingreso.html"><i class="fa fa-desktop "></i>Cargar notas</a>
                    </li>
                   

                    <li>
                        <a href="promedios2.0.php"><i class="fa fa-table "></i>Ver listas de cada modalidad</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-trash-o"></i>Eliminar alumno</a>
                    </li>
                    <li>
                        <a href="form_ingreso_DNI.html"><i class="fa fa-bar-chart-o"></i>Cambiar notas</a>
                    </li>

                    <li>
                        <a href="cambio_eleccion.html"><i class="fa fa-edit "></i>Permitir rehacer elección</a>
                    </li>
                    
                </ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    
                    <div class="col-md-12">
                     <h2>Listas por modalidad</h2>   
                    </div>
                </div>              
               
                  <hr />
              
                  <?php
$inicio = mktime(0, 0, 0, 5, 1, 2022);
$final =  mktime(0, 0, 0, 10, 15, 2022);
$ahora = time() ;

if($ahora < $final && $ahora > $inicio)
{

include("db.php");
$limpiado="UPDATE eleccion SET Prioridad = 0 ";
$limpio= $conexion->query($limpiado);
for($x = 1; $x <= 5; $x++)
{    //http://localhost/PROYECTO/promedios2.0.php
    $ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    ?>
    <h1> <?php echo $siquesi["Descripcion"] ?></h1>
        <table border = 1><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th></tr>
    <?php
    $i = 0; 
    for($y = 1; $y <= 39 && $y <= $siquesi[0]; $y++)
    {   
        $equis = 0;
        $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
        and e.ID_Modalidad = $x and e.Prioridad = 0 and e.Cambio = 'No' 
        order by t.PromediosT DESC, t.FichasT  ASC, t.ObservacionesT ASC, t.InasistenciasT ASC";
        $connB = $conexion -> query($varB);
        $DNI = $connB ->fetch_array();
        $cant = $connB ->num_rows;
        if($cant == 0)
        {
            $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
            and e.ID_Modalidad = $x and e.Prioridad = 0 
            order by t.PromediosT DESC, t.FichasT  ASC, t.ObservacionesT ASC, t.InasistenciasT ASC";
            $connB = $conexion -> query($varB);
            $DNI = $connB ->fetch_array();
        } 
        $var2 = "UPDATE eleccion SET Prioridad = '$y', Situacion = 'Dentro del curso' where DNI = $DNI[$i]";
        $conn2= $conexion->query($var2);
        $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario
        FROM total t, alumnos a, eleccion e 
        where a.DNI = $DNI[$i] and t.DNI = $DNI[$i]";
        $info= $conexion->query($infoalu);
        $datos = $info ->fetch_array();
        ?>
        <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><tr>
        <?php  
    }
    $i++;
    ?>
    </table>
    <h1>Tabla de espera de <?php echo $siquesi["Descripcion"]?></h1>
    <table border = 1><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th></tr>
    <?php
    for($y = 40; $y <= $siquesi[0]; $y++)
    {   
        $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario
        FROM total t, alumnos a, eleccion e 
        where a.DNI = $DNI[$i] and t.DNI = $DNI[$i] ";
        $info= $conexion->query($infoalu);
        $datos = $info ->fetch_array();
        ?>
        <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><tr>
    <?php
    {  
        $var4 = "UPDATE eleccion SET Situacion = 'En lista de espera' where DNI = $DNI[$i]";
        $conn4 = $conexion->query($var4);
        } 
    }
    ?>
    </table>
    <?php 
}
}
else
{
    include("mensaje-error.html");
}
?>  
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
   
        </div>
 
        <script src="../js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
      <script src="../js/bootstrap.min.js"></script>
      <!-- METISMENU SCRIPTS -->
      <script src="../js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
      <script src="../js/custom.js"></script>
   
</body>
<footer class="pie-pagina" style="left: 0;" style="right: 0;">
    <div class="grupo-2">
        <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
    </div>
</footer>
</html>
