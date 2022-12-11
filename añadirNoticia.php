<?php
    include("conexion.php");
    $titulo = $_REQUEST['titulo_Noticia'];
    $descripcion = $_REQUEST['Descripcion'];
    $categoriaNoticia = $_REQUEST['categoria_Noticia'];
    $imagen = addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));

    $query = "INSERT INTO noticias(titulo_Noticia, Descripcion, Fecha, categoria_Noticia,imagen_Noticia) VALUES('$titulo','$descripcion',NOW(), '$categoriaNoticia','$imagen')";

    $resultado = $con->query($query);

    if ($resultado) {
       
        echo header("Location: noticias.php");
    }else{
        echo "no se elimino";
    }
?>