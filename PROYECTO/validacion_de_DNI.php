<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="form-ingreso.css">

    <title>Control de notas</title>
</head>

<body>
<?php
$DNI = $_POST['DNI'];
session_start();
$_SESSION['DNI'] = $DNI;
 
include("db.php");
$request = "SELECT*FROM alumnos where DNI = '$DNI'";
$resultado=mysqli_query($conexion,$request);

$filas = mysqli_num_rows($resultado);

if($filas > 0){
    $consulta1 = "SELECT*FROM info where DNI = $DNI and ID_Anualidad = 1";
    $consulta2 = "SELECT*FROM info where DNI = $DNI and ID_Anualidad = 2";
    $consulta3 = "SELECT*FROM info where DNI = $DNI and ID_Anualidad = 3";
    $datos1 = $conexion -> query($consulta1);
    $datos2 = $conexion -> query($consulta2);
    $datos3 = $conexion -> query($consulta3);
    $fila1 = $datos1 ->fetch_array();
    $fila2 = $datos2 ->fetch_array();
    $fila3 = $datos3 ->fetch_array();
}else{
    include("form_ingreso_DNI.html");
    ?>
    <h1> DNI no existente </h1>
    <?php
}
?>
<div class="m_formulario">
                <h2>Ingresar datos de alumno</h2>
            <br>
            
            <form action="edicion_datos.php" method="post" target="_blank">
                <div class="prom">
            
                    <h3>Promedios</h3>
                    <p>Promedio de Primer Año: <input type="number" name="Promedio_1ro" value="<?php $fila1["Promedio"] ?>" placeholder="<?php echo $fila1["Promedio"] ?>"></p>            
                    <p>Promedio de Segundo Año: <input type="number" name="Promedio_2do" value="<?php $fila2["Promedio"] ?>" placeholder="<?php echo $fila2["Promedio"] ?>"></p>            
                    <p>Promedio de Tercer Año: <input type="number" name="Promedio_3ro" value="<?php $fila3["Promedio"] ?>" placeholder="<?php echo $fila3["Promedio"] ?>"></p> 
                    
        
                </div>   
                <br>
                <div class="inasis">
                    
                    <h3>Inasistencias</h3>
                    <p>Inasistencias de Primer Año: <input type="number" name="Inasistencias_1ro" value="<?php $fila1["Inasistencias"] ?>" placeholder="<?php echo $fila1["Inasistencias"] ?>"></p>
                    <p>Inasistencias de Segundo Año: <input type="number" name="Inasistencias_2do" value="<?php $fila2["Inasistencias"] ?>" placeholder="<?php echo $fila2["Inasistencias"] ?>"></p>
                    <p>Inasistencias de Tercer Año: <input type="number" name="Inasistencias_3ro" value="<?php $fila3["Inasistencias"] ?>" placeholder="<?php echo $fila3["Inasistencias"] ?>"></p>
                    
        
                </div>
                <br>
                <div class="fichas">
        
                    <h3>Fichas</h3>
                    <p>Fichas de Primer Año: <input type="number" name="Fichas_1ro" value="<?php $fila1["Fichas"] ?>" placeholder="<?php echo $fila1["Fichas"] ?>"></p>
                    <p>Fichas de Segundo Año: <input type="number" name="Fichas_2do" value="<?php $fila2["Fichas"] ?>" placeholder="<?php echo $fila2["Fichas"] ?>"></p>
                    <p>Fichas de Tercer Año: <input type="number" name="Fichas_3ro" value="<?php $fila3["Fichas"] ?>" placeholder="<?php echo $fila3["Fichas"] ?>"></p>
                    
                
                </div>
                <br>
                <div class="observ">
                
                    <h3>Obserivaciones</h3>
                    <p>Observaciones de Primer Año: <input type="number" name="Observaciones_1ro" value="<?php $fila1["Observaciones"] ?>" placeholder="<?php echo $fila1["Observaciones"] ?>"></p>
                    <p>Observaciones de Segundo Año: <input type="number" name="Observaciones_2do" value="<?php $fila2["Observaciones"] ?>" placeholder="<?php echo $fila2["Observaciones"] ?>"></p>
                    <p>Observaciones de Tercer Año: <input type="number" name="Observaciones_3ro" value="<?php $fila3["Observaciones"] ?>" placeholder="<?php echo $fila3["Observaciones"] ?>"></p>
                    
                
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
</form>
<?php
mysqli_free_result($resultado);
mysqli_close($conexion);
?>