<?php
    /*Validaciones para el modulo de cotizaciones terrestres*/
$tipo_transporte = $_POST["tipo_transporte"];
$placa = $_POST["placa"];
$capacidad_pasajeros = $_POST["capacidad_pasajeros"];
$anio_fabricacion = $_POST["anio_fabricacion"];
$empresa_propietaria = $_POST["empresa_propietaria"];


if(isset($_POST['submit'])){
  if(empty($tipo_transporte)){
    echo "<p class='error'>* Agrega la placa del vehiculo</p>";           
  }
}

if(isset($_POST['submit'])){
    if(empty($placa)){
      echo "<p class='error'>* Agrega la placa del vehiculo</p>";            
    }
  }

  if(isset($_POST['submit'])){
    if(empty($capacidad_pasajeros)){
      echo "<p class='error'>* Falto agregar la capacidad de pasajeros</p>";            
    } else {

      if($capacidad_pasajeros < 1 OR $capacidad_pasajeros > 80 ){
        echo "<p class='error'>* La capacidad de pasajeros esta por arriba o por debajo de los límites: menos de 1 pasajero ó  mayor a 80 pasajeros</p>";
      }
    }
}

  if(isset($_POST['submit'])){
    if(empty($anio_fabricacion)){
      echo "<p class='error'>* Agrega el año de fabricación</p>";            
    } else {
        if($anio_fabricacion < 2000 OR $anio_fabricacion > 2024){   
            echo "<p class='error'>* Solo se permiten números enteros entre 2000 y 2024.</p>";   
        }
    }
  }

  if(isset($_POST['submit'])){
    if(empty($empresa_propietaria)){
      echo "<p class='error'>* Agrega la empresa propietaria del vehiculo</p>";            
    }
  }

?>