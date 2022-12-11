<?php
    include("conexion.php");

    $id = $_REQUEST['id_Not'];
    $titulo = $_REQUEST['tituloN'];
    $desc = $_REQUEST['descN'];
    $categoria = $_REQUEST['categoria_Noticia'];
    $resultado='';

    if($_FILES['imagen']['name']!=null&&$categoria!=null){
        $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));
        $query = "UPDATE noticias SET imagen_Noticia = '$imagen', titulo_Noticia = '$titulo', Descripcion = '$desc', categoria_Noticia = '$categoria', Fecha = NOW() WHERE id_Noticia = '$id'";
        $resultado = $con->query($query);
    }else{
        $query = "UPDATE noticias SET titulo_Noticia = '$titulo', Descripcion = '$desc', Fecha = NOW() WHERE id_Noticia = '$id'";

        $resultado = $con->query($query);
    }
   

    if ($resultado) {
       
        echo header("Location: noticias.php");
    }else{
        echo "no se elimino";
    }
?>