<?php
    include "fpdf/fpdf.php";
    define('EURO',chr(128)); // Constante con el símbolo Euro.
    $pdf = new FPDF('P','mm',array(80,150)); // Tamaño tickt 80mm x 150 mm (largo aprox)
    $pdf->AddPage();

    // CABECERA
$pdf->SetFont('Helvetica','',12);
$pdf->Image('images/logo.PNG',25,2,-200);
$pdf->Cell(60,4,'',0,1,'C');
$pdf->Cell(60,12,'',0,1,'C');
$pdf->SetFont('Helvetica','',8);
$pdf->Cell(60,4,'C.I.F.: 01234567A',0,1,'C');
$pdf->Cell(60,4,'C/ Pelayo, 1',0,1,'C');
$pdf->Cell(60,4,'C.P.: 41003 Sevilla (España)',0,1,'C');
$pdf->Cell(60,4,'999 888 777',0,1,'C');
$pdf->Cell(60,4,'trans.al.andalus@gmail.com',0,1,'C');
 
// DATOS FACTURA        
$pdf->Ln(5);
$pdf->Cell(60,4,'Factura Simpl.: F2020-000001',0,1,'');
$pdf->Cell(60,4,'Fecha: 25/02/2020',0,1,'');
$pdf->Cell(60,4,'Metodo de pago: Tarjeta/Efectivo',0,1,'');

// COLUMNAS
$pdf->SetFont('Helvetica', 'B', 7);
$pdf->Cell(15, 10, 'Almacen', 0);
$pdf->Cell(20, 10, 'Producto', 0);
$pdf->Cell(10, 10, 'Cantidad',0,0,'R');
$pdf->Cell(15, 10, 'Embalaje',0,0,'R');
$pdf->Ln(8);
$pdf->Cell(60,0,'','T');
$pdf->Ln(0);
 
// PRODUCTOS
$pdf->SetFont('Helvetica', '', 7);
$pdf->MultiCell(30,4,'Sevilla',0,'L'); 
$pdf->Cell(22, -5, '  Agua',0,0,'R');
$pdf->Cell(19, -5, '  100',0,0,'R');
$pdf->Cell(19, -5, '  Caja',0,0,'R');
$pdf->Ln(3);
$pdf->MultiCell(30,4,'Madrid',0,'L'); 
$pdf->Cell(22, -5, 'Cerveza',0,0,'R');
$pdf->Cell(19, -5, '1000',0,0,'R');
$pdf->Cell(19, -5, 'Barril',0,0,'R');
$pdf->Ln(3);
$pdf->MultiCell(30,4,'Malaga',0,'L'); 
$pdf->Cell(22, -5, 'Abono',0,0,'R');
$pdf->Cell(19, -5, '250',0,0,'R');
$pdf->Cell(19, -5, 'Palet',0,0,'R');
$pdf->Ln(3);

// SUMATORIO DE LOS PRODUCTOS Y EL IVA
$pdf->Ln(5);
$pdf->Cell(60,0,'','T');
$pdf->Ln(2);    
$pdf->Cell(25, 10, 'TOTAL SIN I.V.A.', 0);    
$pdf->Cell(20, 10, '', 0);
$pdf->Cell(15, 10, number_format(round((round(0.0,2)/1.21),2), 2, ',', ' ').EURO,0,0,'R');
$pdf->Ln(3);    
$pdf->Cell(25, 10, 'I.V.A. 21%', 0);    
$pdf->Cell(20, 10, '', 0);
$pdf->Cell(15, 10, number_format(round((round(5.0,1)),2)-round((round(2*3,2)/1.21),2), 2, ',', ' ').EURO,0,0,'R');
$pdf->Ln(3);    
$pdf->Cell(25, 10, 'TOTAL', 0);    
$pdf->Cell(20, 10, '', 0);
$pdf->Cell(15, 10, number_format(round(0.0,2), 2, ',', ' ').EURO,0,0,'R');
 
// PIE DE PAGINA
$pdf->Ln(10);
$pdf->Cell(60,0,'GRACIAS POR CONFIAR EN NOSOTROS',0,1,'C');
$pdf->Cell(60,5,'TRANS AL-ALDALUS',0,1,'C');
$pdf->Cell(60,6,'Logistics.S.L',0,1,'C');
$pdf->Ln(3);
$pdf->Cell(60,0,'PRESUPUESTOS SIN COMPROMISOS',0,1,'C');
 
$pdf->Output('ticket.pdf','i');
?>