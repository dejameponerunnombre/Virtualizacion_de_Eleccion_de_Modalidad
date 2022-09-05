<?php
session_start();
include("db.php");
$a = 0;
for($x = 1; $x <= 5; $x++)
{
    $ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    if ($siquesi[0] > 0)
    {
        $encabezado[$a] = '';
        $encabezado[$a] = $siquesi["Descripcion"]."\n"."Puesto"."\t"."Alumno"."\t"."DNI"."\t"."Promedio"."\t"."Fichas"."\t"."Observaciones"."\t"."Inasistencias"."\t"."Comentario"."\t"."Situacion"."\t";
        for($y = 1; $y <= $siquesi[0]; $y++)
        {   
            $infoalu="SELECT e.Prioridad, a.Nombre, e.DNI, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, e.Situacion
            FROM total t, alumnos a, eleccion e 
            where t.DNI = e.DNI  and a.DNI = e.DNI and e.ID_Modalidad = $x
            order by e.Prioridad asc";
            $info = $conexion->query($infoalu);
            $setData[$a] = '';
            while ($datos = mysqli_fetch_row($info)) {  
                $rowData = ''; 
                foreach ($datos as $value) {  
                    $value = '"' . $value . '"' . "\t";  
                    $rowData .= $value;  
                }  
                $setData[$a] = $setData[$a].trim($rowData) . "\n";  
            }  
        }
        $a ++;
    }
}
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Listas.xls");  
header("Pragma: no-cache");  
header("Expires: 0");
for($i = 0; $i < $a; $i++)
{
    echo ucwords($encabezado[$i]) . "\n" . $setData[$i] . "\n";
}

?>