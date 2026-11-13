<?php //Inicio
//Llamamos a la conexion con mysql
require 'conexion.php';

//Almacenamos dentro de las variables.
$user = trim($_POST['user']);  //Trim() eliminamos espacios de ambos lados
$pass = trim($_POST['pass']); //Trim() eliminamos espacios de ambos lados

$encontrados = false; //Boolean (1,0) - 1 = True , 0 = False
$mensaje = "";

$sql = "SELECT usuario,clave FROM usuarios"; //Consultamos la tabla USUARIOS
$resultado = $conexion->query($sql); //Ejecutamos el codigo SQL
while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
    if($fila['usuario'] == $user){
        $mensaje = "¡El usuario correcto!";
            if($fila['clave'] == $pass){
                $mensaje = "¡La contraseña correcta!";
                session_start(); //creamos una sesion
                $encontrados = true;
            }else{
                $mensaje = "¡La contraseña incorrecta!";
            }
    }else{
         $mensaje = "¡El usuario incorrecto!";
    }
    //print_r($fila); //para ver nada mas, si funciona o no
}
if($encontrados == true){
    header("Location: dashboard.php");
}else{
    header("Location: index.php");
}

//Cierre ?>
