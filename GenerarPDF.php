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

    $pdf->SetFont('Arial','B',12);
    $pdf->Ln(40);
    $pdf->Write(5,'Nombre');
    $pdf->Ln(6);
    $pdf->Write(5,'Apellidos');
    $pdf->Ln(6);
    $pdf->Write(5,'Nombre de Usuario');
    $pdf->Ln(6);
    $pdf->Write(5,'correo');
    $pdf->Write(5,'Celular');
    $pdf->Ln(6);
    $pdf->Write(5,'Direccion');
    $pdf->Ln(6);
    $pdf->Write(5,'Contraseña ');


$pdf->Output();
?>