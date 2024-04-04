<?php

require('fpdf186/fpdf.php');

//Tutorial PDF
// https://www.fpdf.org/en/doc/
//https://huguidugui.wordpress.com/2013/11/20/fpdf-tablas-y-reportes-introduccion/



// Recomendación:
// conectarse con bd
// realizar una consulta sql EJ: SELECT * FROM clientes;
// tomar ejemplo el archivo mostrardatos.php



//https://huguidugui.wordpress.com/2013/11/22/fpdf-reporte-estatico/

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


      $pdf->Cell(60);
      $pdf->Write(5,'MOTONAPPRO ');
      $pdf->Image('imagenes/logosinfondo.png' , 80 ,22, 35 , 38,'PNG', 'http://localhost/ProYECTO_MOTONAPPRO-master/formulario_registro.php');
        

       // Cell(ancho, alto, texto, borde, posición actual, alineación del texto)
     // Move to 6 cm to the right
    $pdf->Cell(60);
    // Centered text in a framed 20*10 mm cell and line break
    $pdf->Cell(20, 10, 'Num', 1, 1, 'C');



    // recorren consulta sql, adicionando los datos en esta sección 

    $pdf->SetFont('Arial','B',13);
    $pdf->Ln(40);
    $pdf->Write(5,'¿QUE ES?');
    $pdf->Ln(6);
    $pdf->Write(5,'motonappro un acompañamiento integral y tecnológicamente avanzado para motociclistas de todas las categorías, desde aquellos que se inician en el mundo de las dos ruedas hasta los entusiastas experimentados');
    $pdf->Ln(6);
    $pdf->Write(5,'Nombre de Usuario');
    $pdf->Ln(6);
    $pdf->Write(5,'CARACTERISTICAS');
    $pdf->Ln(6);
    $pdf->Write(5,'Formulario de Registro: Este componente permite a los usuarios crear una cuenta en la plataforma, proporcionando la información necesaria para su identificación y autenticación en el sistema. Se incluyen medidas de seguridad para garantizar la integridad de los datos del usuario.');
    $pdf->Ln(6);
    $pdf->Write(5,'Formulario de Registro: Este componente permite a los usuarios crear una cuenta en la plataforma, proporcionando la información necesaria para su identificación y autenticación en el sistema. Se incluyen medidas de seguridad para garantizar la integridad de los datos del usuario.');
    $pdf->Ln(6);
    $pdf->Write(5,'Formulario de Inicio de Sesión: El formulario de inicio de sesión permite a los usuarios acceder de manera segura a sus cuentas registradas en la plataforma, utilizando credenciales previamente establecidas durante el proceso de registro.
    ');
    $pdf->Ln(6);
    $pdf->Write(5,'Formulario de registrar tu moto: permite al usuario registrar los datos de su moto ');
    $pdf->Ln(6);
    $pdf->Write(5,'Formulario del mantenimiento de tu moto_ permite al usuario registrar datos legales de la moto ');



$pdf->Output();
?>