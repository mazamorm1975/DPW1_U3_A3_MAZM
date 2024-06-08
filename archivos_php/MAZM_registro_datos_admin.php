<?php

    include "validaciones.php";

    $nombre_usuario = $_POST['nombre_usuario'];
    $LDAP_usuario = $_POST['LDAP_usuario'];
    $contrasena = $_POST['contrasena'];
    $id_categoria = $_POST['id_categoria'];

    if(isset($_POST['registrar'])){
        MAZM_validacion_datos_admin($nombre_usuario,$LDAP_usuario,$contrasena,$id_categoria);
        MAZM_registrar_datos_admin($nombre_usuario,$LDAP_usuario, $contrasena, $id_categoria);
    }

    if(isset($_POST['actualizar'])){
        MAZM_validacion_datos_admin($nombre_usuario,$LDAP_usuario,$contrasena,$id_categoria);
        MAZM_actualizar_datos_admin($nombre_usuario,$LDAP_usuario, $contrasena, $id_categoria);
    }

    if(isset($_POST['eliminar'])){
        MAZM_eliminacion_datos_admin($LDAP_usuario);
    }
?>