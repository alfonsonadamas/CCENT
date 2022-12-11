<?php
    $id = $_GET['id_inv'];
    $id_cat = $_GET['id_cat'];

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

    <?php
        $query = "SELECT * FROM inventario WHERE id_inventario = '$id';";
        $sel = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($sel)){

        

    ?>
        
        <div class="form_añadir">
        <h2>Edicion de productos</h2>
        <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="" width="200" height="200">    
        <form action="editar_producto.php?id=<?php echo $id?>&id_cat=<?php echo $id_cat ?>" method="POST" enctype="multipart/form-data">
            <div class="form_input">
                <label for="">Nombre:</label>
                <input type="text" maxlength="20" name="nombre" value="<?php echo $row['nombre'] ?>">
            </div>
            <div class="form_input">
                <label for="">Descripcion:</label>
                <textarea name="descr" id="" cols="30" rows="10"><?php echo $row['descripcion'] ?></textarea>
            </div>
            <div class="form_input">
                <label for="">Imagen:</label>
                <input type="file" name="imagen" id="">
            </div>
            <div class="form_input">
                <label for="">Precio</label>
                <input type="number" name="precio" id="number" min="0" max="1000" value="<?php echo $row['precio'] ?>">
            </div>
            <div class="form_input">
                <label for="">Stock</label>
                <input type="number" name="stock" placeholder="0" id="number" min="0" max="1000" value="<?php echo $row['stock'] ?>">
            </div>
            <div class="form_input">
                <label for="">Categoria</label>
                <select name="categoria" id="">
                    <?php
                    $query = "SELECT * FROM categoria;";
                        $sel = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($sel)) {
                    
                    ?>
                    <option value="<?php echo $row['id_categoria'] ?>"><?php echo $row['nombre'] ?></option>

                    <?php
                        }        
                    ?>
                </select>
            </div>
            <div>
                
                <input id="submit" type="submit" value="Guardar">
                
            </div>            

            

        </form>

        <form action="eliminar_producto.php?id=<?php echo $id ?>&id_cat=<?php echo $id_cat ?>" method="POST" class="eliminar">
                    <input id="boton_eliminar" type="submit" value="Eliminar">
                </form>
     </div>


    <?php
        }

    ?>
</body>
</html>