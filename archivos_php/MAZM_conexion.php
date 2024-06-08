<?php
  //Cabecera de variables para entablar conexión con la base de datos.
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "#Cu213lona1993";
 $dbname = "dpw1_u2_a1_mazm";
 $nombre = $_POST["txtusuario"];
 $password = $_POST["txtpassword"];
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if(!$conn){
    die("La conexion fue rechazada".mysqli_connect_error());
 }
 
 /*función que verifica si existe un indice dentro del arreglo, si existe manda llamar a la función
 *login_usuario que se encarga de verificar el LDAP,la contraseña y tipo de usuario ya sea cliente
 *o administrador en la base de datos
 */

 if(array_key_exists('button1', $_POST)) { 
   login_usuario($nombre, $password, $conn); 
} 

//Función que realiza el query para validar información contra la base de datos en la tabla usuarios.
function login_usuario($arg1, $arg2, $conn){
 
 $query_admin = mysqli_query($conn, "SELECT * FROM usuario  WHERE LDAP_Usuario = '$arg1' and contrasena ='$arg2' and id_categoria_usuario = '2'");
 $nr = mysqli_num_rows($query_admin);

 $query_cliente = mysqli_query($conn, "SELECT * FROM usuario  WHERE LDAP_Usuario = '$arg1' and contrasena ='$arg2' and id_categoria_usuario ='1'");
 $nr2 = mysqli_num_rows($query_cliente);


 if($nr == 1){

    header("Location: ../archivos_html/MAZM_Seccion_CRUDS_Usuario.html");
    echo "Bienvenido: " .$arg2;

 } else if($nr2 == 1){

   header('Location: ../archivos_html/MAZM_Menu_Principal.html');
   echo "Bienvenido: " .$arg2;

} else if($nr == 0 || $nr2 == 0){
   echo "No se encontro a este usuario en la base de datos";
}

}

/*
if($nombre == 'admin_ZMM' && $password == 'ES1821008613'){

      header("Location: ../archivos_html/MAZM_Seccion_CRUDS_Admin.html");
     # echo "Bienvenido: " .$nombre;
  
   } 
   
   if($nombre == 'cliente_ZMM' && $password == 'ES1821008613'){
  
     header("Location: ../archivos_html/MAZM_Menu_Principal.html");
     #echo "Bienvenido: " .$nombre;
  
  } else {
     echo "No se encontro a este usuario en la base de datos";
  }
*/

  

?>