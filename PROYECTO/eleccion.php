<?php
$modalidad = $_POST['modalidad'];
session_start();
$DNI = $_SESSION['usuario'];
include("db.php");   
$con = "UPDATE alumnos SET Modalidad = '$modalidad' where  DNI = '$DNI'";
$var = $conexion -> query($con);
?>
