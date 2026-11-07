<?php
require_once 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $codigo_aula = $_POST["codigo_aula"];
    $pabellon    = $_POST["pabellon"];
    $tipo        = $_POST["tipo"];

    $conexion->query("INSERT INTO aulas (codigo_aula, pabellon, tipo)
                      VALUES ('$codigo_aula', '$pabellon', '$tipo')");

    echo "Aula registrada correctamente.";
}
?>
