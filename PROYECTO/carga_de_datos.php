<?php
        session_start();
        include("db.php");
        $x = 0;
        $DNI = $_SESSION['DNI'];
        $P[0] = $_POST['Promedio_1ro'];
        $P[1] = $_POST['Promedio_2do'];
        $P[2] = $_POST['Promedio_3ro'];
        $F[0] = $_POST['Fichas_1ro'];
        $F[1] = $_POST['Fichas_2do'];
        $F[2] = $_POST['Fichas_3ro'];
        $I[0] = $_POST['Inasistencias_1ro'];
        $I[1] = $_POST['Inasistencias_2do'];
        $I[2] = $_POST['Inasistencias_3ro'];
        $O[0] = $_POST['Observaciones_1ro'];
        $O[1] = $_POST['Observaciones_2do'];
        $O[2] = $_POST['Observaciones_3ro'];
        $Comentario = $_POST['Comentario'];
        for($i = 0; $i < 3; $i++)
        {
            if ($P[$i] == NULL|| $F[$i] == NULL|| $I[$i] == NULL|| $O[$i] == NULL|| $Comentario == NULL)
        {
            $x = 1;
        }
        }
        if($Comentario == NULL)
        {
            $x = 1;
        }
        if($x == 1)
        {
            ?>
            <h1>Algun campo no ha sido completado</h1>
            <?php
        }
        else
        {
            include("db.php");
            for($i = 0; $i < 3; $i++)
            {
                $in[$i]  = "INSERT INTO info (Promedio, Fichas, Inasistencias, Observaciones, DNI, ID_Anualidad) values 
                ($P[$i], $F[$i], $I[$i], $O[$i], $DNI, $i+1)";
                $con[$i] =  $conexion -> query($in[$i]);
            }
            $var2 = "UPDATE alumnos SET Comentario = '$Comentario' where DNI = '$DNI'"; 
            $con4 = $conexion -> query($var2);
            ?>
            <h1> Informacion ingresada correctamente </h1>
            <?php
        }
            

mysqli_close($conexion);
?>