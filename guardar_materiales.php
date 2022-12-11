<?php
    include("conexion.php");

    $id = $_REQUEST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descr'];
    $precio = $_POST['precio'];
    $categoria = $_REQUEST['categoria'];
    $stock = $_POST['stock'];
    $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

    if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png" ){
        $query = "INSERT INTO inventario(categoria,nombre,descripcion,precio,stock,imagen) VALUES('$categoria','$nombre','$descripcion','$precio','$stock','$imagen')";
        $resultado = $con->query($query);

        if ($resultado) {
            header("Location:productos.php?id=$categoria");
        }else{
            echo "no se inserto";
        }            
    } else{
        header("Location:añadir_producto.php?res=1&id='$id'");
    }

    
    

    

    










?>