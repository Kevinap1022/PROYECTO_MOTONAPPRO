<?php
/* SI EL USUARIO PRESIONA EL BOTON DE REGISTRAR QUE HACEMOS?  */
if (!empty($_POST["Envio_datos_moto"])){
    /* validamos los datos osea que halla ingresado todos los campos  */
    /* colocamos el name */
    if (!empty($_POST["marca_moto"]) and !empty($_POST["modelo_moto"]) and !empty($_POST["cilindraje_moto"]) and !empty($_POST["fecha_fabricacion"]) and !empty($_POST["tecnomecanica"]) and !empty($_POST["sincronizacion"]) and !empty($_POST["fecha_tecnomecanica"]) and !empty($_POST["Placa"]) and !empty($_POST["Numero_Poliza"]) and !empty($_POST["fecha_soat"])) {
        /* si el usuario ingresa los datos los almacenamos */
        $marca_moto=$_POST["marca_moto"];
        $modelo_moto=$_POST["modelo_moto"];
        $cilindraje_moto=$_POST["cilindraje_moto"];
        $fecha_fabricacion=$_POST["fecha_fabricacion"];
        $tecnomecanica=$_POST["tecnomecanica"];
        $sincronizacion=$_POST["sincronizacion"];
        $fecha_tecnomecanica=$_POST["fecha_tecnomecanica"];
        $Placa=$_POST["Placa"];
        $Numero_Poliza=$_POST["Numero_Poliza"];
        $fecha_soat=$_POST["fecha_soat"];

        $sql_1 = $conexion->query("insert into motos(marca_moto,modelo_moto,cilindraje_moto,fecha_fabricacion,tecnomecanica,sincronizacion,fecha_tecnomecanica,Placa,Numero_poliza,fecha_soat)values('$marca_moto','$modelo_moto','$cilindraje_moto','$fecha_fabricacion','$tecnomecanica','$sincronizacion','$fecha_tecnomecanica','$Placa','$Numero_Poliza','$fecha_soat')");
        if ($sql_1==1) {
            echo '<div class="alert alert-success">Moto registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }
        
    } else{
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
    


}

?>