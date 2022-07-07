<?php
include("db.php");
for($i = 1; $i < 2; $i++)
{
    $selec = "SELECT DNI FROM eleccion where ID_Modalidad = 4";
    $a = $conexion->query($selec);
    $fila = $a ->fetch_array();
    if($fila > 0)
    {
        ECHO ":)";
    }
    else 
    {
        ECHO "ERROR";
    }
    for ($q = 0; $q < count($fila); $q++)
    {
        $show2 = "SELECT Nombre FROM alumnos where DNI = $fila[$q]";
        $nom = $conexion -> query($show2);
        $fila2 = mysqli_num_rows($nom);
        if($fila2 > 0)
        {
            ECHO ":)";
        }
        else 
        {
            ECHO "ERROR";
        }
        $show3 = "SELECT PromediosT FROM total where DNI = $fila[$q]";
        $prom = $conexion -> query($show3);
        $fila3 = $prom ->fetch_array();
        if($fila3 > 0)
        {
            ECHO ":)";
        }
        else 
        {
            ECHO "ERROR";
        }
    }
}

?>