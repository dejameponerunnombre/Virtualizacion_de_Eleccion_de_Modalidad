<?php
echo "<link rel=stylesheet href=../PROYECTO/footer.css>";
echo "<link rel=stylesheet href=../PROYECTO/custom.css>";
session_start();
include("db.php");
$x = 0;
$DNI = $_SESSION['DNI'];
$Nombre = $_POST['nombre'];
$curso=$_POST['curso'];
$mail = $_POST['mail'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$in  = "INSERT INTO alumnos (DNI, Nombre, Usuario, Contrasenia, Mail,Curso) values 
('$DNI','$Nombre','$usuario','$contrasenia','$mail','$curso')";
$con =  $conexion -> query($in);
if(empty($con) === false)
{
    $x = 10;
$_SESSION['x'] = $x;
include("ingreso-alumno.php");
}

mysqli_close($conexion);
?> 