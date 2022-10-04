<?php
echo "<link rel=stylesheet href=../PROYECTO/footer.css>";
echo "<link rel=stylesheet href=../PROYECTO/custom.css>";
session_start();
include("db.php");
$x = 0;
$DNI = $_SESSION['DNI'];
$P = $_POST['Promedio_1ro'];
$F = $_POST['Fichas_1ro'];
$I = $_POST['Inasistencias_1ro'];
$O = $_POST['Observaciones_1ro'];
$Comentario = $_POST['Comentario'];
$curso = $_POST['curso'];
$escuela = $_POST['escuela'];
$sin_pendientes = $_POST['sin_pendientes'];
$Ciclo_Lectivo = $_POST['ciclo_lectivo'];
$anio = $_POST['anio'];
include("db.php"); 
$in  = "INSERT INTO info (Prom, Fichas, Inasistencias, Observaciones, DNI, Anio, Curso, Escuela, sin_pendientes, Ciclo_Lectivo) values 
($P, $F, $I, $O, $DNI, $anio, $curso, $escuela, $sin_pendientes, $Ciclo_Lectivo)";
$con =  $conexion -> query($in);
$request = "SELECT * FROM total where DNI = '$DNI'";
$resultado = mysqli_query($conexion,$request);
if(empty($resultado) === true)
{
    $in  = "INSERT INTO total (PromediosT, FichasT, InasistenciasT, ObservacionesT, DNI, Comentario) values 
    ($P, $F, $I, $O, $DNI, $Comentario)";
    $con =  $conexion -> query($in);
}
else
{
    $in  = "UPDATE total SET PromediosT , FichasT, InasistenciasT, ObservacionesT, DNI, Comentario) values 
    ($P, $F, $I, $O, $DNI, $Comentario)";
    $con =  $conexion -> query($in);
}
$x = 10;
$_SESSION['x'] = $x;
include("form-ingreso.php");
mysqli_close($conexion);
?>