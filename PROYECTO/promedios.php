
<html>
    <body>
    <?php
include("db.php");

//$nombre = "SELECT Nombre FROM informacion_personal_alumnos";
//$DNI = "SELECT DNI FROM informacion_personal_alumnos";
//$CUIL = "SELECT CUIL FROM informacion_personal_alumnos";
//$Escuela = "SELECT Escuela FROM informacion_personal_alumnos";
//$Curso = "SELECT Curso FROM informacion_personal_alumnos";
$consultas = "SELECT * FROM informacion_personal_alumnos";
"INSERT into datos_alumnos (Nombre, DNI, CUIL, Escuela, Curso) Values ($nombre, $DNI, $CUIL, $Escuela, $Curso)";
//mysqli_query($conexion, $nombre, $DNI);
//mysqli_query($CUIL, $Escuela, $Curso);
$resultado = mysqli_query($conexion, $consultas);
?>
        <table border = 1>
            <?php
            while($rows = mysql_fetch_assoc($resultado))
            {
                ?>
            <tr>
                <td><?php echo $rows.[consultas]; ?></td>
                <td><?php echo $rows.[Nombre]; ?></td>
                <td><?php echo $rows.[Nombre]; ?></td>
                <td><?php echo $rows.[Nombre]; ?></td>
                <td><?php echo $Escuela ?></td>
                <td><?php echo $Curso ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>