<?php
    include("conexion.php");
    $id = $_REQUEST['id_imagen'];
    $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

    $query = "UPDATE galeria SET imagen = '$imagen' WHERE id_imagen = '$id'";

    $resultado = $con->query($query);

    if ($resultado) {
       
        echo header("Location: galeria.php");
    }else{
        echo "no se elimino";
    }
?>