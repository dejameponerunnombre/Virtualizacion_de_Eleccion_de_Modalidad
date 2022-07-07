<?php
$inicio = mktime(0, 0, 0, 5, 1, 2022);
$final =  mktime(0, 0, 0, 10, 15, 2022);
$ahora = time() ;

if($ahora < $final and $ahora > $inicio)
{
 include("login_alumno_eleccion.html");
}
else
{
    include("mensaje-error.html");
}
?>