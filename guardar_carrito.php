<?php
    include("conexion.php");

    session_start();

    $id_prod = $_GET['id'];
    $correo = $_SESSION['correo'];

    $query = "SELECT * FROM cliente WHERE correo = '$correo'";

    $sel = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($sel);

    $id_clien = $row['id_cliente'];
    $cantidad = $_POST['cantidad'];

    $ins = "INSERT INTO carrito_cliente(id_inventario, id_cliente, cantidad) VALUES('$id_prod','$id_clien','$cantidad');";

    $insert = mysqli_query($con,$ins);
    
    if($insert){
        header("Location:carrito.php?id_clien=$id_clien&est=0");
    }




?>