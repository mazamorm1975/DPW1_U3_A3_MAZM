<?php
 $nombre_destino=$_POST['nombre_destino'];
 $actividades_populares=$_POST['actividades_populares'];
 $epoca_sugerida=$_POST['epoca_sugerida'];

 //Bloque para validación de entrada de datos y registro en la base de datos
 if(isset($_POST['registrar'])){
    if(empty($nombre_destino)){
      echo "<p class='error'>* Se requiere agregar destino</p>";            
    }
}

//Bloque para validación de entrada de datos y registro en la base de datos
if(isset($_POST['registrar'])){
    if(empty($actividades_populares)){
      echo "<p class='error'>* Agrega el tipo de actividad</p>";            
    }
}


//Bloque para validación de entrada de datos y registro en la base de datos
if(isset($_POST['registrar'])){
    if(empty($epoca_sugerida)){
      echo "<p class='error'>* Agrega la epoca sugerida</p>";            
    }
}


?>