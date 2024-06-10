<?php
    include "validaciones.php";

    $LDAP_usuario = $_POST['LDAP_usuario'];

   if(isset($_POST['consultar'])){

    MAZM_consulta_datos_usuario($LDAP_usuario);
  
}
    
?>