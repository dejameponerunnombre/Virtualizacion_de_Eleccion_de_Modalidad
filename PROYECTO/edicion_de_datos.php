<?php
        session_start();
        include("db.php");
        $DNI = $_SESSION['DNI'];
        $anio1[0] = $_POST['Promedio_1ro'];
        $anio2[0] = $_POST['Promedio_2do'];
        $anio3[0] = $_POST['Promedio_3ro'];
        $anio1[1] = $_POST['Fichas_1ro'];
        $anio2[1] = $_POST['Fichas_2do'];
        $anio2[1] = $_POST['Fichas_3ro'];
        $anio1[2] = $_POST['Inasistencias_1ro'];
        $anio2[2] = $_POST['Inasistencias_2do'];
        $anio3[2] = $_POST['Inasistencias_3ro'];
        $anio1[3] = $_POST['Observaciones_1ro'];
        $anio2[3] = $_POST['Observaciones_2do'];
        $anio3[3] = $_POST['Observaciones_3ro'];
        $Comentario = $_POST['Comentario'];
        $filas1 = $_SESSION['filas1'];
        $filas2 = $_SESSION['filas2'];
        $filas3 = $_SESSION['filas3'];
        for($i = 0; $i>3; $i++)
        {
            if ($anio1[i] == NULL)
            {
                $anio1[i] = $filas1[i]; 
            }
            if ($anio2[i] == NULL)
            {
                $anio2[i] = $filas3[i]; 
            }
            if ($anio3[i] == NULL)
            {
                $anio3[i] = $filas3[i]; 
            }
        }
        $in1 = "UPDATE info SET Promedio = '$P1', Fichas = '$F1', Inasistencias= $I1, Obvservaciones=$O1, DNI=$DNI,ID_Anualidad=1";
        $in2 = "UPDATE info SET Promedio = '$P2', Fichas = '$F2', Inasistencias= $I2, Obvservaciones=$O2, DNI=$DNI,ID_Anualidad=2";
        $in3 = "UPDATE info SET Promedio = '$P3', Fichas = '$F3', Inasistencias= $I3, Obvservaciones=$O3, DNI=$DNI,ID_Anualidad=3";
        $con1 = $conexion -> query($in1);
        $con2 = $conexion -> query($in2);
        $con3 = $conexion -> query($in3);
        $var2 = "UPDATE alumnos SET Comentario = '$Comentario' where DNI = '$DNI'"; 
        $con4 = $conexion -> query($var2);
        ?>
            <h1> Informacion ingresada correctamente </h1>
        <?php

mysqli_close($conexion);
?>