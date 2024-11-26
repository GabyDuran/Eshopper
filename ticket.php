<?php 
   require('rounded_rect.php');
   setlocale(LC_TIME, "Spanish_Mexican");

   //Logo y Encabezados
   $pdf = new PDF();
   $pdf->AddPage();
   $pdf->SetFont('Courier','B',20);
   $pdf->Cell(285,8,'',0,1,'C');

   $pdf->SetFont('Courier','B',16);
   $pdf->Cell(285,4,'Bueno por:',0,1,'C');
   $pdf->Image('../Ticket.png',10,5,180,300);

   $pdf->Output();
?>