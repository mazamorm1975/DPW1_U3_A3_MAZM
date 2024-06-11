<?php
  
//Bloque para validación de entrada de datos en formulario transporte aereo    
function MAZM_validacion_datos_transporte_aereo($arg1, $arg2, $arg3, $arg4){
    
    if(isset($_POST['enviar'])){
        if(empty($arg1)){
          echo "<p class='error'>* Agrega el numero de serie de la aeronave</p>";            
        }
    }

    if(isset($_POST['enviar'])){
        if(empty($arg2)){
          echo "<p class='error'>* Falto agregar el modelo</p>";            
        }
    }

    if(isset($_POST['enviar'])){
      if(empty($arg3)){
        echo "<p class='error'>* Falto agregar la capacidad de asientos</p>";            
      } else {

        if($arg3 < 1 OR $arg3 > 80 ){
          echo "<p class='error'>* La capacidad de asientos esta por arriba o por debajo de los límites: menos de 1 pasajero ó  mayor a 80 pasajeros</p>";
        }
      }
  }

 
  if(isset($_POST['enviar'])){
    if(empty($arg4)){
      echo "<p class='error'>* Falto agregar la empresa propietaria</p>";            
    }
}
}

function MAZM_insertar_registro_tblavion($arg1,$arg2,$arg3,$arg4){

    if(isset($_POST['enviar'])){

        if(empty($arg1) || $arg1 != 10 ||
           empty($arg2) ||
           empty($arg3) || $arg3 < 1 || $arg3 > 80 ||
           empty($arg4)){
      
           echo "<p class='error'>*Algun dato no fue ingresado correctamente o esta vacio. Favor de verificar. Gracias</p>";
                  
      } else {
      
        $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
            
        $consulta = "INSERT INTO tblavion(numero_serie, modelo, capacidad_asientos, empresa_propietaria) 
                         VALUES('$arg1','$arg2',$arg3,'$arg4')";
          
        $resultado = mysqli_query($conn,$consulta);
          
        if($resultado){
          echo "Registro ingresado exitosamente en la base de datos";
        } 
      
        else {
          echo "No fue posible ingresar el registro en la base de datos";
        }
        mysqli_close($conn); 
      }
    }
    
   }

function MAZM_actualizar_registro_tblavion($arg1,$arg2,$arg3,$arg4){
        
if(isset($_POST['actualizar'])){
    if(empty($arg1)){
      echo "<p class='error'>* Agrega el numero de serie de la aeronave</p>";            
    }
  }
  
  if(isset($_POST['actualizar'])){
    if(empty($arg2)){
      echo "<p class='error'>* Falto agregar el modelo</p>";            
    }
  }
  
  if(isset($_POST['actualizar'])){
  if(empty($arg3)){
    echo "<p class='error'>* Falto agregar la capacidad de pasajeros</p>";            
  } else {
  
    if($arg3 < 1 OR $arg3 > 80 ){
      echo "<p class='error'>* La capacidad de asientos esta por arriba o por debajo de los límites: menos de 1 pasajero ó  mayor a 80 pasajeros</p>";
    }
  }
  }
  
  
  if(isset($_POST['actualizar'])){
    if(empty($arg4)){
      echo "<p class='error'>* Falto agregar la empresa propietaria</p>";            
    }
  }
  
  if(isset($_POST['actualizar'])){
  
  if(empty($arg1) ||
     empty($arg2) ||
     empty($arg3) || strlen($arg3) > 80 || strlen($arg3) < 1 ||
     empty($arg4)
     ){
  
     echo "<p class='error'>*Algun dato no fue ingresado correctamente o esta vacio. Favor de verificar. Gracias</p>";
            
  } else {
  
  $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
      
  $consulta = "UPDATE tblavion SET numero_serie='$arg1',modelo='$arg2', capacidad_asientos=$arg3, empresa_propietaria='$arg4' WHERE numero_serie ='$arg1'";
    
  $resultado = mysqli_query($conn,$consulta);
    
  if($resultado){
    echo "Registro Modificado exitosamente en la base de datos";
  } else {
    echo "No fue posible la modificación del registro en la base de datos";
  }
  mysqli_close($conn); 
  }
  }
  
}

function MAZM_eliminacion_registro_tblavion($arg1){
    //Borrado del registro
if(isset($_POST['eliminar'])){
    $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
        
    $consulta = "DELETE FROM tblavion WHERE numero_serie='$arg1'";
      
    $resultado = mysqli_query($conn,$consulta);
      
    if($resultado){
      echo "Registro eliminado exitosamente de la base de datos";
    } else {
      echo "No fue posible la eliminación del registro. Verifique con el administrador. Gracias.";
    }
    mysqli_close($conn);
    }
    
}


//Bloque para validación de entrada de datos en formulario transporte aereo
 
function MAZM_validacion_datos_transporte_terrestre($arg1,$arg2,$arg3,$arg4,$arg5){

if(isset($_POST['enviar'])){
    if(empty($arg1)){
      echo "<p class='error'>* Agrega el tipo de transporte</p>";           
    }
  }
  
  if(isset($_POST['enviar'])){
      if(empty($arg2)){
        echo "<p class='error'>* Agrega la placa del vehiculo</p>";            
      }
    }
  
    if(isset($_POST['enviar'])){
      if(empty($arg3)){
        echo "<p class='error'>* Falto agregar la capacidad de pasajeros</p>";            
      } else {
  
        if($arg3 < 1 OR $arg3 > 80 ){
          echo "<p class='error'>* La capacidad de pasajeros esta por arriba o por debajo de los límites: menos de 1 pasajero ó  mayor a 80 pasajeros</p>";
        }
      }
  }
  
  
    if(isset($_POST['enviar'])){
      if(empty($arg4)){
        echo "<p class='error'>* Agrega el año de fabricación</p>";            
      } else {
          if($arg4 < 2000 OR $arg4 > 2024){   
              echo "<p class='error'>* Solo se permiten números enteros entre 2000 y 2024.</p>";   
          }
      }
    }
  
    if(isset($_POST['enviar'])){
      if(empty($arg5)){
        echo "<p class='error'>* Agrega la empresa propietaria del vehiculo</p>";            
      }
    }
}

    function MAZM_insertar_registro_tbltranspterrestre($arg1,$arg2,$arg3,$arg4,$arg5){

        if(isset($_POST['enviar'])){

            if(empty($arg1) ||
            empty($arg2) ||
            empty($arg3) || strlen($arg3) > 80 || strlen($arg3) < 1 ||
            empty($arg4) ||
            empty($arg5)
            ){
            
            echo "<p class='error'>*Algun dato no fue ingresado correctamente o esta vacio. Favor de verificar. Gracias</p>";
                  
            } else {
            
            $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
            
            $consulta = "INSERT INTO tbltranspterrestre(tipo_transporte, placa, capacidad_pasajeros, anio_fabricacion, empresa_propietaria) 
                         VALUES('$arg1','$arg2',$arg3,'$arg4','$arg5')";
            
            $resultado = mysqli_query($conn,$consulta);
            
            if($resultado){
            echo "Registro ingresado exitosamente en la base de datos";
            } else {
            echo "No fue posible ingresar el registro en la base de datos";
            }
            mysqli_close($conn); 
            }
            }

    }


   function MAZM_actualizar_registro_tbltranspterrestre($arg1,$arg2,$arg3,$arg4,$arg5){

    //Bloque para actualización de datos de la cotización terrestre

if(isset($_POST['actualizar'])){
    if(empty($arg1)){
    echo "<p class='error'>* Agrega el tipo de transporte</p>";            
    }
    }
    
    if(isset($_POST['actualizar'])){
    if(empty($arg2)){
    echo "<p class='error'>* Falto agregar la placa</p>";            
    }
    }
    
    if(isset($_POST['actualizar'])){
    if(empty($arg3)){
    echo "<p class='error'>* Falto agregar la capacidad de pasajeros</p>";            
    } else {
    
    if($arg3 < 1 OR $arg3 > 80 ){
    echo "<p class='error'>* La capacidad de pasajeros esta por arriba o por debajo de los límites: menos de 1 pasajero ó  mayor a 80 pasajeros</p>";
    }
    }
    }
    
    if(isset($_POST['actualizar'])){
    if(empty($arg4)){
    echo "<p class='error'>* Falto agregar el año de fabricación</p>";            
    } else {
    if($arg4 < 2000 OR $arg4 > 2024){   
      echo "<p class='error'>* Solo se permiten números enteros entre 2000 y 2024.</p>";   
    }
    }
    }
    
    if(isset($_POST['actualizar'])){
    if(empty($arg5)){
    echo "<p class='error'>* Falto agregar la empresa propietaria</p>";            
    }
    }
    
    if(isset($_POST['actualizar'])){
    
    if(empty($arg1) ||
    empty($arg2) ||
    empty($arg3) || strlen($arg3) > 80 || strlen($arg3) < 1 ||
    empty($arg4) ||
    empty($arg5)
    ){
    
    echo "<p class='error'>*Algun dato no fue ingresado correctamente o esta vacio. Favor de verificar. Gracias</p>";
        
    } else {
    
    $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
    
    $consulta = "UPDATE tbltranspterrestre SET tipo_transporte='$arg1',placa='$arg2', capacidad_pasajeros=$arg3,anio_fabricacion='$arg4',empresa_propietaria='$arg5' WHERE placa ='$arg2'";
    
    $resultado = mysqli_query($conn,$consulta);
    
    if($resultado){
    echo "Registro Modificado exitosamente en la base de datos";
    } else {
    echo "No fue posible la modificación del registro en la base de datos";
    }
    mysqli_close($conn); 
    }
    }
   }

   function MAZM_eliminacion_registro_tbltranspterrestre($arg1){

    //Borrado del registro
    if(isset($_POST['eliminar'])){

    $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
    
    $consulta = "DELETE FROM tbltranspterrestre WHERE placa='$arg1'";
    
    $resultado = mysqli_query($conn,$consulta);
    
    if($resultado){
    echo "Registro eliminado exitosamente de la base de datos";
    } else {
    echo "No fue posible la eliminación del registro. Verifique con el administrador. Gracias.";
    }
    mysqli_close($conn);
    }
   }

   function MAZM_validacion_datos_cliente($arg1,$arg2,$arg3,$arg4,$arg5,$arg6,$arg7,$arg8){
      
    $validacion_fecha=date("Y-m-d", strtotime($arg4));


    if(empty($arg1)){
        echo "<p class='error'>*Falta agregar el nombre del cliente</p>";            
      }
  
      if(is_numeric($arg1) || is_numeric($arg2) || is_numeric($arg3)){
        echo "<p class='error'>* Los campos de nombre, apellido Paterno y apellido Materno deberan ser de texto</p>";
      }
    
    
      if(empty($arg2)){
        echo "<p class='error'>* Agrega el apellido paterno</p>";            
      }
    
  
      if(empty($arg3)){
        echo "<p class='error'>* Agrega el apellido materno</p>";            
      }
    
  
      if(empty($arg4)){
        echo "<p class='error'>* Falta agregar la fecha de nacimiento</p>";            
      } else if($arg4 != $validacion_fecha ){
         echo "<p class='error'>* La fecha de nacimiento no esta especificada en el formato correcto (YYYY-MM-DD) </p>";
      }
   
      if(empty($arg5)){
         echo "<p class='error'>* Falta agregar entidad federativa</p>";
      } else if(strlen($arg5) < 2 || strlen($arg5) > 2 ){
        echo "<p class='error'>*La entidad federativa solo debe tener 2 caracteres</p>";
      }
  

      if(empty($arg6)){
        echo "<p class='error'>*Falta agregar el genero sexual del usuario</p>";
      } else if(strlen($arg6)<1 || strlen($arg6)>1){
        echo "<p class='error'>* El genero sexual del usuario debera ser H = Hombre ó M = Mujer</p>";
      }
  
      
      if(empty($arg7)){
        echo "<p class='error'>* Se requiere agregar el RFC</p>";            
      } else if(strlen($arg7) > 13 || strlen($arg7) < 13 ){
          echo "<p class='error'>* El RFC debera tener exactamente 13 caracteres</p>";            
        }  

      if(empty($arg8)){
        echo "<p class='error'>* Se requiere agregar el CURP</p>";            
      }
      if(strlen($arg8) < 18 || strlen($arg8) > 18){
          echo "<p class='error'>* La cantidad de digitos para el curp debe constar solo de 18 caracteres </p>";
      } 
         
   }


   function MAZM_insertar_datos_tblcliente($arg1,$arg2,$arg3,$arg4,$arg5,$arg6,$arg7,$arg8){

     if(isset($_POST['registrar'])){

        if((empty($arg1)) ||
           empty($arg2) ||
           empty($arg3) ||
           empty($arg4) ||
           empty($arg5) ||
           empty($arg6) || 
           empty($arg7) || 
           empty($arg8) || strlen($arg8) != 18 ){
  
           echo "<p class='error'>*Algun dato no fue ingresado correctamente o esta vacio. Favor de verificar. Gracias</p>";
                  
      } else {
        
        $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
        
        $consulta = "INSERT INTO tblcliente(nombre, primer_apellido, segundo_apellido, fecha_registro, rfc_cliente, CURP_cliente,entidad_federativa, sexo,id_usuario) 
                     VALUES('$arg1','$arg2','$arg3','$arg4','$arg7','$arg8','$arg5','$arg6',1)";
      
        $resultado = mysqli_query($conn,$consulta);
      
        if($resultado){
          echo "Registro ingresado exitosamente en la base de datos";
        } else {
          echo "No fue posible ingresar el registro en la base de datos";
        }
        mysqli_close($conn);   
  
      }
  
    }               
      

   }

   //function consulta_datos_usuario($arg1){
function MAZM_consulta_datos_usuario($arg1){

if(isset($_POST['LDAP_usuario'])){
   
    $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");

    $query_admin = mysqli_query($conn, "SELECT * FROM usuario WHERE LDAP_Usuario = '$arg1'");
        
    if(mysqli_num_rows($query_admin) > 0){

        while($row = mysqli_fetch_array($query_admin))
        {
            $nombre_usuario = $row['nombre_usuario'];
            $ldap_usuario = $row['LDAP_Usuario'];
            $contrasena = $row['contrasena'];
            $id_usuario = $row['id_categoria_usuario'];
            
            echo "Nombre_Usuario:     ", "$nombre_usuario<br>";
            echo "LDAP:     ","$ldap_usuario<br>";
            echo "Contraseña:     " , "$contrasena<br>";
            echo "Id_Categoria:     ", "$id_usuario<br>";
            
        }     

    } else {
        echo "No se encontraron datos de este usuario.";
    }
    }
}

function MAZM_registrar_datos_admin($arg1,$arg2,$arg3,$arg4){

    if(isset($_POST['registrar'])){

        if((empty($arg1)) ||
           empty($arg2) ||
           empty($arg3) ||
           empty($arg4)){
  
           echo "<p class='error'>*Algun dato no fue ingresado correctamente o esta vacio. Favor de verificar. Gracias</p>";
                  
      } else {
        
        $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
        
        $consulta = "INSERT INTO usuario(nombre_usuario, LDAP_usuario, contrasena, id_categoria_usuario) 
                     VALUES('$arg1','$arg2','$arg3','$arg4')";
      
        $resultado = mysqli_query($conn,$consulta);
      
        if($resultado){
          echo "Registro ingresado exitosamente en la base de datos";
        } else {
          echo "No fue posible ingresar el registro en la base de datos";
        }
        mysqli_close($conn);   
  
      }
  
    }

}

function MAZM_validacion_datos_admin($arg1,$arg2,$arg3,$arg4){

   
        if(empty($arg1)){
          echo "<p class='error'>* Agrega el nombre del usuario</p>";            
        }
    

        if(empty($arg2)){
          echo "<p class='error'>* Agrega el LDAP</p>";            
        }
    

        if(empty($arg3)){
          echo "<p class='error'>* Agrega la contrasena</p>";            
        }
    
        if(empty($arg4)){
          echo "<p class='error'>* Agrega el id de la categoria</p>";            
        }
    
}

function MAZM_actualizar_datos_admin($arg1,$arg2,$arg3,$arg4){

    
    if(isset($_POST['actualizar'])){
    
    if(empty($arg1) ||
    empty($arg2) ||
    empty($arg3) ||
    empty($arg4)){
    
    echo "<p class='error'>*Algun dato no fue ingresado correctamente o esta vacio. Favor de verificar. Gracias</p>";
        
    } else {
    
    $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
    
    $consulta = "UPDATE usuario SET nombre_usuario='$arg1',LDAP_Usuario='$arg2', contrasena='$arg3', id_categoria_usuario=$arg4 WHERE LDAP_Usuario='$arg2'";
    
    $resultado = mysqli_query($conn,$consulta);
    
    if($resultado){
    echo "Registro Modificado exitosamente en la base de datos";
    } else {
    echo "No fue posible la modificación del registro en la base de datos";
    }
    mysqli_close($conn); 
    }
    }
    
}

function MAZM_eliminacion_datos_admin($arg3){

  //Borrado del registro
  if(isset($_POST['eliminar'])){

  $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
  
  $consulta = "DELETE FROM usuario WHERE LDAP_Usuario='$arg1'";
  
  $resultado = mysqli_query($conn,$consulta);
  
  if($resultado){
  echo "Registro eliminado exitosamente de la base de datos";
  } else {
  echo "No fue posible la eliminación del registro. Verifique con el administrador. Gracias.";
  }
  mysqli_close($conn);
  }
 }


 function MAZM_validacion_datos_destinos_nacionales($arg1,$arg2,$arg3){
 
    if(empty($arg1)){
      echo "<p class='error'>* Agrega el nombre del destino</p>";            
    
}

    if(empty($arg2)){
      echo "<p class='error'>* Falto agregar la actividad popular</p>";            
    }


  if(empty($arg3)){
    echo "<p class='error'>* Falta agregar la epoca sugerida</p>";            
  
  }
}

function MAZM_insertar_datos_nacionales($arg1,$arg2,$arg3){

  
  if(isset($_POST['registrar'])){

    if((empty($arg1)) ||
       empty($arg2) ||
       empty($arg3)){

       echo "<p class='error'>*Algun dato no fue ingresado correctamente o esta vacio. Favor de verificar. Gracias</p>";
              
  } else {
    
    $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
    
    $consulta = "INSERT INTO tbltipodestino(Nombre_destino, Actividades_populares, Epoca_sugerida) 
                 VALUES('$arg1','$arg2','$arg3')";
  
    $resultado = mysqli_query($conn,$consulta);
  
    if($resultado){
      echo "Registro ingresado exitosamente en la base de datos";
    } else {
      echo "No fue posible ingresar el registro en la base de datos";
    }
    mysqli_close($conn);   

  }

}

}

function MAZM_validacion_datos_destinos($arg1,$arg2,$arg3,$arg4,$arg5,$arg6,$arg7,$arg8,$arg9){

   
  if(empty($arg1)){
    echo "<p class='error'>* Falta ingresar el tipoDestino</p>";            
  
}

  if(empty($arg2)){
    echo "<p class='error'>* Falto agregar el id Avion 1</p>";            
  }


if(empty($arg3)){
  echo "<p class='error'>* Falto agregar el id Avion 2</p>";           

}

if(empty($arg4)){
  echo "<p class='error'>* Falto agregar el id de transporte terrestre 1</p>";           

}

if(empty($arg5)){
  echo "<p class='error'>* Falto agregar el id de transporte terrestre 2</p>";           

}


if(empty($arg6)){
  echo "<p class='error'>* Falto agregar el pais</p>";           

}


if(empty($arg7)){
  echo "<p class='error'>* Falto agregar la reseña</p>";           

}


if(empty($arg8)){
  echo "<p class='error'>* Falto agregar las coordenadas</p>";           

}

if(empty($arg9)){
  echo "<p class='error'>* Falto agregar la imagen</p>";           

}

}
 
function MAZM_insercion_datos_destinos($arg1,$arg2,$arg3,$arg4,$arg5,$arg6,$arg7,$arg8, $arg9){

  /*   

 //$arg1,$arg2,$arg3,$arg4,$arg5,$arg6,$arg7,$arg8
  if(isset($_POST['enviar'])){

    if(empty($arg1) ||
       empty($arg2) ||
       empty($arg3) ||
       empty($arg4) ||
       empty($arg5) ||
       empty($arg6) ||
       empty($arg7) ||
       empty($arg8) ||
       empty($arg9) ||
       empty($arg2) ||
       empty($arg3)){

       echo "<p class='error'>*Algun dato no fue ingresado correctamente o esta vacio. Favor de verificar. Gracias</p>";
              
  } else {
    
    $conn = mysqli_connect("localhost", "root", "#Cu213lona1993", "dpw1_u2_a1_mazm");
    
    $consulta = "INSERT INTO tbldestino(id_tipodestino, id_avion1, id_avion2, id_transpterrestre1, id_transpterrestre2, pais, resena, coordenadas, imagen) 
                 VALUES($arg1,$arg2,$arg3,$arg4,$arg5,'$arg6','$arg7','$arg8',$imagenFoto)";
  
    $resultado = mysqli_query($conn,$consulta);
  
    if($resultado){
      echo "Registro ingresado exitosamente en la base de datos";
    } else {
      echo "No fue posible ingresar el registro en la base de datos";
    }
    mysqli_close($conn);   

  }
  }
*/

}
 ?>