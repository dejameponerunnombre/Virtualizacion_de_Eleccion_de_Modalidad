<?php
echo "<link rel=stylesheet href=../PROYECTO/footer.css>";
echo "<link rel=stylesheet href=../PROYECTO/custom.css>";
session_start();
include("db.php");
$x = 0;
$DNI = $_SESSION['DNI'];
$anio=$_SESSION['anio'];
$P = $_POST['Promedio'];
$F = $_POST['Fichas'];
$I = $_POST['Inasistencias'];
$O = $_POST['Observaciones_1ro'];
$Comentario = $_POST['Comentario']; 
$curso = $_POST['curso'];
if($curso=="A" || $curso=="B" || $curso=="C" || $curso=="G")
{
    $escuela = "Tecnica";
}
if($curso=="D"|| $curso=="E")
{
    $escuela = "Orientada";
}
$sin_pendientes = $_POST['termina'];
$Ciclo_Lectivo = $_POST['ciclo_lectivo'];
echo $anio,$DNI,$P,$F,$I,$O,$Comentario,$curso,$escuela,$sin_pendientes,$Ciclo_Lectivo;
include("db.php"); 
$in  = "INSERT INTO info (Prom, Fichas, Inasistencias, Observaciones, DNI, Anio, Curso, Escuela, sin_pendientes, Ciclo_Lectivo) values 
($P, $F, $I, $O, '$DNI', $anio, '$curso', '$escuela', '$sin_pendientes', $Ciclo_Lectivo)";
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