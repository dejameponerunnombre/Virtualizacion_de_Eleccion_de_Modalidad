<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuario;
 
include("db.php");

$consulta = "SELECT*FROM trabajador where Nombre = '$usuario' and Clave = '$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if($filas){
    ?>
    <?php
    include("form-ingreso.html");
}else{
    ?>
    <?php
    include("login_trbajador_datos.html");
    ?>
    <h1> Datos erroneos </h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);