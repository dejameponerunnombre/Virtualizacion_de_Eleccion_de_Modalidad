<?php
$x = $_POST['modalidad'];
session_start();
include("db.php");
$ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
$quesi= $conexion->query($ahorasi);
$siquesi = $quesi ->fetch_array();
if ($siquesi[0] > 0)
{
    ?>
    <h1> <?php echo $siquesi["Descripcion"] ?></h1>
    <div class="datagrid">   <table border = 1 ><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th></tr>
    <?php
    for($y = 1; $y <= 39 && $y <= $siquesi[0]; $y++)
    {   
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
        $var2 = "UPDATE eleccion SET Prioridad = '$y', Situacion = 'Dentro de la modalidad' where DNI = $DNI[0]";
        $conn2= $conexion->query($var2);
        $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario
        FROM total t, alumnos a, eleccion e 
        where a.DNI = $DNI[0] and t.DNI = $DNI[0]";
        $info= $conexion->query($infoalu);
        $datos = $info ->fetch_array();
        ?>
        <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><tr>
        <?php  
    }
    }
    else
    {
        ?>
        <h2> No hay alumnos que hayan elegido <?php echo $siquesi["Descripcion"] ?> </h2>
        <?php
    }
    if($siquesi[0] > 39)
    {
        ?>
        </table></div>
        <h1>Tabla de espera de <?php echo $siquesi["Descripcion"]?></h1>
        <div class="datagrid"><table border = 1><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th></tr>
        <?php
        for($y = 40; $y <= $siquesi[0]; $y++)
    {   
        $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario
        FROM total t, alumnos a, eleccion e 
        where a.DNI = $DNI[$i] and t.DNI = $DNI[$i] ";
        $info= $conexion->query($infoalu);
        $datos = $info ->fetch_array();
        ?>
        <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td ><?php echo $datos["Comentario"]?></td><tr>
    <?php
        $var4 = "UPDATE eleccion SET Situacion = 'En lista de espera' where DNI = $DNI[$i]";
        $conn4 = $conexion->query($var4); 
    }
}
?>
</table></div>
<?php 