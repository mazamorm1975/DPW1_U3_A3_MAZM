<?php

include "validaciones.php";

//variables para datos de cotización aerea
$numero_serie = $_POST['numero_serie'];
$modelo = $_POST['modelo'];
$capacidad_asientos = $_POST['capacidad_asientos'];
$empresa_propietaria = $_POST['empresa_propietaria'];


//Se invoka a función que valida si los campos NO estan vacios
if(isset($_POST['enviar'])){
  MAZM_validacion_datos_transporte_aereo($numero_serie, $modelo, $capacidad_asientos, $empresa_propietaria);
  MAZM_insertar_registro_tblavion($numero_serie,$modelo,$capacidad_asientos, $empresa_propietaria);
  
}

if(isset($_POST['actualizar'])){
  MAZM_validacion_datos_transporte_aereo($numero_serie, $modelo, $capacidad_asientos, $empresa_propietaria);
  MAZM_actualizar_registro_tblavion($numero_serie,$modelo,$capacidad_asientos,$empresa_propietaria);
}

if(isset($_POST['eliminar'])){
  MAZM_eliminacion_registro_tblavion($numero_serie);
}


?>