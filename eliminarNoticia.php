<?php
    include("conexion.php");
    $id = $_REQUEST['id_imagen'];

    $query = "DELETE FROM noticias WHERE id_Noticia = '$id'";

    $resultado = $con->query($query);

    if ($resultado) {
        echo header("Location: noticias.php");
    }else{
        echo "no se elimino";
    }
    
?>