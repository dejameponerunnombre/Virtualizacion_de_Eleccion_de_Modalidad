<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="form-ingreso.css">

    <title>Eliminar alumnos</title>
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
if($filas > 0)
{
  $eliminar = "DELETE FROM info where DNI = $DNI";
  $borrar = $conexion -> query($eliminar);
  $eliminar1 = "DELETE FROM modalidad where DNI = $DNI";
  $borrar1 = $conexion -> query($eliminar1);
  $eliminar2 = "DELETE FROM total where DNI = $DNI";
  $borrar2 = $conexion -> query($eliminar2);
  $eliminar3 = "DELETE FROM eleccion where DNI = $DNI";
  $borrar3 = $conexion -> query($eliminar3);
  $eliminar4 = "DELETE FROM alumnos where DNI = $DNI";
  $borrar4 = $conexion -> query($eliminar4);
  if($borrar4===TRUE)
    {
        ECHO"Alumno eliminado de la base de datos";
    }
}
else
{
  echo"Alumno no ingresado";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
