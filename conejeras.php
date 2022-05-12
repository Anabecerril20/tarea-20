<?php

$conectarBD=@mysqli_connect("localhost","root","","bancol4");

if (!$conectarBD) {
    die("No hay conexion de la conejera");
} else {
    echo "Conexion exitosa";
}



?>
