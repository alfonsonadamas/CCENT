<?php
    include("conexion.php");
    session_start();
	if(!isset($_SESSION['username'])){
		header('Location:login.php');
        
	}

    $id = $_GET['id_imagen'];

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
    <title>Panel Administrador CCENT</title>
</head>
<body>
    <div class="admin">
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
        <div class="galeria">

            <div class="añadir no_añadir">
                <h2 style="margin-top: 20px;">Galeria CCENT</h2>
            </div>
    
            
            <?php
            $query = "SELECT * FROM galeria_inicio WHERE id_foto = '$id'";
            $select = $con->query($query);
            while ($row = $select->fetch_assoc()) {

            ?>
            <div class="admin_editar_form">
                <form class="editar" action="editar_inicio.php?id_imagen=<?php echo $row['id_foto'] ?>" method="POST" enctype="multipart/form-data">
                    <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="" height="200px">
                    <input type="file" accept="image/jpeg, image/jpg, image/png, image/webp" name="imagen">
                    <input type="text" maxlength="20" value="<?php echo $row['nombre'] ?>" name="nombre">
                    <input id="editar" type="submit" value="Editar">
                </form>
            </div>
            <?php
                    }
                
            ?>    
            
            
        </div>
    </div>
</body>
</html>
