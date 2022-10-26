<html>
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}  
include("db.php");
$x = $_SESSION['X'];
$ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
$quesi= $conexion->query($ahorasi);
$siquesi = $quesi ->fetch_array();
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Lista_Espera_$siquesi[Descripcion].xls");  
header("Pragma: no-cache");  
header("Expires: 0");
include("db.php");
$ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
$quesi= $conexion->query($ahorasi);
$siquesi = $quesi ->fetch_array();
if($siquesi[0] > 39)
{
    ?>
    </table></div>
    <h1 style="font-size:20px; text-align:center;">Tabla de espera de <?php echo $siquesi["Descripcion"]?></h1>
    <div class="datagrid"><table border = 1><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th><th>Mes sin adeudamiento de materia</th>
    <?php
    for($y = 40; $y <= $siquesi[0]; $y++)
    {   
        $no="SELECT DNI from eleccion  where ID_Modalidad = $x and Prioridad = $y and DNI in(SELECT DNI from total)";
        $tas = $conexion -> query($no);
        $sinotas = $tas ->fetch_array();
        if(empty($sinotas)==false)
        {  
        $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
        and e.ID_Modalidad = $x and e.Prioridad = $y";
        $connB = $conexion -> query($varB);
        $DNI = $connB ->fetch_array();
        $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, f.mes
        FROM total t, alumnos a, eleccion e, fecha f
        where a.DNI = $DNI[0] and t.DNI = $DNI[0] and f.ID_mes = t.sin_pendientes";
        $info= $conexion->query($infoalu);
        $datos = $info ->fetch_array();
        ?>
        <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td ><?php echo $datos["Comentario"]?></td><td><?php echo $datos["mes"] ?></td>
    <?php
    }
    else
        {
            $no="SELECT a.Nombre, e.DNI from eleccion e, alumnos a where e.ID_Modalidad = $x and e.Prioridad = $y and e.DNI not in(SELECT DNI from total) and e.DNI = a.DNI";
            $tas = $conexion -> query($no);
            $sinotas = $tas ->fetch_array();
            if(empty($sinotas)==false)
            {
                ?>
                <tr><td><?php echo $y?></td><td><?php echo $sinotas[0]?></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td>
                <?php 
            }
        }
    }
}
else
{
    ?>
    <a class="img" ><img src="../IMG/curso.jpg" style="opacity: 0.2; width: 50%; margin-left: 25%; vertical-align: top;"/></a> 
                     <h1 style="text-align: center;position: absolute; top: 50%; margin-left: 50%; transform: translate(-50%, -50%);font-size: 25px;"> No hay alumnos en lista de espera en <?php echo $siquesi["Descripcion"] ?></h1>
    
    <?php
}
?>
</table></div>

</html>
