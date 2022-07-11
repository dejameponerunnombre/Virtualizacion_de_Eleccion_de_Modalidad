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
        order by t.PromediosT DESC";
        $connB = $conexion -> query($varB);
        $DNI = $connB ->fetch_array();
        $var2 = "UPDATE eleccion SET Prioridad = $y where DNI = $DNI[$i] and ID_Modalidad = $x";
        $conn2= $conexion->query($var2);
        if($y < 39)
        {    
            $var3 = "UPDATE eleccion SET Situacion = 'Dentro del curso' where DNI = $DNI[$i]";
            $conn3 = $conexion->query($var3);
        }
        else {    
            $var4 = "UPDATE eleccion SET Situacion = 'En lista de espera' where DNI = $DNI[$i]";
            $conn4 = $conexion->query($var4);
            }
    }
    $i++;
}
?>