<?php
    include("conexion.php");
    $id = $_REQUEST['id_imagen'];

    $query = "DELETE FROM galeria WHERE id_imagen = '$id'";

    $resultado = $con->query($query);

    if ($resultado) {
        echo header("Location: admin.php");
    }else{
        echo "no se elimino";
    }
    
?>