<?php

include "validaciones.php";

$tipo_transporte = $_POST["tipo_transporte"];
$placa = $_POST["placa"];
$capacidad_pasajeros = $_POST["capacidad_pasajeros"];
$anio_fabricacion = $_POST["anio_fabricacion"];
$empresa_propietaria = $_POST["empresa_propietaria"];


if(isset($_POST['enviar'])){
  MAZM_validacion_datos_transporte_terrestre($tipo_transporte,$placa,$capacidad_pasajeros,$anio_fabricacion,$empresa_propietaria);
  MAZM_insertar_registro_tbltranspterrestre($tipo_transporte, $placa, $capacidad_pasajeros, $anio_fabricacion, $empresa_propietaria);
}

if(isset($_POST['actualizar'])){
  MAZM_validacion_datos_transporte_terrestre($tipo_transporte,$placa,$capacidad_pasajeros,$anio_fabricacion,$empresa_propietaria);
  MAZM_actualizar_registro_tbltranspterrestre($tipo_transporte, $placa, $capacidad_pasajeros, $anio_fabricacion, $empresa_propietaria);  
}

if(isset($_POST['eliminar'])){
  MAZM_eliminacion_registro_tbltranspterrestre($placa); 
}




?>