<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}  
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$_SESSION['usuario'] = $usuario;
include("db.php");
$consult = "SELECT Usuario, Contrasenia, Tipo FROM empleado where Usuario = '$usuario' and Contrasenia = '$contraseña'";
$resultado= $conexion->query($consult);
$filas = $resultado -> fetch_array();
if(empty($filas[0]) === false)
{
  if($filas[0]===$usuario && $filas[1]===$contraseña )
  {
  switch($filas['Tipo'])
     {
       case 'Secretaria': 
        {
          include("panel de control.html");
          break;
        }
        case 'Directivo': 
        {
        include('directivos.php');
        break;
        }
    }
  }
  else
  {
    include("login_trabajador_datos.html");
    echo '<script>alert("Algún campo fue completado de manera erronea")</script>';
  }
}
else
{
  include("login_trabajador_datos.html");
  echo '<script>alert("Algún campo fue completado de manera erronea")</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
session_abort();
