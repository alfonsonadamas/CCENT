<?php
    include("conexion.php");

    $nombre = $_REQUEST['nombre'];

    $query = "INSERT INTO categoria(nombre) VALUES('$nombre');";

    $ins = mysqli_query($con, $query);

    if($ins){
        header("Location:categorias.php");
    }



?>