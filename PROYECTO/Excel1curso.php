<html>
<?php
session_start();
include("db.php");

header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Lista_Curso.xls");  
header("Pragma: no-cache");  
header("Expires: 0");
$x = $_SESSION['c'];
$siquesi[0] = 0;
    $ahorasi="SELECT count(*) FROM alumnos where Curso = '$x'";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    $alumnos[0] = 0;
    if ($siquesi[0] != 0)
    {
        ?>
        <div class="col-md-12" style="position: relative;display: inline-block;">
        <h1>Listas por División: <span style="color:#040544;">3<?php echo $x ?></span></h1>
        <br>  
        <div class="datagrid" style="overflow-x:auto;">
        <table border = 1 ><tr><th>Modalidad</th><th>Puesto</th><th>Alumno</th><th>Situacion</th><th>Cambio de colegio</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th><th>Mes sin adeudamineto de materia</th>
        <?php
        include("db.php");
        $request = "SELECT COUNT(*) FROM alumnos where Curso = '$x' and DNI in(select DNI from eleccion) and DNI in(select DNI from total)";
        $pedido = $conexion -> query($request);
        if($pedido != null)
        {$alumnos = $pedido -> fetch_array();}
        if ($alumnos[0] != 0)
        {
            $DNI[1] = "1";
            $DNI[0] = 0;
            for($y = 1; $y <= $alumnos[0]; $y++)
            {
                $varB = "SELECT DNI, Nombre FROM alumnos where DNI in(select DNI from eleccion) 
                and Curso = '$x' and Nombre > '$DNI[1]' and DNI != $DNI[0] and DNI in(select DNI from total) order by Nombre ASC";
                $connB = $conexion -> query($varB);
                $DNI = $connB ->fetch_array();
                $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, m.Descripcion, e.Prioridad, e.Situacion, e.Cambio, f.mes
                FROM total t, alumnos a, eleccion e, modalidad m, fecha f
                where a.DNI = $DNI[0] and t.DNI = $DNI[0] and e.DNI = $DNI[0] and e.ID_Modalidad in(select ID_Modalidad from modalidad) and f.ID_mes = t.sin_pendientes";
                $info= $conexion->query($infoalu);
                $datos = $info ->fetch_array();
                ?>
                <tr><td><?php echo $datos["Descripcion"]?></td><td><?php echo $datos["Prioridad"]?></td><td><?php echo $DNI[1]?></td><td><?php echo $datos["Situacion"]?></td><td><?php echo $datos["Cambio"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><td><?php echo $datos["mes"] ?></td>
                <?php  
            } 
            $alumnos[0] = 0;  
        }
        $request = "SELECT COUNT(*) FROM alumnos where Curso = '$x' and DNI in(select DNI from total) and DNI not in(select DNI from eleccion)";
        $pedido = $conexion -> query($request);
        if($pedido != null)
        {$alumnos = $pedido -> fetch_array();}
        if ($alumnos[0] != 0)
        {
            $DNI[1] = "1";
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
                <tr><td>No realizó la eleccion</td><td>-</td><td><?php echo $DNI[1]?></td><td>-</td><td>-</td><td><?php echo $fact["PromediosT"]?></td><td><?php echo $fact["FichasT"]?></td><td><?php echo $fact["ObservacionesT"]?></td><td><?php echo $fact["InasistenciasT"]?></td><td><?php echo $fact["Comentario"]?></td><td><?php echo $fact["mes"]?></td>
                <?php
            }
            $alumnos[0] = 0;
        }
        $request = "SELECT COUNT(*) FROM alumnos where Curso = '$x' and DNI in(select DNI from eleccion) and DNI not in(select DNI from total)";
        $pedido = $conexion -> query($request);
        if($pedido != null)
        {$alumnos = $pedido -> fetch_array();}
        if ($alumnos[0] != 0)
        {
            $DNI[1] = "A";
            $DNI[0] = 0;
            for($y = 1; $y <= $alumnos[0]; $y++)
            {
                    $sinMod = "SELECT a.DNI, a.Nombre, m.Descripcion, e.Cambio FROM eleccion e, alumnos a, modalidad m 
                    where  a.DNI NOT IN(SELECT DNI FROM total) and a.DNI = e.DNI and a.Nombre > '$DNI[1]' and a.DNI != $DNI[0] and a.Curso = '$x'and e.ID_Modalidad = m.ID_Modalidad order by a.Nombre ASC";
                    $sinElex = $conexion -> query($sinMod);
                    $DNI = $sinElex ->fetch_array();
                    ?>
                    <tr><td><?php echo $DNI["Descripcion"]?></td><td>No ingresado</td><td><?php echo $DNI[1]?></td><td>-</td><td><?php echo $DNI["Cambio"]?></td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td>
                    <?php
            }
            $alumnos[0] = 0;
        }
        $request = "SELECT count(*) FROM alumnos where Curso = '$x' and DNI not in(select DNI from eleccion) and DNI not in(select DNI from total)";
        $pedido = $conexion -> query($request);
        if($pedido != null)
        {$alumnos = $pedido -> fetch_array();}
        if ($alumnos[0] != 0)
        {
            $DNI[1] = "A";
            $DNI[0] = 0;
            for($y = 1; $y <= $alumnos[0]; $y++)
            {
                    $sinMod = "SELECT DNI, Nombre from alumnos 
                    where  DNI NOT IN(SELECT DNI FROM total) and DNI NOT IN(SELECT DNI FROM eleccion) and Nombre > '$DNI[1]' and DNI != $DNI[0] and Curso = '$x' order by Nombre ASC";
                    $sinElex = $conexion -> query($sinMod);
                    $DNI = $sinElex ->fetch_array();
                    ?>
                    <tr><td>No realizo la eleccion</td><td>No ingresado</td><td><?php echo $DNI[1]?></td><td>-</td><td>Indefinido</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td><td>No ingresado</td>
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
        <h1>Listas por Division: <span style="color:#040544; font-weight: 900;">3 <?php echo $x ?></span></h1>
        <br>
        <h1 style="text-align: center; margin-left: 50%; transform: translate(-50%, -50%);font-size:  16px; border: 2px solid #172d8d; padding: 10px; margin-top: 30px;">No hay alumnos en esta división</h1>
        <?php
    }
            ?>
</table></div>
</html>
