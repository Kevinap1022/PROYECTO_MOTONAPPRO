<?php    
   include "conexion.php";
 // usuario esta lo pasa a la pagina de acceso y si no lo encuentra 
//   mosi elstrara un mensaje  o lo puede enviar a alguna pagina que ustedes hagan 

   $login_usuario  = $_POST["nombre_de_usuario"];
   $login_password = $_POST["password"];

   $sql    = "select * from usuarios where nombre= '$login_usuario' and Contraseña= '$login_password'  ";
   $result = $base_de_datos->query($sql);


   if ($result->num_rows > 0) {
      header('Location: formulario_registro.html');    
   } else {
      echo "Usuario No registrado! ";       
   }
   


  // header('Location: RegistarPersona.html?user='.$login_usuario);
?>

