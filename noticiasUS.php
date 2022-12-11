<?php
    include("conexion.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/CENT(2).png" type="image/x-icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/noticias.css">
    <title>Panel Administrador CCENT</title>
</head>
<body class="bodyUS">
<header class="navegacion" id="navegacion">
        <a href="index.html"><img src="img/CENT(1).png" alt="" id="home"></a>
        <ul class="botones_nav">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="nosotros.html" id="boton_nosotros">Nosotros</a></li>
            <li><a href="cursos.html">Cursos</a></li>
            <li><a href="index.php#visitanos">Visítanos</a></li>
            <li><a href="index.php#contacto">Contacto</a></li>
            <li><a href="materiales.html">Materiales</a></li>
            <li><a href="servicios.html">Servicios</a></li>
        </ul>
    </header>
    <div class="formNoticia">
    <?php
                    $query = "SELECT * FROM noticias ORDER BY Fecha DESC";
                    $select = $con->query($query);
                    while ($row = $select->fetch_assoc()) {
                    ?>
                    <div class="noticiaUS">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen_Noticia']) ?>" alt="" width="500" height="300">
                        <form class="noticiaUsuario" action="editar.php?id_imagen=<?php echo $row ['id_Noticia'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="info">
                                <p class="Categoria"><?php echo $row['categoria_Noticia'] ?></p>
                                <p class="Titulo"><?php echo $row['titulo_Noticia'] ?></p>
                                <p class="Fecha">Publicado el: <?php echo $row['Fecha'] ?></p>
                                <p class="Descripcion"><?php echo $row['Descripcion'] ?></p>
                            </div>
                        </form>
                    </div>
            <?php
                        }
                    
                
            ?>   
    </div>                    
 
</body>
</html>
