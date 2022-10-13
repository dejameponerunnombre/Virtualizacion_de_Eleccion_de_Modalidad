<?php
session_start();
$mes=$_SESSION["mes"] ;
include("db.php");
$x = $_SESSION['b'];
$ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
$quesi= $conexion->query($ahorasi);
$siquesi = $quesi ->fetch_array();
if ($siquesi[0] > 0)
{
    $encabezado = ''; 
    $encabezado = $siquesi["Descripcion"]."\n"."Puesto"."\t"."Alumno"."\t"."DNI"."\t"."Promedio"."\t"."Fichas"."\t"."Observaciones"."\t"."Inasistencias"."\t"."Comentario"."\t"."Situacion"."\t"."Cuando no adeuda materias"."\t";

    for($y = 1; $y <= $siquesi[0] && $y <= 39; $y++)
    {   
        $no="SELECT DNI from eleccion  where ID_Modalidad = $x and Prioridad = $y and DNI in(SELECT DNI from total)";
        $tas = $conexion -> query($no);
        $sinotas = $tas ->fetch_array();
        if(empty($sinotas)==false)
        {  
        $infoalu="SELECT e.Prioridad, a.Nombre, e.DNI, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, e.Situacion
        FROM total t, alumnos a, eleccion e 
        where t.DNI = e.DNI  and a.DNI = e.DNI and e.ID_Modalidad = $x and e.Situacion = 'Dentro de la modalidad'
        order by e.Prioridad asc";
        $info = $conexion->query($infoalu);
        $setData = '';
        $mes = $_SESSION["mes"];
        while ($datos = mysqli_fetch_row($info)) 
        {  
            $datos["sin_pendientes"] = $mes;
            $rowData = ''; 
            foreach ($datos as $value) 
            {  
                $value = '"' . $value . '"' . "\t";  
                $rowData .= $value;  
            }   
            $setData = $setData.trim($rowData) . "\n";  
        }
    }
    else
        {
            $no="SELECT a.Nombre, e.DNI from eleccion e, alumnos a, total t  where e.ID_Modalidad = $x and e.Prioridad = $y and e.DNI != t.DNI and e.DNI = a.DNI";
            $tas = $conexion -> query($no);
            $sinotas = $tas ->fetch_array();
            if(empty($sinotas)==false)
            {
                $dato[0] = '"' . $y . '"' . "\t";
                $rowData .= $dato[0];
                $dato[1] = '"' . $sinotas["Nombre"] . '"' . "\t";
                $rowData .= $dato[1];
                $dato[3] = '"' . '-' . '"' . "\t";
                $rowData .= $dato[3];
                $dato[4] = '"' . '-' . '"' . "\t";
                $rowData .= $dato[4];
                $dato[5] = '"' . '-' . '"' . "\t";
                $rowData .= $dato[5];
                $dato[6] = '"' . '-' . '"' . "\t";
                $rowData .= $dato[6];
                $dato[7] = '"' . '-' . '"' . "\t";
                $rowData .= $dato[7];
                $dato[8] = '"' . '-' . '"' . "\t";
                $rowData .= $dato[8];
                $setData = $setData.trim($rowData) . "\n";  
            }
        }
    }
}
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Listas-adentro-$siquesi[1].xls");  
header("Pragma: no-cache");  
header("Expires: 0");

echo ucwords($encabezado) . "\n" . $setData . "\n";

?>