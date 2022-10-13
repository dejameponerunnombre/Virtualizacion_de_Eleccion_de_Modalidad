<html>

<?php
session_start();
include("db.php");
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Listas.xls");  
header("Pragma: no-cache");  
header("Expires: 0");
for($x = 1; $x <= 5; $x++)
{
    $ahorasi="SELECT Ingresos, Descripcion FROM modalidad where ID_Modalidad = $x";
    $quesi= $conexion->query($ahorasi);
    $siquesi = $quesi ->fetch_array();
    if ($siquesi[0] > 0)
    {
        ?>
        </table></div>
    <h2 style="text-align: center; font-weight:600; color:#000a35;"> <?php echo $siquesi["Descripcion"] ?></h2>
     <div class="datagrid">   <table border = 1 style="text-align: center;"><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th><th>Mes sin adeudamineto de materia</th></tr>
    <?php
    for($y = 1; $y <= 39 && $y <= $siquesi[0]; $y++)
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
        $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario, t.sin_pendientes
        FROM total t, alumnos a, eleccion e 
        where a.DNI = $DNI[0] and t.DNI = $DNI[0]";
        $info= $conexion->query($infoalu);
        $datos = $info ->fetch_array();
        switch($datos["sin_pendientes"])
        {
            case 1:
                {
                    $mes = "Noviembre";  
                    break; 
                }
            case 2:
                {
                    $mes = "Diciembre"; 
                    break;   
                }
            case 3:
                {
                    $mes = "Febrero"; 
                    break;   
                }
            case 4:
                {
                    $mes = "Marzo";   
                    break; 
                }
        }
        $_SESSION["mes"] = $mes;
        ?>
        <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td><?php echo $datos["Comentario"]?></td><td><?php echo $mes ?></td>
        <?php 
        } 
        else
        {
            $no="SELECT DNI from eleccion  where ID_Modalidad = $x and Prioridad = $y and DNI not in(SELECT DNI from total)";
            $tas = $conexion -> query($no);
            $sinotas = $tas ->fetch_array();
            if(empty($sinotas)==false)
            {
                ?>
                <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td>
                <?php 
            }
        }
    }
    ?>
    
    </table>
    
    <?php
    }
    else
    {
        ?>
        <h1> No hay alumnos que hayan elegido <?php echo $siquesi["Descripcion"] ?> </h1>
        <?php
    }
    if($siquesi[0] > 39)
    {
        ?>
        </table></div>
        
        <h1 style="text-align: center; font-weight:600; color:#000a35;">Tabla de espera de <?php echo $siquesi["Descripcion"]?></h1>
        <div class="datagrid"><table border = 1><tr><th>Puesto</th><th>Alumno</th><th>Promedio</th><th>Fichas</th><th>Observaciones</th><th>Inasistencias</th><th>Comentario</th>
        <?php
        for($y = 40; $y <= $siquesi[0]; $y++)
        {   
            $varB = "SELECT t.DNI FROM total t , eleccion e where t.DNI = e.DNI 
            and e.ID_Modalidad = $x and e.Prioridad = $y";
            $connB = $conexion -> query($varB);
            $DNI = $connB ->fetch_array();
            $infoalu="SELECT a.Nombre, t.PromediosT, t.FichasT, t.ObservacionesT, t.InasistenciasT, t.Comentario
            FROM total t, alumnos a, eleccion e 
            where a.DNI = $DNI[0] and t.DNI = $DNI[0]";
            $info= $conexion->query($infoalu);
            $datos = $info ->fetch_array();
            ?>
            <tr><td><?php echo $y?></td><td><?php echo $datos["Nombre"]?></td><td><?php echo $datos["PromediosT"]?></td><td><?php echo $datos["FichasT"]?></td><td><?php echo $datos["ObservacionesT"]?></td><td><?php echo $datos["InasistenciasT"]?></td><td ><?php echo $datos["Comentario"]?></td>
            <?php
        }
    ?>
    </table>
    <?php 
    }
    else
    {
        ?>
        </div>
        <h1 style="text-align: center; font-weight:600; color:#000a35; font-size:18px"> No hay lista de espera de <?php echo $siquesi["Descripcion"] ?> </h1>
        <div class="datagrid">
        <?php
        
    }
    
}



?>
</html>

