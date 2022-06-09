<?php
        session_start();
        $DNI = $_SESSION['DNI'];
        $P1 = $_POST['Promedio_1ro'];
        $P2 = $_POST['Promedio_2do'];
        $P3 = $_POST['Promedio_3ro'];
        $F1 = $_POST['Fichas_1ro'];
        $F2 = $_POST['Fichas_2do'];
        $F3 = $_POST['Fichas_3ro'];
        $I1 = $_POST['Inasistencias_1ro'];
        $I2 = $_POST['Inasistencias_2do'];
        $I3 = $_POST['Inasistencias_3ro'];
        $O1 = $_POST['Observaciones_1ro'];
        $O2 = $_POST['Observaciones_2do'];
        $O3 = $_POST['Observaciones_3ro'];
        $Comentario = $_POST['Comentario'];
        if ($P1 == NULL|| $P2 == NULL|| $P3 == NULL|| $F1 == NULL|| $F2 == NULL|| $F3 == NULL|| $I1 == NULL|| $I2 == NULL|| $I3 == NULL|| $O1 == NULL|| $O2 == NULL|| $O3 == NULL|| $Comentario == NULL)
        {
            ?>
            <h1> Algun campo no ha sido ingresado</h1>
            <?php
        }
        else 
        {
            include("db.php");
            $in1 = "INSERT INTO info (Promedio, Fichas, Inasistencias, Observaciones, DNI, ID_Anualidad) values 
            ($P1, $F1, $I1, $O1, $DNI, 1)";
            $in2="INSERT INTO info (Promedio, Fichas, Inasistencias, Observaciones, DNI, ID_Anualidad) values 
            ($P2, $F2, $I2, $O2, $DNI, 2)";
            $in3="INSERT INTO info (Promedio, Fichas, Inasistencias, Observaciones, DNI, ID_Anualidad) values 
            ($P3, $F3, $I3, $O3, $DNI, 3)";
            $con1 = $conexion -> query($in1);
            $con2= $conexion -> query($in2);
            $con3= $conexion -> query($in3);
            $var2 = "UPDATE alumnos SET Comentario = '$Comentario' where DNI = '$DNI'"; 
            $con4 = $conexion -> query($var2);
            ?>
            <h1> Informacion ingresada correctamente </h1>
            <?php
        }

mysqli_close($conexion);
?>