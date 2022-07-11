<?php
include("db.php");
for($x = 1; $x <= 5; $x++)
{    
    $pepe = 0;
    $ahorasi="SELECT DNI FROM eleccion where ID_Modalidad = $x";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    for($i = 1; $i <= 10; $i++)
    {   
        $varB = "SELECT DNI FROM total  where DNI != $pepe order by total.PromediosT DESC";
        $connB = $conexion -> query($varB);
        $DNI = $connB ->fetch_array();
        $pepe = $DNI[0];
        $var = "SELECT PromediosT FROM total where DNI = $DNI[0] order by total.PromediosT DESC";
        $conn = $conexion -> query($var);
        $Prom = $conn ->fetch_array();
        $var2 = "UPDATE eleccion SET Prioridad = $i where DNI = $DNI[0] and ID_Modalidad = $x";
        $conn2= $conexion->query($var2);
        echo "a";
        if($i < 39)
        {    
            $var3 = "UPDATE eleccion SET Situacion = 'Dentro del curso' where DNI = $DNI[0]";
            $conn3 = $conexion->query($var3);
        }
        else {    
            $var4 = "UPDATE eleccion SET Situacion = 'En lista de espera' where DNI = $DNI[0]";
            $conn4 = $conexion->query($var4);
        }
    }
}


?>