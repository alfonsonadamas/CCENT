<?php
    include("conexion.php");

    $nombre = $_REQUEST['nombre'];
    $id = $_GET['id'];

    $query = "UPDATE categoria SET nombre = '$nombre' WHERE id_categoria = '$id'";

    $ins = mysqli_query($con, $query);

    if($ins){
        header("Location:categorias.php");
    }



?>