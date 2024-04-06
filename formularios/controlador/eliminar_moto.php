<?php
/* aqui nos comunicamos con la pagina  */
/* colocamos el nombre de la variable  */
if (!empty($_GET["id"])) {
    $id= $_GET["id"];
    /* si se ha enviado el id, eliminamos el registro */
    /* puedes colocar cualquier nombre en la consulta sql en este caso es sql_2 */
    $sql= $conexion->query(" delete from motos where id= $id ");
    /* validamos si se ha eliminado o no  */
    if ($sql==1){
        echo '<div class="alert alert-success"> Moto eliminada correctamente</div>';
    } else{
        echo '<div class="alert alert-danger"> Error al eliminar campos </div>';
    }
}

/* ejecutamos el controlador desde la vista  */

?>