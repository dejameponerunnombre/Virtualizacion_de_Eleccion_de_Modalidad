<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
include("db.php");
$consult = "SELECT*FROM empleado where Usuario = '$usuario' and Contrasenia = '$contraseña'";
$resultado=mysqli_query($conexion,$consult);
$filas = mysqli_num_rows($resultado);
$tipo="SELECT Tipo FROM empleado where Usuario = '$usuario' and Contrasenia = '$contraseña ";
$de=$conexion->query($tipo);
$empleado=fetch_array($tipo);

if($filas)
{
 if($empleado[0]='Secretaria')
   {
    include("pc_trabajador.html");
   }
 else
 {
  include(promedios2.0.php);
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
