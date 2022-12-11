<?php
    require('./fpdf/fpdf.php');
    include("conexion.php");

    $id = $_GET['id_clien'];

    $query = "SELECT * FROM cliente WHERE id_cliente = '$id'";
    $sel = mysqli_query($con,$query);

    $row = mysqli_fetch_assoc($sel);

    $query2 = "SELECT * FROM carrito_cliente WHERE id_cliente = '$id'";
    $sel2 = mysqli_query($con,$query2);

    $row2 = mysqli_fetch_assoc($sel2);
    
    $pdf=new FPDF();
    $pdf->AddPage();
    
    

    // add title
    $pdf->SetFont('Arial', 'B', 24);
    $pdf->Cell(0, 10, 'Ticket de Pago de Materiales', 0, 1);
    $pdf->Ln();
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->MultiCell(0, 7, utf8_decode('Numero de pedido:'.$row2['id_carrito']), 0, 1);
    $pdf->Ln();
    // add text
    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(0, 7, utf8_decode('Nombre(s):'.$row['nombres']), 0, 1);
    $pdf->MultiCell(0, 7, utf8_decode('Apellidos:'.$row['apellidos']), 0, 1);
    $pdf->Ln();
    $pdf->MultiCell(0, 7, utf8_decode('Materiales:'), 0, 1);
    $pdf->Ln();
    $query3 = "SELECT * FROM `carrito_cliente` INNER JOIN inventario ON carrito_cliente.id_inventario = inventario.id_inventario WHERE id_cliente ='$id'";
    $sel3 = mysqli_query($con,$query3);
    $total = 0;

    while ($row3 = mysqli_fetch_assoc($sel3)) {
        $total += $row3['cantidad'] * $row3['precio'];
        $pdf->MultiCell(0, 7, utf8_decode($row3['cantidad']." x ".$row3['nombre']." - $".$row3['precio']), 0, 1);
    }
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 15);

    $pdf->MultiCell(0, 7, utf8_decode('Total: $'.$total), 0, 1);

    $pdf->SetFont('Arial', '', 11);

    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();

    $pdf->MultiCell(0, 7, utf8_decode('Presentar este ticket con una identificación oficial para recoger sus materiales, cuenta con 3 dias hábiles para hacerlo.'), 0, 1);

    $pdf->MultiCell(0, 7, utf8_decode('Telfono: +524431722172'), 0, 1);

    $pdf->MultiCell(0, 7, utf8_decode('Dirección: C. Juan Guillermo Villasana 131, Jardines de Guadalupe, 58140 Morelia, Mich.'), 0, 1);

    $pdf->Output();
?>