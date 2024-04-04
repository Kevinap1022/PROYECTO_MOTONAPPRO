<?php 
 /* si el boton fue presionado voy a validar si el usuario registro todos los campos  */
if (!empty($_POST["registro"])) {
    /* validando que si los datos estan vacios le enviamos mensaje de advertencia  */
    if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["usuario"]) or empty($_POST["correo"]) or empty($_POST["celular"]) or empty($_POST["direccion"]) or empty($_POST["contraseña"])  ) {
        echo '<div class="alerta">Uno de los campos esta vacio</div>';
    
    } else{
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $usuario=$_POST["usuario"];
        $correo=$_POST["correo"];
        $celular=$_POST["celular"];
        $direccion=$_POST["direccion"];
        $contraseña=$_POST["contraseña"];
        /* hacemos consulta a la base de datos con sql  */
        $sql= $conexion->query(" insert into usuarios(Nombres,Apellidos,Nombre_usuario,Correo,Celular,Direccion,Contraseña)values('$nombre','$apellido','$usuario','$correo','$celular','$direccion','$contraseña') ");
        /* base de datos responde con 1(se ejecuto bien ) o 0(erro) */
        if ($sql==1){
            echo '<div class="success">Usuario registrado correctamente</div>';
        } else {
            /* si no es 1 ha habido un error o no se ha registrado el usuario  */
            echo '<div class="alerta">error al registrar</div>';

        }
        
    }

}

?>