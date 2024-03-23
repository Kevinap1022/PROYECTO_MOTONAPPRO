<?php
#isset significa q la variable que se recibe esta vacia, entonces sale 
if (  !isset($_POST["Nombre_usuario"]) || !isset($_POST["Clave"]) || !isset($_POST["Cedula"])  ) exit();

include_once "conexion.php";

$Nombre_usuario  = $_POST["Nombre_usuario"];
$Clave           = $_POST["Clave"];
$Cedula          = $_POST["Cedula"]; 
$Direccion       = $_POST["Direccion"];
$Email           = $_POST["Email"]; 
$Telefono        = "0";
  


$sentencia = $base_de_datos->prepare("INSERT INTO usuarios(nombre, CorreoElectronico, Telefono,Contraseña,Ciudad) VALUES (?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$Nombre_usuario, $Email, $Telefono,$Clave,$Direccion]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if ($resultado === TRUE) 
   echo "Insertado correctamente";
else
  echo "Algo salió mal. Por favor verifica que la tabla! ";


?>