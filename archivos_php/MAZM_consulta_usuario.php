<?php
    include "validaciones.php";

    $id_usuario = $_POST['id_usuario'];

   if(isset($_POST['registrar'])){

    MAZM_consulta_datos_usuario($id_usuario);
  
}
    
?>