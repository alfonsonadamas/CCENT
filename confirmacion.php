<?php

    include("conexion.php");

     $conf =$_GET['conf'];
     $clien = $_GET['clien'];

     $query = "SELECT * FROM `carrito_cliente` INNER JOIN inventario ON carrito_cliente.id_inventario = inventario.id_inventario WHERE id_cliente = '$clien';";

     $select = mysqli_query($con,$query);

     if($conf == 1){
        while ($row = mysqli_fetch_assoc($select)) {
            $cantidad = $row['cantidad'];
            $id_inv = $row['id_inventario'];
            $upd = "UPDATE inventario SET stock = stock-$cantidad WHERE id_inventario = '$id_inv'";
            mysqli_query($con,$upd);
        }

        
        $del = "DELETE FROM carrito_cliente WHERE id_cliente = '$clien'";
        mysqli_query($con, $del);

        header("Location:pedidos.php");

        
     }else{
          $del = "DELETE FROM carrito_cliente WHERE id_cliente = '$clien'";
          $query2 = "SELECT * FROM cliente WHERE id_cliente = '$clien'";
          $select2 = mysqli_query($con, $query2);
          $row = mysqli_fetch_assoc($select2);

     }


?>