<?php
$x = $_POST['modalidad'];
session_start();
include("db.php");
$ahorasi="SELECT * FROM eleccion e 
Inner join alumnos a
on a.Curso = $x where a.DNI = e.DNI";
$quesi= $conexion->query($ahorasi);
$siquesi = $quesi ->fetch_array();
if ($siquesi[0] > 0)
{
    ?>
    <h1> 3º <?php echo $x ?></h1>
    <div class="datagrid">   <table border = 1 ><tr><th>Modalidad</th><th>Puesto</th><th>Alumno</th><th>Situacion</th><th>Cambio de colegio</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th></tr>
    <?php
    $request = "SELECT COUNT(*) FROM alumnos a INNER join eleccion e ON Curso = $x where e.DNI = a.DNI";
    $pedido = $conexion -> query($request);
    $alumnos = $pedido -> fetch_array();
    $DNI[1] = "ZZZZZ";
    $DNI[0] = 0;
    for($y = 1; $y <= $alumnos[0]; $y++)
    {   
        $varB = "SELECT e.DNI, a.Nombre FROM eleccion e inner join alumnos a on a.DNI = e.DNI 
        where a.Curso = $x and a.Nombre < $DNI[1] and e.DNI != $DNI[0] order by a.Nombre ASC";
        $connB = $conexion -> query($varB);
        $DNI = $connB ->fetch_array();
        $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, m.Descipcion, e.Prioridad, e.Situacion, e.Cambio
        FROM total t, alumnos a, eleccion e, modalidad m
        where a.DNI = $DNI[0] and t.DNI = $DNI[0]";
        $info= $conexion->query($infoalu);
        $datos = $info ->fetch_array();
        ?>
        <tr><td><?php echo $datos["Descipcion"]?></td><td><?php echo $datos["Prioridad"]?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["Situacion"]?></td><td><?php echo $datos["Cambio"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><tr>
        <?php  
    }
    }
    else
    {
        ?>
        <h2> No hay alumnos que hayan hecho la eleccion en 3º <?php echo $x ?> </h2>
        <?php
    }
?>
</table></div>
<?php 