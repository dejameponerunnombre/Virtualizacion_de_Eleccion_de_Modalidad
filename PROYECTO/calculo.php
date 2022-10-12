<?php
include ("db.php");
$limpiado="UPDATE eleccion SET Prioridad = 0";
$limpio= $conexion->query($limpiado);
for($x = 1; $x <= 5; $x++)
{
    $ahorasi="SELECT Ingresos FROM modalidad where ID_Modalidad = $x";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    if ($siquesi[0] > 0)
    {
        for($y = 1; $y <= 39 && $y <= $siquesi[0]; $y++)
        {    
            $no="SELECT DNI from eleccion  where ID_Modalidad = $x and Prioridad = 0 and DNI not in(SELECT DNI from total)";
            $tas = $conexion -> query($no);
            $sinotas = $tas ->fetch_array();
            if(empty($sinotas)==TRUE)
            {
            $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
            and e.ID_Modalidad = $x and e.Prioridad = 0 and e.Cambio = 'No' 
            order by t.sin_pendientes ASC, t.PromediosT DESC, t.FichasT  ASC, t.ObservacionesT ASC, t.InasistenciasT ASC";
            $connB = $conexion -> query($varB);
            $DNI = $connB ->fetch_array();
            $cant = $connB ->num_rows;
            if($cant == 0)
            {
                $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
                and e.ID_Modalidad = $x and e.Prioridad = 0
                order by t.sin_pendientes ASC, t.PromediosT DESC, t.FichasT  ASC, t.ObservacionesT ASC, t.InasistenciasT ASC";
                $connB = $conexion -> query($varB);
                $DNI = $connB ->fetch_array();
            }
            $var2 = "UPDATE eleccion SET Prioridad = '$y', Situacion = 'Dentro de la modalidad' where DNI = $DNI[0]";
            $conn2= $conexion->query($var2);
        }
        else
        {
            $var4 = "UPDATE eleccion SET Situacion = 'En lista de espera' where DNI = '$sinotas[0]'";
            $conn4 = $conexion->query($var4); 
        }
        }
    }
    if($siquesi[0] > 39)
    {
        for($y = 40; $y <= $siquesi[0]; $y++)
        {
            $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
            and e.ID_Modalidad = $x and e.Prioridad = 0 and e.Cambio = 'No' 
            order by t.sin_pendientes ASC, t.PromediosT DESC, t.FichasT  ASC, t.ObservacionesT ASC, t.InasistenciasT ASC";
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
            $var4 = "UPDATE eleccion SET Situacion = 'En lista de espera', Prioridad = $y where DNI = $DNI[0]";
            $conn4 = $conexion->query($var4); 
        }
    }
}
?>