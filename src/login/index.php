<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión | "TudeTi-Nombre" </title>
</head>
<style>
    body{
        margin:0;   /* eliminamos los margenes de los lados */
        min-height: 100vh; /* minimo de alto de 100 view height*/
        display: flex; /* Alteramos o modificamos los bordes o los lados*/
        justify-content: center;
        align-items: center;
    }
    form{ padding: 30px; border: 1px solid #000; }
</style>
<body>
    <form action="conexionLogin.php" method="POST">
        <label for="">Correo Electronico o Usuario</label> <br>
        <input type="text" name="user"> <br><br>
        <label for="">Contraseña</label> <br>
        <input type="password" name="pass"> <br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>

</html>
