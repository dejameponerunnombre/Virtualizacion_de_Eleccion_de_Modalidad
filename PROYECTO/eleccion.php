<?php
$modalidad = $_POST['modalidad'];
session_start();
$DNI = $_SESSION['usuario'];
include("db.php");
$selec = "SELECT DNI FROM eleccion";
$a =$conexion -> query($selec);
if($a != $DNI)
{
    $y = "UPDATE modalidad SET Ingresos = Ingresos + 1 where ID_Modalidad = $modalidad";
    $b =$conexion -> query($y);
    if($b === TRUE)
    {
        ECHO ":)";
    }
    else 
    {
        ECHO "ERROR";
    }
    $con = "INSERT INTO eleccion (ID_Modalidad, DNI) values ($modalidad, $DNI)";
    $A = $conexion -> query($con);
}
else 
{
    echo "Eleccion ya realizada";
}

?>