<?php

include "validaciones.php";

$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$fecha_registro=$_POST['fecha_nacimiento'];
$validacion_fecha=date("Y-m-d", strtotime($fecha_registro));
$entidad_federativa=$_POST['entidad_federativa'];
$curp=$_POST['curp'];
$rfc=$_POST['rfc'];
$sexo=$_POST['sexoHM'];


if(isset($_POST['registrar'])){
  MAZM_validacion_datos_cliente($nombre, $apellido_paterno, $apellido_materno, $fecha_registro,$entidad_federativa,$sexo,$rfc,$curp);
  MAZM_insertar_datos_tblcliente($nombre, $apellido_paterno, $apellido_materno, $fecha_registro,$entidad_federativa,$sexo,$rfc,$curp);
} 

  ?>