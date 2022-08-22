<?php
        echo "<link rel=stylesheet href=../PROYECTO/footer.css>";
        echo "<link rel=stylesheet href=../PROYECTO/custom.css>";
        session_start();
        include("db.php");
        $x = 0;
        $PT = 0;
        $FT = 0;
        $IT = 0;
        $OT = 0;
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
                $in[$i]  = "INSERT INTO info (Prom, Fichas, Inasistencias, Observaciones, DNI, Anio) values 
                ($P[$i], $F[$i], $I[$i], $O[$i], $DNI, $i+1)";
                $con[$i] =  $conexion -> query($in[$i]);
                $PT += $P[$i];
                $FT += $F[$i];
                $IT += $I[$i];
                $OT += $O[$i];
            }
            $PromT = $PT / 3;
            $var2 = "INSERT INTO total (PromediosT, FichasT, InasistenciasT, ObservacionesT, DNI, Comentario) values 
            ($PromT, $FT, $IT, $OT, $DNI, $Comentario)";
            $con4 = $conexion -> query($var2);
            $x = 10;
            $_SESSION['x'] = $x;
            include("form-ingreso.php");
        }
            

mysqli_close($conexion);
?>