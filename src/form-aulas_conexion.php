<?php //inicio
  //Llamos al archivo de php donde esta la conexion con mysql
  require "conexion.php";
  // Creamos 3 variables y llamamos el post del formulario TURNOS
  $c_a = $_POST["codigo_aula"];
  $pa = $_POST["pabellon"];
  $ti_a = $_POST["tipo_aula"];
  $conexion->query("INSERT INTO aulas(codigo_aula,pabellon,tipo)
                   values('$c_a','$pa','$ti_a')")
//salida ?> 