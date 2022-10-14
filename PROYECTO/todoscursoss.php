<?php
session_start();
include("calculo.php");
?>
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
                    <a class="logo" href="inicio.html" ><img src="../IMG/Escuela.png" style="width: 40px; margin-top: 2px;"/></a>
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
        <div id="page-wrapper" style="z-index:1" >
            <div id="page-inner" >
            
                <div class="col-md-12">
                    <h2>Lista de <span style="color:#040544; font-weight: 900;"> Divisiones</span></h2> 
                    <hr>  
<?php
for($x="A";$x<="G" and $x!="f";$x++)
{  
    $siquesi[0] = 0;
    $ahorasi="SELECT count(*) FROM alumnos where Curso = '$x'";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    $alumnos[0] = 0;
    if ($siquesi[0] != 0)
    {
        ?>
        <div class="col-md-12" style="position: relative;display: inline-block;">
        <h1>Listas por División: <span style="color:#040544;">3º <?php echo $x ?></span></h1>
        <br>  
        <div class="datagrid">
            <table border = 1 ><tr><th>Modalidad</th><th>Puesto</th><th>Alumno</th><th>Situacion</th><th>Cambio de colegio</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th><th>Mes sin adeudamineto de materia</th></tr>
            <?php
            include("db.php");
            $request = "SELECT COUNT(*) FROM alumnos where Curso = '$x' and DNI in(select DNI from eleccion) and DNI in(select DNI from total)";
            $pedido = $conexion -> query($request);
            if($pedido != null)
            {
                $alumnos = $pedido -> fetch_array();
            }
            if ($alumnos[0] != 0)
            {
                $DNI[1] = 1;
                $DNI[0] = 0;
                for($y = 1; $y <= $alumnos[0]; $y++)
                {
                    $varB = "SELECT DNI, Nombre FROM alumnos where DNI in(select DNI from eleccion) 
                    and Curso = '$x' and Nombre > '$DNI[1]' and DNI != $DNI[0] and DNI in(select DNI from total) order by Nombre ASC";
                    $connB = $conexion -> query($varB);
                    $DNI = $connB ->fetch_array();
                    $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, m.Descripcion, e.Prioridad, e.Situacion, e.Cambio, f.mes
                    FROM total t, alumnos a, eleccion e, modalidad m, fecha f
                    where a.DNI = $DNI[0] and t.DNI = $DNI[0] and e.DNI = $DNI[0] and e.ID_Modalidad  = m.ID_Modalidad and f.ID_mes = t.sin_pendientes";
                    $info= $conexion->query($infoalu);
                    $datos = $info ->fetch_array();
                    ?>
                    <tr><td><?php echo $datos["Descripcion"]?></td><td><?php echo $datos["Prioridad"]?></td><td><?php echo $DNI[1]?></td><td><?php echo $datos["Situacion"]?></td><td><?php echo $datos["Cambio"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><td><?php echo $datos["mes"] ?></td><tr>
                    <?php  
                }
                $alumnos[0] = 0;  
            }
            $request = "SELECT COUNT(*) FROM alumnos where Curso = '$x' and DNI in(select DNI from total) and DNI not in(select DNI from eleccion)";
            $pedido = $conexion -> query($request);
            if($pedido != null)
            {
                $alumnos = $pedido -> fetch_array();
            }
            if ($alumnos[0] != 0)
            {
                $DNI[1] = 1;
                $DNI[0] = 0;
                for($y = 1; $y <= $alumnos[0]; $y++)
                {
                    $sinMod = "SELECT t.DNI, a.Nombre FROM alumnos a, total t 
                    where  a.DNI NOT IN(SELECT DNI FROM eleccion) and a.Nombre > '$DNI[1]' and t.DNI != $DNI[0] and a.DNI in(select DNI from total) and a.Curso = '$x' order by a.Nombre ASC";
                    $sinElex = $conexion -> query($sinMod);
                    $DNI = $sinElex ->fetch_array();
                    $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, f.mes
                    FROM total t, alumnos a, fecha f
                    where a.DNI NOT IN(SELECT DNI FROM eleccion) and  $DNI[0] in(select DNI from alumnos) and $DNI[0] in(select DNI from total) and a.Curso = '$x' and a.DNI in(select DNI from total) and f.ID_mes = t.sin_pendientes";
                    $data= $conexion->query($infoalu);
                    $fact = $data ->fetch_array();
                    ?>
                    <tr><td>No realizó la eleccion</td><td>-</td><td><?php echo $DNI[1]?></td><td>-</td><td>-</td><td><?php echo $fact["PromediosT"]?></td><td><?php echo $fact["FichasT"]?></td><td><?php echo $fact["ObservacionesT"]?></td><td><?php echo $fact["InasistenciasT"]?></td><td><?php echo $fact["Comentario"]?></td><td><?php echo $fact["mes"]?></td><tr>
                        <?php
                }
                $alumnos[0] = 0;
            }
            $request = "SELECT COUNT(*) FROM alumnos where Curso = '$x' and DNI in(select DNI from eleccion) and DNI not in(select DNI from total)";
            $pedido = $conexion -> query($request);
            if($pedido != null)
            {
                $alumnos = $pedido -> fetch_array();
            }
            if ($alumnos[0] != 0)
            {
                $DNI[1] = 1;
                $DNI[0] = 0;
                for($y = 1; $y <= $alumnos[0]; $y++)
                {
                    $sinMod = "SELECT a.DNI, a.Nombre, m.Descripcion, e.Cambio, e.Prioridad FROM eleccion e, alumnos a, modalidad m 
                    where  a.DNI NOT IN(SELECT DNI FROM total) and a.DNI IN(SELECT DNI FROM eleccion) and a.Nombre > '$DNI[1]' and a.DNI != '$DNI[0]' and a.Curso = '$x'and e.ID_Modalidad = m.ID_Modalidad order by a.Nombre ASC";
                    $sinElex = $conexion -> query($sinMod);
                    $DNI = $sinElex ->fetch_array();
                    ?>
                    <tr><td><?php echo $DNI[2]?></td><td>No ingresado</td><td><?php echo $DNI[1]?></td><td>-</td><td><?php echo $DNI[3]?></td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><tr>
                    <?php
                }
                $alumnos[0] = 0;
            }
            $request = "SELECT count(*) FROM alumnos where Curso = '$x' and DNI not in(select DNI from eleccion) and DNI not in(select DNI from total)";
            $pedido = $conexion -> query($request);
            if($pedido != null)
            {
                $alumnos = $pedido -> fetch_array();
            }
            if ($alumnos[0] != 0)
            {
                $DNI[1] = 1;
                $DNI[0] = 0;
                for($y = 1; $y <= $alumnos[0]; $y++)
                {
                    $sinMod = "SELECT DNI, Nombre from alumnos 
                    where  DNI NOT IN(SELECT DNI FROM total) and DNI NOT IN(SELECT DNI FROM eleccion) and Nombre > '$DNI[1]' and DNI != $DNI[0] and Curso = '$x' order by Nombre ASC";
                    $sinElex = $conexion -> query($sinMod);
                    $DNI = $sinElex ->fetch_array();
                    ?>
                    <tr><td>No realizo la eleccion</td><td>No ingresado</td><td><?php echo $DNI[1]?></td><td>-</td><td>Indefinido</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><tr>
                    <?php
                }
            }
            ?>
            </table></div>
            <?php
    }
    else
    {
        ?>
        <div class="col-md-12" style="position: relative;display: inline-block;">
        <h1>Listas por División: <span style="color:#040544; font-weight: 900;">3º <?php echo $x ?></span></h1>
        <br>
        <h1 style="text-align: center; margin-left: 50%; transform: translate(-50%, -50%);font-size:  16px; border: 2px solid #172d8d; padding: 10px; margin-top: 30px;">No hay alumnos en esta división</h1>
        <?php
    }
    if($x==="E")
    {
        $x++;
    }
?>
    </div>
<?php
} 
?>
<button type="submit" class="boton2" style="margin-left: 85%; "><a href="ExcelCurso.php"style="color:white;"><i class="fa fa-edit "></i>Exportar a Excel</a>   </button>                            

<br><br><br><br>          
                  

                             
                    
</div>

        </div>  
    </div>
    </tbody>
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.metisMenu.js"></script>
<script src="../js/custom.js"></script>
</div>




</body>
<footer class="pie-pagina" style="left: 0; right: 0; position:fixed; bottom:0;z-index:3">
<div class="grupo-2">
    <small>&copy; 2022 <b>7mo Informática</b> - Grupo 3</small>
</div>
</footer>

</html>
