<?php
$host = "localhost";
$usuario = "a25campracar_digisos";
$contrasenia = "D1gisosdos";
$base_de_datos = "videojuegos";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;