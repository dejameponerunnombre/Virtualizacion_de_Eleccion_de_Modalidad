<?php
include("db.php");
for($x = 1; $x <= 5; $x++)
{    //http://localhost/PROYECTO/promedios2.0.php
    $ahorasi="SELECT Ingresos FROM modalidad where ID_Modalidad = $x";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    $i = 0; //update eleccion set Prioridad = 0 
    for($y = 1; $y <= $siquesi[0]; $y++)
    {   
        $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
        and e.ID_Modalidad = $x and e.Prioridad = 0 
        order by t.PromediosT DESC, t.FichasT  ASC, t.ObservacionesT ASC, t.InasistenciasT ASC";
        $connB = $conexion -> query($varB);
        $DNI = $connB ->fetch_array();
        $var2 = "UPDATE eleccion SET Prioridad = $y where DNI = $DNI[$i] and ID_Modalidad = $x";
        $conn2= $conexion->query($var2);
        if($y <= 39)
        {
            $DNIalu[$x][$y] = $DNI[$i];
            $var3 = "UPDATE eleccion SET Situacion = 'Dentro del curso' where DNI = $DNI[$i]";
            $conn3 = $conexion->query($var3);
        }
        else {  
            $DNIalue[$x][$y] = $DNI[$i];
            $var4 = "UPDATE eleccion SET Situacion = 'En lista de espera' where DNI = $DNI[$i]";
            $conn4 = $conexion->query($var4);
            }
    }
    $i++;
}
for($x = 1; $x <= 5; $x++)
{   
    $ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    ?>
    <h1><?php echo $siqeusi["Descripcion"]?></h1>
        <table border = 1><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistnecias</th><th>Comentario</th></tr>
    <?php 
    for($y = 1; $y <= $siquesi[0]; $y++)
    {   
        $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario
        FROM total t, alumnos a, eleccion e 
        where DNI = '$DNIalu[$x][$y]' order by e.Prioridad asc";
        $info= $conexion->query($infoalu);
        $datos = $info ->fetch_array();
        ?>
        <tr><td><?php echo $y?></td><td><?php echo $datos["a.Nombre"]?></td><td><?php echo $datos["t.PromediosT"]?></td><td><?php echo $datos["t.FichasT"]?></td><td><?php echo $datos["t.ObservacionesT"]?></td><td><?php echo $datos["t.InasistneciasT"]?></td><td><?php echo $datos["T.Comentario"]?></td><tr>
    <?php 
        if($y <= 39)
        {

        }
    }
}
?>