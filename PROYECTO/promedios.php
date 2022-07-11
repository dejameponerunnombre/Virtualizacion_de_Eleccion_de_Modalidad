<?php
$var = "SELECT PromediosT FROM total where DNI = $DNI[0] order by total.PromediosT DESC";
$conn = $conexion -> query($var);
$Prom = $conn ->fetch_array();
?>