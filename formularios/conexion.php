<?php
/* creando conexion */
$server = "localhost:3307";/* nombre servidor  */
$username = "root";
$password = "";
$database = "base_de_datos_motonapp"; /* debes cambiar el nombre de la base de datos  */

/* aqui intentamos conectar a la base de datos  */
try {
  /* tenemos que llamar las variables y parametros creados */
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  /* mostrando error si no se conecta con por medio de $conn */
} catch (PDOException $e) {
/* con el metodo de e muestra el mensaje en pantalla */
  die("Connected failed: " .$e->getMessage() ); 

}

?>