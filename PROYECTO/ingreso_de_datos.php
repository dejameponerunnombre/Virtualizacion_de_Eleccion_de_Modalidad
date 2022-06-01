<?php
$DNI = $_POST['DNI'];
session_start();
$_SESSION['DNI'] = $DNI;
 
include("db.php");
$request = "SELECT*FROM alumnos where DNI = '$DNI'";
$resultado=mysqli_query($conexion,$request);

$filas = mysqli_num_rows($resultado);

if($filas > 0){
    $ID_Alumno = "SELECT ID_Alumnos FROM alumnos where DNI = '$DNI'";
    $P1 = $_POST['Promedio_1ro'];
    $P2 = $_POST['Promedio_2do'];
    $P3 = $_POST['Promedio_3ro'];
    $F1 = $_POST['Fichas_1ro'];
    $F2 = $_POST['Fichas_2do'];
    $F3 = $_POST['Fichas_3ro'];
    $I1 = $_POST['Inasistencias_1ro'];
    $I2 = $_POST['Inasistencias_2do'];
    $I3 = $_POST['Inasistencias_3ro'];
    $O1 = $_POST['Observaciones_1ro'];
    $O2 = $_POST['Observaciones_2do'];
    $O3 = $_POST['Observaciones_3ro'];
    $Comentario = $_POST['Comentario'];
    if ($P1 == NULL|| $P2 == NULL|| $P3 == NULL|| $F1 == NULL|| $F2 == NULL|| $F3 == NULL|| $I1 == NULL|| $I2 == NULL|| $I3 == NULL|| $O1 == NULL|| $O2 == NULL|| $O3 == NULL|| $Comentario == NULL)
    {
        include("form-ingreso.html");
    ?>
    <h1> Algun campo no ha sido ingresado</h1>
    <?php
    }
    else 
    {
    "INSERT INTO info (Promedio, Fichas, Inasistencias, Observaciones, ID_Alumno, ID_Anualidad) values 
    ($P1, $F1, $I1, $O1, '$ID_Alumno', '1');
    ($P2, $F2, $I2, $O2, '$ID_Alumno', '2');
    ($P3, $F3, $I3, $O3, '$ID_Alumno', '3');";
    $TP = ($P1 + $P2 + $P3)/3;
    $TF = $F1 + $F2 + $F3;
    $TI = $I1 + $I2 + $I3;
    $TO = $O1 + $O2 + $O3;
    "INSERT INTO total (Promedio, Fichas_Totales, Inasistencias_Totales, Observaciones_Totales, Comentario, ID_Alumno) values
    ($TP, $TF, $TI, $TO, $Comentario, $ID_Alumno)"; 
    include("form-ingreso.html");
    ?>
    <h1> Informacion ingresada correctamente </h1>
    <?php
    }
}else{
    include("form-ingreso.html");
    ?>
    <h1> DNI no existente </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
