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



if(isset($_POST['submit'])){
    
    if(empty($nombre)){
      echo "<p class='error'>* Falta agregar el nombre del cliente</p>";            
    }

    if(is_numeric($nombre) || is_numeric($apellido_paterno) || is_numeric($apellido_materno)){
      echo "<p class='error'>* Los campos de nombre, apellido Paterno y apellido Materno deberan ser de texto</p>";
    }
  }

  if(isset($_POST['submit'])){
    if(empty($apellido_paterno)){
      echo "<p class='error'>* Agrega el apellido paterno</p>";            
    }
  }

  if(isset($_POST['submit'])){
    if(empty($apellido_materno)){
      echo "<p class='error'>* Agrega el apellido materno</p>";            
    }
  }

  if(isset($_POST['submit'])){
    if(empty($fecha_registro)){
      echo "<p class='error'>* Falta agregar la fecha de nacimiento</p>";            
    } else if($fecha_registro != $validacion_fecha ){
       echo "<p class='error'>* La fecha de nacimiento no esta especificada en el formato correcto (YYYY/MM/DD) </p>";
    }
  }


  if(isset($_POST['submit'])){
    if(empty($entidad_federativa)){
       echo "<p class='error'>* Falta agregar entidad federativa</p>";
    } else if(strlen($entidad_federativa) < 2 || strlen($entidad_federativa) > 2 ){
      echo "<p class='error'>*La entidad federativa solo debe tener 2 caracteres</p>";
    }

  }

  if(isset($_POST['submit'])){
    if(empty($sexo)){
      echo "<p class='error'>*Falta agregar el genero sexual del usuario</p>";
    } else if(strlen($sexo)<1 || strlen($sexo)>1){
      echo "<p class='error'>* El genero sexual del usuario debera ser H = Hombre ó M = Mujer</p>";
    }
  }



  if(isset($_POST['submit'])){
    if(empty($curp)){
      echo "<p class='error'>* Se requiere agregar el CURP</p>";            
    }
    if(strlen($curp) < 18 || strlen($curp) > 18){
        echo "<p class='error'>* La cantidad de digitos para el curp debe constar solo de 18 caracteres </p>";
    } else if(strlen($curp) == 18){
      header("Location: ../archivos_html/MAZM_Pag_Mantenimiento.html");
    }
  }

  if(isset($_POST['submit'])){
    if(empty($rfc)){
      echo "<p class='error'>* Se requiere agregar el RFC</p>";            
    } else if(strlen($rfc) > 13 || strlen($rfc) < 13 ){
        echo "<p class='error'>* El RFC debera tener exactamente 13 caracteres</p>";            
      }      
  } 
  
  ?>