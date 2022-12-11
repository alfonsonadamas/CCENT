<?php
    include("conexion.php");
    $id = $_GET['id'];
    $id_cat = $_GET['id_cat'];
    $nombre = $_REQUEST['nombre'];
    $descr = $_REQUEST['descr'];
    $precio = $_REQUEST['precio'];
    $stock = $_REQUEST['stock'];
    $categoria = $_REQUEST['categoria'];
    $resultado = '';

    if($_FILES['imagen']['name'] != null){
        
        $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

        $query = "UPDATE inventario SET imagen = '$imagen', nombre = '$nombre', descripcion = '$descr', precio = '$precio', stock = '$stock'  WHERE id_inventario = '$id'";

        $resultado = $con->query($query);
    }else{
       
        $query = "UPDATE inventario SET nombre = '$nombre', descripcion = '$descr', precio = '$precio', stock = '$stock'  WHERE id_inventario = '$id'";

        $resultado = $con->query($query);
    }


    if ($resultado) {
       
        echo header("Location: productos.php?id=$id_cat");
    }
?>