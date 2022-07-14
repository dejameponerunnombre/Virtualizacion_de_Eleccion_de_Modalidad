<?php
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
$nombre="SELECT Nombre FROM alumnos WHERE DNI=$contraseña ";
$del=$conexion->($nombre);
$alumno=fetcharray($del);
ECHO"El alumno $alumno esta $situacion de $descripcion";
?>
