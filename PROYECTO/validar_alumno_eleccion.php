<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
 
include("db.php");
 
$consulta = "SELECT*FROM alumnos where DNI = '$usuario' and CUIL = '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    ?>
     
    <?php
    include("ELECCION.html");
}else{
    ?>
    <?php
    include("login_alumno_eleccion.html");
    ?>
    <h1> Datos erroneos </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
