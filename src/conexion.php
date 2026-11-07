<?php
// conexion.php
$host     = "host.docker.internal";
$usuario  = "root";
$password = "mipassword";
$base     = "colegio_asistencia_db";
$puerto   = 3307;

try {
    $conexion = new mysqli($host, $usuario, $password, $base, $puerto);
    $conexion->set_charset("utf8mb4");
} catch (mysqli_sql_exception $e) {
    die("Error de conexión: " . $e->getMessage());
}
