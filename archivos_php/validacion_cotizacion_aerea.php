<?php

$tipo_aeronave = $_POST["tipo_aeronave"];
$placa = $_POST["placa"];
$capacidad_pasajeros = $_POST['capacidad_pasajeros'];
$empresa_propietaria = $_POST["empresa_propietaria"];

    if(isset($_POST['submit'])){
        if(empty($tipo_aeronave)){
          echo "<p class='error'>* Agrega el tipo de transporte</p>";            
        }
    }

    if(isset($_POST['submit'])){
        if(empty($placa)){
          echo "<p class='error'>* Falto agregar la placa</p>";            
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
    if(empty($empresa_propietaria)){
      echo "<p class='error'>* Falto agregar la empresa propietaria</p>";            
    }
}
?>