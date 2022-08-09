<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="style_ingreso.css">

    <title>Control de notas</title>
</head>

<body>
<?php
session_start();
$DNI = $_SESSION['DNI'];
 
include("db.php");
$request = "SELECT*FROM info where DNI = '$DNI'";
$resultado=mysqli_query($conexion,$request);

$filas = mysqli_num_rows($resultado);

if($filas > 0){
    $consulta1 = "SELECT*FROM info where DNI = $DNI and Anio = 1";
    $consulta2 = "SELECT*FROM info where DNI = $DNI and Anio = 2";
    $consulta3 = "SELECT*FROM info where DNI = $DNI and Anio = 3";
    $datos1 = $conexion -> query($consulta1);
    $datos2 = $conexion -> query($consulta2);
    $datos3 = $conexion -> query($consulta3);
    $fila1 = $datos1 ->fetch_array();
    $fila2 = $datos2 ->fetch_array();
    $fila3 = $datos3 ->fetch_array();
    $_SESSION['filas1'] = $fila1;
    $_SESSION['filas2'] = $fila2;
    $_SESSION['filas3'] = $fila3;
    ?>
    <div class="m_formulario">
        <div style="padding:20px;">
                <h2>Ingresar datos de alumno</h2>
            <br>
            
            <form action="edicion_de_datos.php" method="post" target="_self" >
                <div class="prom">
            
                    <h3>Promedios</h3>
                    <p>Promedio de Primer Año: <input type="number" name="Promedio_1ro" placeholder="<?php echo $fila1["Prom"] ?>"></p>            
                    <p>Promedio de Segundo Año: <input type="number" name="Promedio_2do" placeholder="<?php echo $fila2["Prom"] ?>"></p>            
                    <p>Promedio de Tercer Año: <input type="number" name="Promedio_3ro" placeholder="<?php echo $fila3["Prom"] ?>"></p> 
                    
        
                </div>   
                <br>
                <div class="inasis">
                    
                    <h3>Inasistencias</h3>
                    <p>Inasistencias de Primer Año: <input type="number" name="Inasistencias_1ro" placeholder="<?php echo $fila1["Inasistencias"] ?>"></p>
                    <p>Inasistencias de Segundo Año: <input type="number" name="Inasistencias_2do" placeholder="<?php echo $fila2["Inasistencias"] ?>"></p>
                    <p>Inasistencias de Tercer Año: <input type="number" name="Inasistencias_3ro" placeholder="<?php echo $fila3["Inasistencias"] ?>"></p>
                    
        
                </div>
                <br>
                <div class="fichas">
        
                    <h3>Fichas</h3>
                    <p>Fichas de Primer Año: <input type="number" name="Fichas_1ro" placeholder="<?php echo $fila1["Fichas"] ?>"></p>
                    <p>Fichas de Segundo Año: <input type="number" name="Fichas_2do" placeholder="<?php echo $fila2["Fichas"] ?>"></p>
                    <p>Fichas de Tercer Año: <input type="number" name="Fichas_3ro" placeholder="<?php echo $fila3["Fichas"] ?>"></p>
                    
                
                </div>
                <br>
                <div class="observ">
                
                    <h3>Observaciones</h3>
                    <p>Observaciones de Primer Año: <input type="number" name="Observaciones_1ro" placeholder="<?php echo $fila1["Observaciones"] ?>"></p>
                    <p>Observaciones de Segundo Año: <input type="number" name="Observaciones_2do" placeholder="<?php echo $fila2["Observaciones"] ?>"></p>
                    <p>Observaciones de Tercer Año: <input type="number" name="Observaciones_3ro" placeholder="<?php echo $fila3["Observaciones"] ?>"></p>
                    
                
                </div>
                <br>
                <div class="comen">    
                
                    <h3>Comentario de conducta</h3>
                    <p>Comentario de conducta: <input type="text" name="Comentario" id="comentario"></p>
                
                </div>
                <div class="texto-centro">
            <ul>
                
                <li><button type="submit" class="bttn-pill bttn-md bttn-primary">Enviar</button></li>
            </ul>
            </div>
        </div>
        </form>
        <?php   
}else{
    ?>
    <h1> Este DNI no ha sido ingresado anteriormente </h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>