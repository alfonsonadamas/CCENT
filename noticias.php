<?php
    include("conexion.php");
    session_start();
	if(!isset($_SESSION['username'])){
		header('Location:login.php');
        
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/CENT(2).png" type="image/x-icon">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/noticias.css">
    <title>Panel Administrador CCENT</title>
</head>
<body>
<div class="sidebar">
            <img id="ccent" src="img/CENT.png" alt="" height="90px">
            <div class="perfil">
                <img src="secretary.png" alt="" height="50px">
                <a id="perfil" href=""><?php echo $_SESSION['username'] ?></a>
            </div>
            <a href="noticias.php">Noticias</a>
            <a href="categorias.php">Inventario</a>
            <a href="galeria.php">Carrousel</a>
            <a href="galeria_inicio.php">Imagenes Inicio</a>
            <a href="pedidos.php">Pedidos</a>
        </div>
<div class="añadirNoticia">
    <h2 style="font-family: 'Montserrat', sans-serif;">Noticias</h2>
    <a href="addNoticia.php">Añadir|+  </a>
</div>
<div class="noticia">

    <div class="columna">
    <?php
        $query = "SELECT * FROM noticias order by Fecha desc";
        $select = $con->query($query);
        while ($row = $select->fetch_assoc()) {

        ?>
    
            <div class="formulario">
                
                <form class="editar" action="editNoticia.php?id_noticia=<?php echo $row ['id_Noticia'] ?>" method="POST" enctype="multipart/form-data">
                    
                <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen_Noticia']) ?>" alt="" height="200px">
                <a style="margin: 10px; font-family: 'Montserrat', sans-serif;"><?php echo $row['titulo_Noticia'] ?></a>
                   
                    <input id="editar" type="submit" value="Editar">
                </form>

                <form action="eliminarNoticia.php?id_imagen=<?php echo $row['id_Noticia'] ?>" method="POST">
                    <input  id="eliminar" type="submit" value="Eliminar">
                </form>
            </div>
        <?php
        }
        ?>  
    </div>
  
            
            
    </div>
</body>
</html>
