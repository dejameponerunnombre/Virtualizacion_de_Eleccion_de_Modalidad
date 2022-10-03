<?php
echo "<link rel=stylesheet href=../PROYECTO/footer.css>";
echo "<link rel=stylesheet href=../PROYECTO/custom.css>";
session_start();
include("db.php");
$x = 0;
$DNI = $_SESSION['DNI'];
$Nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
include("db.php");
$in  = "INSERT INTO alumnos (DNI, Nombre, Usuario,Contrasenia , Mail) values 
($DNI,$Nombre,$mail,$usuario,$contraseña,$mail)";
$con =  $conexion -> query($in);
$x = 10;
$_SESSION['x'] = $x;
include("ingreso-alumno.php");
mysqli_close($conexion);
?>