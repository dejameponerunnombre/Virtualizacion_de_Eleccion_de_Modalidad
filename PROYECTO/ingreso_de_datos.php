<?php
session_start();
$DNI = $_SESSION['DNI'];
include("db.php");
$request = "SELECT*FROM alumnos where DNI = '$DNI'";
$resultado=mysqli_query($conexion,$request);
$filas = mysqli_num_rows($resultado);

if($filas > 0){
    $request2 = "SELECT*FROM info where DNI = '$DNI'";
    $resultado2 = mysqli_query($conexion,$request2);
    $filas2 = mysqli_num_rows($resultado2);
    if($filas2 > 0){
        
            include("form-ingreso.html");
                ?>
                <h1> Alumno ya ingresado</h1>
                <?php
        }
    else 
    {
        ?>
         </div>   
        <br>
        <div class="prom">
        <h2>Ingresar datos de alumno</h2>
            <br>
            
            <form action="carga_de_datos.php" method="post"  >
        <div class="info">
        <div class="datos">
            <h3>Promedios</h3>
            <p>Promedio de Primer Año: <input type="number" name="Promedio_1ro" value=""></p>            
            <p>Promedio de Segundo Año: <input type="number" name="Promedio_2do" value=""></p>           
            <p>Promedio de Tercer Año: <input type="number" name="Promedio_3ro" value=""></p>
            

        </div>   
        <br>
        <div class="inasis">
            
            <h3>Inasistencias</h3>
            <p>Inasistencias de Primer Año: <input type="number" name="Inasistencias_1ro" value=""></p>
            <p>Inasistencias de Segundo Año: <input type="number" name="Inasistencias_2do" value=""></p>
            <p>Inasistencias de Tercer Año: <input type="number" name="Inasistencias_3ro" value=""></p>
            

        </div>
        <br>
        <div class="fichas">

            <h3>Fichas</h3>
            <p>Fichas de Primer Año: <input type="number" name="Fichas_1ro" value=""></p>
            <p>Fichas de Segundo Año: <input type="number" name="Fichas_2do" value=""></p>
            <p>Fichas de Tercer Año: <input type="number" name="Fichas_3ro" value=""></p>
            
        
        </div>
        <br>
        <div class="observ">
        
            <h3>Obserivaciones</h3>
            <p>Observaciones de Primer Año: <input type="number" name="Observaciones_1ro" value=""></p>
            <p>Observaciones de Segundo Año: <input type="number" name="Observaciones_2do" value=""></p>
            <p>Observaciones de Tercer Año: <input type="number" name="Observaciones_3ro" value=""></p>
            
        
        </div>
        <br>
        <div class="comen">    
        
            <h3>Comentario de conducta</h3>
            <p>Comentario de conducta: <input type="text" name="Comentario" id="comentario"></p>
        
        </div>

    </div>
    <button type="submit" class="m_boton_formulario">Enviar</button>
            </form>
                
            </div>
    <?php
}
}
else
{
    ?>
    <h1> DNI no existente </h1>
    <?php
}
mysqli_free_result($resultado);
?>
