<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Turnos</title>
</head>
<body>
    <form action="form-turnos_conexion.php" method="POST">
        <label for="n_t">Nombre del turno:</label>
        <input type="text" name="nombre_turno"> <br>

        <label for="h_e">Hora de entrada:</label>
        <input type="time" name="hora_entrada"> <br>

        <label for="h_s">Hora de salida:</label>
        <input type="time" name="hora_salida"> <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>