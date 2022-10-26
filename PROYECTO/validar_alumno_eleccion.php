<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}  
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
include("db.php");
$consulta = "SELECT DNI, Usuario, Contrasenia FROM alumnos where Usuario = '$usuario' and Contrasenia = '$contraseña'";
$resultado = $conexion -> query($consulta);
$filas = $resultado ->fetch_array();

if(empty($filas[0]) === false)
{
    $_SESSION['DNI'] = $filas[0];
    if($filas[1]===$usuario && $filas[2]===$contraseña )
    {
        $consulta2 = "SELECT * FROM eleccion where DNI = $filas[0]";
        $resultado2 = mysqli_query($conexion,$consulta2);
        $anashe = mysqli_num_rows($resultado2);
        if(empty($anashe) === false)
        {
            include("curso.php");
        }
        else
        {
            include("ELECCIONhtml.php");
        }
    }
    else
    {
        include("login_alumno_eleccion.html");
        echo '<script>alert("Algún campo fue completado de manera erronea")</script>';
    }
}
else
{
    include("login_alumno_eleccion.html");
    echo '<script>alert("Algún campo fue completado de manera erronea")</script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
