<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
include("db.php");
$consult = "SELECT*FROM empleado where Usuario = '$usuario' and Contrasenia = '$contraseña'";
$resultado=mysqli_query($conexion,$consult);
$filas = $resultado -> fetch_array();

if($filas)
{
 if($filas['Tipo'] == 'Secretaria')
   {
    include("panel de control.html");
   }
 else
 {
  include('promedios2.0.php');
 }
}
else
{
  include("login_trbajador_datos.html");
  ?>
  <h1> Datos erroneos </h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
