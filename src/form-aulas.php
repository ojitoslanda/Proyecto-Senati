<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Turnos</title>
</head>
<body>
    <form action="form-aulas_conexion.php" method="POST">
        <label for="c_a">Codigo Aula:</label>
        <input type="text" name="codigo_aula"> <br>

        <label for="p">Pabellón:</label>
        <input type="text" name="pabellon"> <br>
        <!-- 
        <label for="t_a">Tipo aula:</label>
        <input type="text" name="tipo_aula"> <br> 
        -->
        <label for="t_a">Tipo aula:</label>
        <select name="tipo_aula">
            <option value="lab_com">Laboratiorio de Computo</option>
            <option value="tal">Taller</option>
            <option value="teo">Teorica</option>
            <option value="mate">Matemática</option>
            <option value="ept">EPT</option>
        </select> 
        <input type="submit" value="Enviar">
    </form>
</body>
</html>