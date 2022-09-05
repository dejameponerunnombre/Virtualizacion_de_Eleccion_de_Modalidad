<?php
session_start();
include("db.php");
$x = $_SESSION("X");
$ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
$quesi= $conexion->query($ahorasi);
$siquesi = $quesi ->fetch_array();
if ($siquesi[0] > 0)
{
    $encabezado = '';
    $encabezado = $siquesi["Descripcion"]."\n"."Puesto"."\t"."Alumno"."\t"."DNI"."\t"."Promedio"."\t"."Fichas"."\t"."Observaciones"."\t"."Inasistencias"."\t"."Comentario"."\t"."Situacion"."\t";
    for($y = 1; $y <= $siquesi[0]; $y++)
    {   
        $infoalu="SELECT e.Prioridad, a.Nombre, e.DNI, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, e.Situacion
        FROM total t, alumnos a, eleccion e 
        where t.DNI = e.DNI  and a.DNI = e.DNI and e.ID_Modalidad = $x
        order by e.Prioridad asc";
        $info = $conexion->query($infoalu);
        $setData = '';
        while ($datos = mysqli_fetch_row($info)) 
        {  
            $rowData = ''; 
            foreach ($datos as $value) 
            {  
                $value = '"' . $value . '"' . "\t";  
                $rowData .= $value;  
            }  
            $setData = $setData.trim($rowData) . "\n";  
        }  
    }
}
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Listas.xls");  
header("Pragma: no-cache");  
header("Expires: 0");

echo ucwords($encabezado) . "\n" . $setData . "\n";

?>