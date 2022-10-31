<?php
$final =  mktime(0, 0, 0, 10, 15, 2022);
$ahora = time() ;

if($ahora > $final)
{
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $_SESSION['usuario'] = $usuario;
    $_SESSION['contraseña'] = $contraseña;
    include("db.php");
     
    $consulta = "SELECT*FROM alumnos where Usuario = '$usuario' and Contrasenia = '$contraseña'";
    $resultado=mysqli_query($conexion,$consulta);
    $array = $resultado -> fetch_array();
    $filas = mysqli_num_rows($resultado);
    
    
    if($filas)
    {
        $eleccion = "SELECT*FROM eleccion where DNI = '$array[0]'";
        $resultado2 = mysqli_query($conexion,$eleccion);
        $filas2 = mysqli_num_rows($resultado2);
        if($filas2)
        {
            include("mostrar.php");
        }
        else
        {
            include("curso.html");
        }
    }
    else
    {
        include("curso.html");
        ?>
        <h1> Datos erroneos </h1>
        <?php
    }
}
else
{
    include("mensaje-error2.html");
}



