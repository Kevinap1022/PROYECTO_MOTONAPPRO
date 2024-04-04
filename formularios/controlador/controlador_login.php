<?php 
/* SI NO ESTA VACIO LO QUE ENVIO EL BOTON_USUARIO EJECUTARA TODO LO SIGUIENTE */
if (!empty($_POST["boton_usuario"])){
    /* verifiquemos si existen o no existen los datos  */
    if (empty($_POST["usuario"]) and empty($_POST["contraseña"])  ) {
        echo '<div class="alerta">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        /* una vez que envie los datos los vamos a guardar, estos los verificaremos */
        $usuario =$_POST["usuario"];
        $contraseña =$_POST["contraseña"];
        /* HACEMOS CONSULTA A BASE DE DATOS   */
        $sql_1 = $conexion->query("select * from usuarios where Nombre_usuario='$usuario' and Contraseña='$contraseña' ");
        /* si el usuario existe trae todos los datos y almacena en sql_1 */
        /* si el usuario existe manda a pagina de inicio  */
        if ($datos=$sql_1->fetch_object()) {
            header("location:Form_Registro_moto.php");
        } else {
            echo '<div class="alerta">ACESSO DENEGADO</div>';
        }
        /* colocamos los datos verdaderos de la base de datos para que no salga error  */

    }
    
}

?>