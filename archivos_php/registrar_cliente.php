<?php
    $nombre=$_POST['nombre'];
    $apellido_paterno=$_POST['apellido_paterno'];
    $apellido_materno=$_POST['apellido_materno'];
    $fecha_registro=$_POST['fecha_nacimiento'];
    $validacion_fecha=date("Y-m-d", strtotime($fecha_registro));
    $entidad_federativa=$_POST['entidad_federativa'];
    $curp=$_POST['curp'];
    $rfc=$_POST['rfc'];
    $sexo=$_POST['sexoHM'];

                      
        $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
      
        $consulta = "INSERT INTO tblcliente(nombre, primer_apellido, segundo_apellido, fecha_registro, rfc_cliente, CURP_cliente,entidad_federativa, sexo,id_usuario) 
                     VALUES('$nombre','$apellido_paterno','$apellido_materno','$validacion_fecha','$rfc','$curp','$entidad_federativa','$sexo',1)";
      
        $resultado = mysqli_query($conn,$consulta);
      
        if($resultado){
          echo "Registro ingresado exitosamente en la base de datos";
        } else {
          echo "No fue posible ingresar el registro en la base de datos";
        }
        mysqli_close($conn);    
?>