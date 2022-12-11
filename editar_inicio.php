<?php
    include("conexion.php");
    $id = $_REQUEST['id_imagen'];
    $nombre = $_REQUEST['nombre'];
    $resultado = '';

    if($_FILES['imagen']['name'] != null){
        $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

        $query = "UPDATE galeria_inicio SET imagen = '$imagen', nombre = '$nombre'  WHERE id_foto = '$id'";

        $resultado = $con->query($query);
    }else{
        $query = "UPDATE galeria_inicio SET nombre = '$nombre'  WHERE id_foto = '$id'";

        $resultado = $con->query($query);
    }
    

    if ($resultado) {
       
        echo header("Location: galeria_inicio.php");
    }else{
        echo "no se elimino";
    }
?>