<?php
        session_start();
        include("db.php");
        $DNI = $_SESSION['DNI'];
        $anio1[0] = $_POST['Promedio_1ro'];
        $anio2[0] = $_POST['Promedio_2do'];
        $anio3[0] = $_POST['Promedio_3ro'];
        $anio1[1] = $_POST['Fichas_1ro'];
        $anio2[1] = $_POST['Fichas_2do'];
        $anio3[1] = $_POST['Fichas_3ro'];
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
        $h = 2;
        for($i = 0; $i <= 3; $i++)
        {
            if ($anio1[$i] == NULL)
            {
                $anio1[$i] = $filas1[$h]; 
            }
            if ($anio2[$i] == NULL)
            {
                $anio2[$i] = $filas2[$h]; 
            }
            if ($anio3[$i] == NULL)
            {
                $anio3[$i] = $filas3[$h]; 
            }
            $h++;
        }
        $in[0] = "UPDATE info SET Prom = '$anio1[0]', Fichas = '$anio1[1]', Inasistencias= '$anio1[2]', Observaciones= '$anio1[3]' where DNI = '$DNI' AND Anio = 1";
        $in[1] = "UPDATE info SET Prom = '$anio2[0]', Fichas = '$anio2[1]', Inasistencias= '$anio2[2]', Observaciones= '$anio2[3]' where DNI= '$DNI' and Anio = 2";
        $in[2] = "UPDATE info SET Prom = '$anio3[0]', Fichas = '$anio3[1]', Inasistencias= '$anio3[2]', Observaciones= '$anio3[3]' where DNI= '$DNI' and Anio = 3";
        $PT = ($anio1[0] + $anio2[0] + $anio3[0])/3;
        $FT = $anio1[1] + $anio2[1] + $anio3[1];
        $IT = $anio1[2] + $anio2[2] + $anio3[2];
        $OT = (int)$anio1[3] + (int)$anio2[3] + (int)$anio3[3];

        for($i = 0; $i < 3; $i++)
        { 
            $conexion -> query($in[$i]);
        }
        $var2 = "UPDATE total SET Comentario = '$Comentario' where DNI = '$DNI'"; 
        $conexion -> query($var2);
        $var3="UPDATE total SET PromedioST='$PT', FichasT='$FT', ObservacionesT='$OT', InasistenciasT='$IT' WHERE DNI='$DNI'";
        $x = $conexion -> query($var3);
        $x = 10;
        $_SESSION['x'] = $x;
        include("validacion_de_DNI.php");
?>