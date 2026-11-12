<?php //inicio
  //Llamos al archivo de php donde esta la conexion con mysql
  require "conexion.php";
  // Creamos 3 variables y llamamos el post del formulario TURNOS
  $nom_turno = $_POST["nombre_turno"];
  $time_entrada = $_POST["hora_entrada"];
  $time_salida = $_POST["hora_salida"];
  echo "Nombre: " . $nom_turno ."<br>";
  echo "Entrada: " . $time_entrada ."<br>";
  echo "Salida: " . $time_salida ."<br>";

  $conexion->query("INSERT INTO turnos(nombre_turno,hora_entrada,hora_salida)
                   values('$nom_turno','$time_entrada','$time_salida')")
    
//salida ?> 