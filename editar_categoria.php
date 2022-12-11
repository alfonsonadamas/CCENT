<?php
    include("conexion.php");
    session_start();
	if(!isset($_SESSION['username'])){
		header('Location:login.php');
        
	}

    $id = $_GET['id'];

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
        <a href="">Noticias</a>
        <a href="categorias.php">Inventario</a>
        <a href="galeria.php">Carrousel</a>
        <a href="">Imagenes Inicio</a>
    </div>

    <div class="categoria">
    <div class="nav">
            <a href="categorias.php">Categorias</a>
            <p>>></p>
            <a href="editar_categoria.php?id=<?php echo $id ?>">Editar Categoria</a>
        </div>
        <?php
            $query = "SELECT * FROM categoria WHERE id_categoria = '$id';";
            $categoria = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($categoria)) {

            
        ?>
        <div class="formulario_categoria formulario_edit" id="form">
            <form action="edit_cat.php?id=<?php echo $row['id_categoria'] ?>" method="POST">
                <label for="">Nombre: </label>
                <input type="text" name="nombre" value="<?php echo $row['nombre'] ;?>">
                <input type="submit" value="Guardar">
            </form>
        </div>

        <?php

            }
        ?>

       
    </div>
    
</body>
<script src="./js/script.js"></script>
</html>