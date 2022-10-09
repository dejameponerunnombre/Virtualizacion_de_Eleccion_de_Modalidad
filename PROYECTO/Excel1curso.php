<?php
session_start();
$mes=$_SESSION["mes"] ;
include("db.php");
$x = $_SESSION['c']; 
$ahorasi="SELECT * FROM total t 
Inner join alumnos a
on a.Curso = '$x' where a.DNI = t.DNI";
$quesi= $conexion->query($ahorasi);
$siquesi = $quesi ->fetch_array();
if (empty($siquesi[0])===FALSE)
{  
    $z=1;
    $encabezado = '';
    $encabezado = "3º ".$x."\n"."Modalidad"."\t"."Puesto"."\t"."Alumno"."\t"."Situacion"."\t"."Cambio de colegio"."\t"."Promedio"."\t"."Fichas"."\t"."Observaciones"."\t"."Inasistencias"."\t"."Comentario"."\t"."Cuando no adeuda materias"."\t";
    $request = "SELECT COUNT(*) FROM alumnos a INNER join eleccion e ON Curso = '$x' where e.DNI = a.DNI";
    $pedido = $conexion -> query($request);
    $alumnos = $pedido -> fetch_array();
    $DNI[1] = "AAAAAAAA";
    $DNI[0] = 0;
    for($y = 1; $y <= $alumnos[0]; $y++)
    {   
        $varB = "SELECT e.DNI, a.Nombre FROM eleccion e inner join alumnos a on a.DNI = e.DNI 
        where a.Curso = '$x' and a.Nombre > '$DNI[1]' and e.DNI != $DNI[0] order by a.Nombre ASC";
        $connB = $conexion -> query($varB);
        $DNI = $connB ->fetch_array();
        $infoalu="SELECT m.Descripcion, e.Prioridad, a.Nombre, e.Situacion, e.Cambio, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario
        FROM total t, alumnos a, eleccion e, modalidad m
        where a.DNI = $DNI[0] and t.DNI = $DNI[0] and e.DNI = $DNI[0] and e.ID_Modalidad = m.ID_Modalidad";
        $info= $conexion->query($infoalu);
        $setData = '';
        while ($datos = mysqli_fetch_row($info)) 
        {  
            $rowData = ''; 
            foreach ($datos as $value) 
            {  
                $value = '"' . $value . '"' . "\t";  
                $rowData .= $value;  
            }  
            $value .= '"' . $mes . '"' . "\t";  
            $rowData .= $value;
            $setData = $setData.trim($rowData) . "\n";  
        }   
        $sineleccion="SELECT COUNT(*) FROM alumnos a WHERE a.Curso = '$x' and a.DNI NOT IN(SELECT DNI FROM eleccion)";
        $noe= $conexion->query($sineleccion);
        $nomod = $noe ->fetch_array(); 
    }
    $sineleccion="SELECT COUNT(*) FROM alumnos a WHERE a.Curso = '$x' and a.DNI NOT IN(SELECT DNI FROM eleccion)";
    $noe= $conexion->query($sineleccion);
    $nomod = $noe ->fetch_array(); 
    if ($nomod[0] > 0)
    {
        $aluSinElex[1] = "AAAAAAAA";
        $aluSinElex[0] = 0;
        for($y = 1; $y <= $nomod[0]; $y++)
        {   
            $sinMod = "SELECT t.DNI, a.Nombre FROM eleccion e, alumnos a, total t 
            where  a.DNI NOT IN(SELECT DNI FROM eleccion) and a.Nombre > '$aluSinElex[1]' and t.DNI != $aluSinElex[0]  and t.DNI = a.DNI and a.Curso = '$x' order by a.Nombre ASC";
            $sinElex = $conexion -> query($sinMod);
            $aluSinElex = $sinElex ->fetch_array();
            $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario
            FROM total t, alumnos a, eleccion e
            where a.DNI NOT IN(SELECT DNI FROM eleccion) and a.DNI = $aluSinElex[0] and t.DNI = $aluSinElex[0] and a.Curso = '$x'  and a.DNI=t.DNI";
            $data= $conexion->query($infoalu);
            $fact = $data ->fetch_array();
            $rowData = '';
            $dato[0] = '"' . 'No realizo la eleccion' . '"' . "\t";
            $rowData .= $dato[0];
            $dato[1] = '"' . '-' . '"' . "\t";
            $rowData .= $dato[1];
            $dato[2] = '"' . $fact["Nombre"] . '"' . "\t";
                    $rowData .= $dato[2];
                    $dato[3] = '"' . '-' . '"' . "\t";
                    $rowData .= $dato[3];
                    $dato[4] = '"' . '-' . '"' . "\t";
                    $rowData .= $dato[4];
                    $dato[5] = '"' . $fact["PromediosT"] . '"' . "\t";
                    $rowData .= $dato[5];
                    $dato[6] = '"' . $fact["FichasT"] . '"' . "\t";
                    $rowData .= $dato[6];
                    $dato[7] = '"' . $fact["ObservacionesT"] . '"' . "\t";
                    $rowData .= $dato[7];
                    $dato[8] = '"' . $fact["InasistenciasT"] . '"' . "\t";
                    $rowData .= $dato[8];
                    $dato[9] = '"' . $fact["Comentario"] . '"' . "\t";
                    $rowData .= $dato[9];
                    $setData = $setData.trim($rowData) . "\n";  
                    $value .= '"' . $mes . '"' . "\t";  
                    $rowData .= $value;
                    $setData = $setData.trim($rowData) . "\n";    
        }
    } 
}
else
    {   
        $sineleccion="SELECT COUNT(*) FROM alumnos a WHERE a.Curso = '$x' and a.DNI NOT IN(SELECT DNI FROM eleccion)";
        $noe= $conexion->query($sineleccion);
        $nomod = $noe ->fetch_array(); 
        if ($nomod[0] > 0)
        {
            ?>
                <div class="col-md-12">
                    <h2>Listas por División: <span style="color:#040544; font-weight: 900;">3º <?php echo $x ?></span></h2>   
                    <hr>
                    <div class="datagrid">
                        <table border = 1 ><tr><th>Modalidad</th><th>Puesto</th><th>Alumno</th><th>Situacion</th><th>Cambio de colegio</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th></tr>
            <?php
            $aluSinElex[1] = "AAAAAAAA";
            $aluSinElex[0] = 0;
            for($y = 1; $y <= $nomod[0]; $y++)
            {   
                $sinMod = "SELECT t.DNI, a.Nombre FROM eleccion e, alumnos a, total t 
                where  a.DNI NOT IN(SELECT DNI FROM eleccion) and a.Nombre > '$aluSinElex[1]' and t.DNI != $aluSinElex[0] and a.DNI=t.DNI and a.Curso = '$x' order by a.Nombre ASC";
                $sinElex = $conexion -> query($sinMod);
                $aluSinElex = $sinElex ->fetch_array();
                $infoalu="SELECT  a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario
                FROM total t, alumnos a, eleccion e
                where a.DNI NOT IN(SELECT DNI FROM eleccion) and a.DNI = $aluSinElex[0] and t.DNI = $aluSinElex[0] and a.Curso = '$x'  and a.DNI=t.DNI";
                $data= $conexion->query($infoalu);
                $fact = $data ->fetch_array();
                    $rowData = '';
                    $dato[0] = '"' . 'No realizo la eleccion' . '"' . "\t";
                    $rowData .= $dato[0];
                    $dato[1] = '"' . '-' . '"' . "\t";
                    $rowData .= $dato[1];
                    $dato[2] = '"' . $fact["Nombre"] . '"' . "\t";
                    $rowData .= $dato[2];
                    $dato[3] = '"' . '-' . '"' . "\t";
                    $rowData .= $dato[3];
                    $dato[4] = '"' . '-' . '"' . "\t";
                    $rowData .= $dato[4];
                    $dato[5] = '"' . $fact["PromediosT"] . '"' . "\t";
                    $rowData .= $dato[5];
                    $dato[6] = '"' . $fact["FichasT"] . '"' . "\t";
                    $rowData .= $dato[6];
                    $dato[7] = '"' . $fact["ObservacionesT"] . '"' . "\t";
                    $rowData .= $dato[7];
                    $dato[8] = '"' . $fact["InasistenciasT"] . '"' . "\t";
                    $rowData .= $dato[8];
                    $dato[9] = '"' . $fact["Comentario"] . '"' . "\t";
                    $rowData .= $dato[9];
                    $setData = $setData.trim($rowData) . "\n";   
                    $value .= '"' . $mes . '"' . "\t";  
                    $rowData .= $value;
                    $setData = $setData.trim($rowData) . "\n";  
            }
        }  
    }
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Listas-Curso-3º$x.xls");  
header("Pragma: no-cache");  
header("Expires: 0");

echo ucwords($encabezado) . "\n" . $setData . "\n";
?>