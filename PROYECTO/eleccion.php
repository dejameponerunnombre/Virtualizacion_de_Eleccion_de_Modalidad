<?php
$modalidad = $_POST['modalidad'];
session_start();
$_SESSION['modalidad'] = $modalidad;
include("db.php");   
"INSERT INTO Curso (ID_Modalidad) where ID_Alumno = '$ID_Alumno' values 
('$modalidad')";
mysqli_close($conexion);
?>
