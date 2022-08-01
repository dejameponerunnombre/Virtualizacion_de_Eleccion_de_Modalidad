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
    $nom="SELECT Nombre FROM alumnos where DNI = '$DNI'";
    $bre=$conexion -> query($nom);
    $esc="SELECT Escuela FROM alumnos where DNI = '$DNI'";
    $uela=$conexion -> query($uela);
    $cur="SELECT Curso FROM alumnos where DNI = '$DNI'";
    $so=$conexion -> query($cur);
    $docu="SELECT DNI FROM alumnos where DNI = '$DNI'";
    $mento=$conexion -> query($docu);
    ECHO $bre,$mento,$uela,$so;
}
else
{
  echo"Alumno no ingresado";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>