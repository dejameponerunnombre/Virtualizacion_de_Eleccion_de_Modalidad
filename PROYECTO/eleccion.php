<?php
$modalidad = $_POST['modalidad'];
session_start();
$DNI = $_SESSION['usuario'];
include("db.php");
$selec = "SELECT DNI FROM eleccion";
$a =$conexion -> query($selec);
if($a != $DNI)
{
    if($modalidad!=10)
        {
            $y = "UPDATE modalidad SET Ingresos = Ingresos + 1 where ID_Modalidad = $modalidad";
            $b =$conexion -> query($y);
            if($b === TRUE)
            {
                ECHO "Eleccion realizada";
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
        $eliminar = "DELETE*FROM info where DNI = '$DNI'";
        $borrar = $conexion -> query($eliminar);
        $eliminar1 = "DELETE*FROM modalidad where DNI = '$DNI'";
        $borrar1 = $conexion -> query($eliminar1);
        $eliminar2 = "DELETE*FROM total where DNI = '$DNI'";
        $borrar2 = $conexion -> query($eliminar2);
        $eliminar3 = "DELETE*FROM eleccion where DNI = '$DNI'";
        $borrar3 = $conexion -> query($eliminar3);
        $eliminar4 = "DELETE*FROM alumnos where DNI = '$DNI'";
        $borrar4 = $conexion -> query($eliminar4);
        if($borrar===TRUE && $borrar1 === TRUE && $borrar2=== TRUE && $borrar3=== TRUE && $borrar4=== TRUE)
        {
            ECHO"Alumno eliminado de la base de datos";
        }
    }
}
else 
{
    echo "Eleccion ya realizada";
}

?>
