<?php
    include("conexion.php");

    $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

    $query = "INSERT INTO galeria(imagen) VALUES('$imagen')";
    $resultado = $con->query($query);

    if ($resultado) {
        echo "si se inserto";
    }else{
        echo "no se inserto";
    }
?>