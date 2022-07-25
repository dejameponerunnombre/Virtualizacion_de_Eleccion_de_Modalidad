<?php
$modalidad = $_POST['modalidad'];
session_start();
$DNI = $_SESSION['usuario'];
include("db.php");
$selec = "SELECT * FROM eleccion where DNI = $DNI";
$a =$conexion -> query($selec);
$cant = $a ->num_rows;
if($cant == 0)
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
            $request = "SELECT Escuela FROM alumnos where DNI = $DNI";
            $consulta = $conexion -> query($request);
            $Escuela = $consulta ->fetch_array();
            if($modalidad == 1 || $modalidad == 2)
            {  
                if($Escuela[0] == 'orientada')
                    $cambio = "No";
                else 
                    $cambio = "Si";
            }
            else 
            {  
                if($Escuela[0] == 'Tecnica' or  $Escuela[0] == 'tecnica') 
                    $cambio = "No";
                else
                    $cambio = "Si";
            }
            $con = "INSERT INTO eleccion (DNI, ID_Modalidad, Prioridad, Situacion, Cambio) values ('$DNI', '$modalidad', 0, '-', '$cambio')";
            $A = $conexion -> query($con);
       }
    else
    {
        $eliminar = "DELETE FROM info where DNI = $DNI";
        $borrar = $conexion -> query($eliminar);
        $eliminar1 = "DELETE FROM modalidad where DNI = $DNI";
        $borrar1 = $conexion -> query($eliminar1);
        $eliminar2 = "DELETE FROM total where DNI = $DNI";
        $borrar2 = $conexion -> query($eliminar2);
        $eliminar3 = "DELETE FROM eleccion where DNI = $DNI";
        $borrar3 = $conexion -> query($eliminar3);
        $eliminar4 = "DELETE FROM alumnos where DNI = $DNI";
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
