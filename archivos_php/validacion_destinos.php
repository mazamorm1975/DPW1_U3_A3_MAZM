<?php

include "validaciones.php";

//Variables para destinos tanto nacionales como internacionales
 $nombre_destino = $_POST['nombre_destino'];
 $actividades_populares = $_POST['actividades_populares'];
 $epoca_sugerida = $_POST['epoca_sugerida'];


if(isset($_POST['registrar'])){
  MAZM_validacion_datos_destinos_nacionales($nombre_destino,$actividades_populares, $epoca_sugerida);
  MAZM_insertar_datos_nacionales($nombre_destino,$actividades_populares, $epoca_sugerida);
}





?>