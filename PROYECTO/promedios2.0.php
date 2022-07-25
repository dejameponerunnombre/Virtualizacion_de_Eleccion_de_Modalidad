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
