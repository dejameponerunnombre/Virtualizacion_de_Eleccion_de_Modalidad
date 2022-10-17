<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Listas de Modalidades</title>

    <link href="bootstrap2.css" rel="stylesheet" />
    <link href="font-awesome.css" rel="stylesheet" />
    <link href="custom.css" rel="stylesheet" />
    <link href="tablas.css" rel="stylesheet" />
    <link rel="stylesheet" href="footer.css" >
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
                     <h2>Listas por modalidad</h2>   
                    </div>
                </div>              
               
                  <hr />
              
                  <?php
                  include("calculo.php");
                  if(!isset($_SESSION)) 
                  { 
                      session_start(); 
                  } 
                  $_SESSION['var'] = null;
                  $_SESSION['varia'] = null;
                  $_SESSION['vari'] = null;
$inicio = mktime(0, 0, 0, 5, 1, 2022);
$final =  mktime(0, 0, 0, 10, 15, 2022);
$ahora = time() ;

if($ahora < $final && $ahora > $inicio)
{
    for($x = 1; $x <= 5; $x++)
    {
        $ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
        $quesi= $conexion->query($ahorasi);
        $siquesi = $quesi ->fetch_array();
        if ($siquesi[0] > 0)
        {
            ?>
        <h2 style="text-align: center; font-weight:600; color:#000a35;"> <?php echo $siquesi["Descripcion"] ?></h2>
         <div class="datagrid">   <table border = 1 ><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th><th>Mes sin adeudamiento de materia</th></tr>
        <?php
        for($y = 1; $y <= 39 && $y <= $siquesi[0]; $y++)
        {    
            $no="SELECT DNI from eleccion  where ID_Modalidad = $x and Prioridad = $y and DNI in(SELECT DNI from total)";
            $tas = $conexion -> query($no);
            $sinotas = $tas ->fetch_array();
            if(empty($sinotas)==false)
            {  
            $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
            and e.ID_Modalidad = $x and e.Prioridad = $y";
            $connB = $conexion -> query($varB);
            $DNI = $connB ->fetch_array();
            $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, f.mes
            FROM total t, alumnos a, eleccion e, fecha f
            where a.DNI = $DNI[0] and t.DNI = $DNI[0] and f.ID_mes = t.sin_pendientes";
            $info= $conexion->query($infoalu);
            $datos = $info ->fetch_array();
            ?>
            <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><td><?php echo $datos["mes"] ?></td><tr>
            <?php 
            } 
            else
            {
                $no="SELECT a.Nombre, e.DNI from eleccion e, alumnos a, total t where e.ID_Modalidad = $x and e.Prioridad = $y and e.DNI != t.DNI and e.DNI = a.DNI";
                $tas = $conexion -> query($no);
                $sinotas = $tas ->fetch_array();
                if(empty($sinotas)==false)
                {
                    ?>
                    <tr><td><?php echo $y?></td><td><?php echo $sinotas["Nombre"]?></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><tr>
                    <?php 
                }
            }
        }
        ?>
        
        </table>
        
        <?php
        }
        else
        {
            ?>
            <h1> No hay alumnos que hayan elegido <?php echo $siquesi["Descripcion"] ?> </h1>
            <?php
        }
        if($siquesi[0] > 39)
        {
            ?>
            </table></div>
            
            <h1 style="text-align: center; font-weight:600; color:#000a35;">Tabla de espera de <?php echo $siquesi["Descripcion"]?></h1>
            <div class="datagrid"><table border = 1><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th><th>Mes sin adeudamiento de materia</th></tr>
            <?php
            for($y = 40; $y <= $siquesi[0]; $y++)
            {   
                $no="SELECT DNI from eleccion  where ID_Modalidad = $x and Prioridad = $y and DNI in(SELECT DNI from total)";
                $tas = $conexion -> query($no);
                $sinotas = $tas ->fetch_array();
                if(empty($sinotas)==false)
                { 
                $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
                and e.ID_Modalidad = $x and e.Prioridad = $y";
                $connB = $conexion -> query($varB);
                $DNI = $connB ->fetch_array();
                $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, f.mes
                FROM total t, alumnos a, eleccion e, fecha f
                where a.DNI = $DNI[0] and t.DNI = $DNI[0] and f.ID_mes = t.sin_pendientes";
                $info= $conexion->query($infoalu);
                $datos = $info ->fetch_array();
                ?>
                <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td ><?php echo $datos["Comentario"]?></td><td><?php echo $datos["mes"] ?></td><tr>
                <?php
                }
                else
            {
                $no="SELECT a.Nombre, e.DNI from eleccion e, alumnos a, total t where e.ID_Modalidad = $x and e.Prioridad = $y and e.DNI != t.DNI and e.DNI = a.DNI";
                $tas = $conexion -> query($no);
                $sinotas = $tas ->fetch_array();
                if(empty($sinotas)==false)
                {
                    ?>
                    <tr><td><?php echo $y?></td><td><?php echo $sinotas["Nombre"]?></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><tr>
                    <?php 
                }
            }
            }
        ?>
        </table>
        <?php 
        }
    }
}
else
{
    include("mensaje-error.html");
}
?>
<br>
<button type="submit" class="boton2" style="margin-left: 85%; "><a href="Exceltotal.php"style="color:white;"><i class="fa fa-edit "></i>Exportar a Excel</a>   </button>
     
    </div>
            </div>  
        </div>
        </tbody>
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.metisMenu.js"></script>
    <script src="../js/custom.js"></script>
<footer class="pie-pagina" style="left: 0; right: 0;">
    <div class="grupo-2">
        <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
    </div>
</footer>
</html>