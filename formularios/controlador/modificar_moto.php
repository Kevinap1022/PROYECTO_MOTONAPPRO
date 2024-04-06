<?php
/* si presiona el boton de modificar moto lo manda aqui  */
/* aqui colocamos si hizo la modifacion correctamente */
if (!empty($_POST["Envio_datos_moto"])) {
    if (!empty($_POST["marca_moto"]) and !empty($_POST["modelo_moto"]) and !empty($_POST["cilindraje_moto"]) and !empty($_POST["fecha_fabricacion"]) and !empty($_POST["tecnomecanica"]) and !empty($_POST["sincronizacion"]) and !empty($_POST["fecha_tecnomecanica"]) and !empty($_POST["Placa"]) and !empty($_POST["Numero_Poliza"]) and !empty($_POST["fecha_soat"]) ) {
        #si tienen datos hacemos lo siguiente 
        $id= $_POST["id"]; /* id que recojimos de modifcar_moto */
        $marca_moto= $_POST["marca_moto"]; 
        $modelo_moto= $_POST["modelo_moto"];
        $cilindraje_moto= $_POST["cilindraje_moto"];
        $fecha_fabricacion = $_POST["fecha_fabricacion"];
        $tecnomecanica= $_POST["tecnomecanica"];
        $sincronizacion= $_POST["sincronizacion"];
        $fecha_tecnomecanica = $_POST["fecha_tecnomecanica"];
        $Placa= $_POST["Placa"];
        $Numero_Poliza= $_POST["Numero_Poliza"];
        $fecha_soat= $_POST["fecha_soat"];

        /* modifar en base de datos, colocamos los nuevos valores en id(importante colocar where)  */
        $sql_1= $conexion->query(" update motos set marca_moto='$marca_moto',modelo_moto='$modelo_moto',cilindraje_moto='$cilindraje_moto',fecha_fabricacion='$fecha_fabricacion',tecnomecanica='$tecnomecanica', sincronizacion='$sincronizacion',fecha_tecnomecanica='$fecha_tecnomecanica',Placa='$Placa',Numero_poliza=$Numero_Poliza,fecha_soat='$fecha_soat' where id= $id  ");
        /* verificar si se ha modificado  */
        if ($sql_1==1) {
            header("location:Form_Registro_moto.php");
        } else {
            echo '<div class="alert alert-danger">Error al modificar producto </div>';
        }
        

    /* si hay un campo vacio muestra lo siguiente */
    }else{
        echo '<div class="alert alert-warning">Campos vacios</div>';
    }
}
?>