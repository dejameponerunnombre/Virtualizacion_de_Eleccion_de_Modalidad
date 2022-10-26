<?php
echo "<link rel=stylesheet href=../PROYECTO/footer.css>";
echo "<link rel=stylesheet href=../PROYECTO/custom.css>";
if(!isset($_SESSION)) 
{ 
    session_start(); 
}  
include("db.php");
$x = 0;
$DNI = $_SESSION['DNI'];
$Nombre = $_POST['nombre'];
$curso = $_POST['curso'];
$mail = $_POST['mail'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
if($mail==NULL || $usuario==NULL || $contrasenia==NULL || $curso==NULL || $Nombre==NULL || $DNI==NULL)
{
    $v=1;
    $_SESSION['v'] = $v;
    include("ingreso-alumno.php");
}
else
{
    if($curso=='A' || $curso=='B' || $curso=='C' || $curso=='G' )
    {
        $escuela="Tecnica";
    }
    else
    {
        $escuela="Orientada";
    }
    $in  = "INSERT INTO alumnos (DNI, Nombre, Usuario, Contrasenia, Mail,Curso,Escuela) values 
    ('$DNI','$Nombre','$usuario','$contrasenia','$mail','$curso','$escuela')";
    $con =  $conexion -> query($in);
    if(empty($con) === false)
    {
        $x = 10;
        $_SESSION['x'] = $x;
        $v=null;
        $_SESSION['v'] = $v;
        include("ingreso-alumno.php"); 
    }
}
mysqli_close($conexion);
?> 