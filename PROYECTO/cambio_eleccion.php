<?php
session_start();
$DNI = $_SESSION['DNI'];
include("db.php");
$request = "SELECT*FROM eleccion where DNI = '$DNI'";
$resultado=mysqli_query($conexion,$request);
$filas = mysqli_num_rows($resultado);
if($filas > 0)
{
  $eliminar3 = "DELETE FROM eleccion where DNI = $DNI";
  $borrar3 = $conexion -> query($eliminar3);
    {
        ?>
        <h1>El alumno puede realizar de nuevo la eleccion</h1>
        <?php
    }
}
else
{
  $var = 10;
  $_SESSION['var'] = $var;
  include("cambio-eleccion.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
