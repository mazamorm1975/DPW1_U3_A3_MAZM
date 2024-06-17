<?php

include "validaciones.php";
//require("conexion.php");


//Variables para campos de la tabla tbldestinos
$id_tipodestino = $_POST['tipo_destino'];
$id_avion1 = $_POST['avion1'];
$id_avion2 = $_POST['avion2'];
$id_transpterrestre1 = $_POST['transporte1'];
$id_transpterrestre2 = $_POST['transporte2'];
$pais=$_POST['pais'];
$resena=$_POST['resena'];
$coordenadas=$_POST['coordenadas'];
$imagen=$_POST['imagen'];
//$archivo_imagen = $_FILES['imagen']['name'];
//$tipo_imagen = $_FILES['imagen']['type'];
//$tamagno_imagen = $_FILES['imagen']['size'];
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "#Cu213lona1993";
$dbname = "dpw1_u2_a1_mazm";

if(isset($_POST['enviar'])){

  
    MAZM_validacion_datos_destinos($id_tipodestino,$id_avion1,$id_avion2,$id_transpterrestre1,$id_transpterrestre2,$pais,$resena,$coordenadas,$imagen);

    //Validamos el tamaño de la imagen y restrigimos a 2000000 bytes que equivale a no mas de 2 MB
/*
    if($tamagno_imagen <= 10000000){

    //Se valida que el archivo solo contenga imagenes tipo: jpg, jpeg, png y gif
    if($tipo_imagen =="image/jpeg" || $tipo_imagen =="image/png" || $tipo_imagen =="image/gif") {  

    /*La siguiente linea se agrega en caso de querer guardar las imagenes en una carpeta dentro del proyecto
    * (no recomendado)
    * $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'../assets/images/';  
    /*
    * La siguiente linea se agrega en caso de que se desee subir la imagen al servidor web: Xammp, Wamp, etc.
    * $carpeta_destino =$_SERVER['DOCUMENT_ROOT'].'/img/';
    *
    * La siguente linea mueve la imagen del directorio temporal al directorio escogido
    * move_uploaded_file($_FILES['imagen']['tmp_name'] , $carpeta_destino.$archivo_imagen);
    */    
/*
    } else {

        echo "Solo se pueden subir imagenes en formato: jpeg, png o gif";

    }
    } else {

        echo "El tamaño de la imagen excede el tamaño maximo permitido";
    }

*/   

    $conexion = mysqli_connect($dbhost,$dbuser,$dbpass);

    if(mysqli_connect_errno()){
        echo "Fallo en la conexión con la base de datos dpw1_u2_a1_mazm";
        exit();
    }

    mysqli_select_db($conexion, $dbname) or die("No se encuentra la BBDD");

    mysqli_set_charset($conexion,"utf-8");

    /* el siguiente bloque se codifico para efecto de serialización de la imagen, es decir convertirla a bytes    
    $archivo_seleccionado = fopen($carpeta_destino . $archivo_imagen , "r");

    $contenido = fread($archivo_seleccionado, $tamagno_imagen);

    $contenido = addslashes($contenido);

    fclose($archivo_seleccionado);
*/
    
    $sql = "INSERT INTO tbldestino(id_tipodestino, id_avion1, id_avion2,id_transpterrestre1, id_transpterrestre2,pais, resena, coordenadas, imagen_destino) 
            VALUES($id_tipodestino,$id_avion1,$id_avion2,$id_transpterrestre1,$id_transpterrestre2,'$pais','$resena','$coordenadas','$imagen')";

    //$sql = "UPDATE tbldestino SET imagen_destino='$contenido' WHERE id_destino = 1";

    $resultado = mysqli_query($conexion, $sql);

    if(mysqli_affected_rows($conexion) > 0){
      echo "Se ha insertado el registro en la base de datos de manera exitosa.";
    } else {
      echo "No se ha podido insertar el registro";
    }

  }

?>