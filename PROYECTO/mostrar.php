<?php
$inicio = mktime(0, 0, 0, 5, 1, 2022);
$final =  mktime(0, 0, 0, 10, 15, 2022);
$ahora = time() ;

if($ahora < $final and $ahora > $inicio)
{
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
  session_start();
  $_SESSION['usuario'] = $usuario;
  include("db.php");
  $curso="SELECT situacion 
  FROM eleccion 
  WHERE DNI=$contraseña";
  $esta=$conexion->($curso);
  $situacion=fetcharray($esta);
  $modalidad="SELECT m.Descripcion 
  FROM modalidad m, eleccion e
  WHERE e.DNI=$contraseña;
  $dela=$conexion->($modalidad);
  $descripcion=fetcharray($dela);
  $nombre="SELECT Nombre 
  FROM alumnos
  WHERE DNI=$contraseña ";
  $del=$conexion->($nombre);
  $alumno=fetcharray($del);
  $posicion="SELECT prioridad 
  FROM eleccion 
  WHERE DNI=$contraseña";
  $o=$conexion->($posicion);
  $puesto=fetcharray($o);
  ECHO"El alumno $alumno[0] esta $situacion[0] de $descripcion[0] en el puesto $puesto";
}
else
{
    include("mensaje-error.html");
}
?>
