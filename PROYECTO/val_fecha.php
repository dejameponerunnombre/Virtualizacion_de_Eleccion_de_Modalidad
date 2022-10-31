<?php
$inicio = mktime(0, 0, 0, 5, 1, 2022);
$ahora = time();

if($ahora > $inicio)
{
 include("login_alumno_eleccion.html");
}
else 
{
    include("mensaje-error.html");
}
?>