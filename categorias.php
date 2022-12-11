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
    <link rel="stylesheet" href="css/inventario.css">
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

    <div class="categoria">
        <h2>Categorias</h2>
        <div class="categoria_listado">

        
        <?php
            $query = "SELECT * FROM categoria;";
            $categoria = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($categoria)) {

            
        ?>
            <div class="categoria_editar">
                <div class="categorias">
                    <div class="ref_categoria">
                        <a href="productos.php?id=<?php echo $row['id_categoria'] ?>"><?php echo $row['nombre'] ?></a>
                    
                    </div>
                    <div class="admin_editar">
                        <form class="editar" action="editar_categoria.php?id=<?php echo $row['id_categoria'] ?>" method="POST" enctype="multipart/form-data">
                            
                            <input id="editar" type="submit" value="Editar">
                        </form>
                    </div>
                </div>
            </div>   
        <?php

            }
        ?>
        <div class="categoria_editar">
                <div class="ref_categoria">
                    <a href="productos.php?id=0">Todas</a>
                </div>
                
        </div>
            
        <div class="añadir">
            <button onclick="display();">Añadir | +</button>
        </div>

        <div class="formulario_categoria" id="form">
            <form action="añadir_categoria.php" method="POST">
                <label for="">Nombre: </label>
                <input type="text" maxlength="10" name="nombre">
                <input type="submit" value="Guardar">
            </form>
        </div>

       
    </div>
    
</body>
<script src="./js/script.js"></script>
</html>