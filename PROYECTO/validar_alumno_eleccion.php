<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
 
include("db.php");
 
$consulta = "SELECT DNI FROM alumnos where Usuario = '$usuario' and Contrasenia = '$contraseña'";
$resultado = $conexion -> query($consulta);
$filas = $resultado ->fetch_array();

if(empty($filas[0]) === false)
{
    $consulta2 = "SELECT * FROM eleccion where DNI = $filas[0]";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $anashe = mysqli_num_rows($resultado2);
    if(empty($anashe) === false)
    {
        include("login_alumno_eleccion.html");
        echo '<script>alert("El alumno ya ha realizado la eleccion anteriormente")</script>';
    }
    else
    {
        include("ELECCION.html");
    }
}
else
{
    include("login_alumno_eleccion.html");
    echo '<script>alert("Algún campo fue completado de manera erronea")</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
