<?php
    $id = $_GET['id'];

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

    <div class="productos">
        <!-- <h2>Categorias >> Inventario</h2> -->
        <div class="nav">
            <a href="categorias.php">Categorias</a>
            <p>>></p>
            <a href="productos.php?id=<?php echo $id ?>">Inventario</a>
        </div>
        <div class="añadir_producto">
            <a href="añadir_producto.php?res=0&&id=<?php echo $id ?>">Añadir | +</a>
        </div>

    <?php
        $query = "";
        if($id == 0){
            $query = "SELECT * FROM inventario";
        }else{
            $query = "SELECT * FROM inventario WHERE categoria = '$id';";
        }
        
        $sel = mysqli_query($con,$query);
        while ($row = mysqli_fetch_assoc($sel)) {
            
        
    ?>

    <div class="producto_listado">
        <a href="producto_edit.php?id_inv=<?php echo $row['id_inventario'] ?>&id_cat=<?php echo $id ?>"><?php echo $row['nombre'] ?></a>
    </div>


    <?php

    }
    ?>
    </div>
</body>
</html>