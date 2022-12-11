<?php
    include("conexion.php");

    $id = $_GET['id_carrito'];
    $id_clien = $_GET['id_clien'];

    $del = "DELETE FROM carrito_cliente WHERE id_carrito = '$id'";

    $delete = mysqli_query($con,$del);

    if($delete){
        header("Location:carrito.php?id_clien=$id_clien&est=0");
    }

?>