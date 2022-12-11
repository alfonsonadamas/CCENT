<?php

    include("conexion.php");

    
        $id_carrito = $_GET['id_carrito'];
        $id_cliente = $_GET['id_clien'];

        $ins = "INSERT INTO carrito_admin(id_carrito_cliente, fecha_envio) VALUES('$id_carrito', NOW());";

        $insert = mysqli_query($con,$ins);

        $sel = "SELECT * FROM carrito_cliente WHERE id_cliente = '$id_cliente'";

        $select = mysqli_query($con,$sel);

        while (mysqli_fetch_assoc($select)) {
            $update = "UPDATE carrito_cliente SET enviado = '1' WHERE id_cliente = $id_cliente;";

            $upd = mysqli_query($con,$update);
            
        }

        

        if($upd){
            


             header("Location:carrito.php?id_clien=$id_cliente&est=1");
        }
    
        // if($insert){
        //     $del = "DELETE FROM carrito_cliente WHERE id_cliente = '$id_cliente';";
        //     $delete = mysqli_query($con, $del);
        //     echo "carrito al admin enviado";
        // }
    




    


?>