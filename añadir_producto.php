<?php
    include("conexion.php");
    session_start();
	if(!isset($_SESSION['username'])){
		header('Location:login.php');
        
	}

    $resultado = $_GET['res'];
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
            <a href="noticias.php">Noticias</a>
            <a href="categorias.php">Inventario</a>
            <a href="galeria.php">Carrousel</a>
            <a href="galeria_inicio.php">Imagenes Inicio</a>
            <a href="pedidos.php">Pedidos</a>
        </div>
     <div class="form_añadir">
     <div class="nav">
            <a href="categorias.php">Categorias</a>
            <p>>></p>
            <a href="productos.php?id=<?php echo $id ?>">Inventario</a>
            <p>>></p>
            <a href="añadir_producto.php?res=<?php echo $resultado ?>&&id=<?php echo $id ?>">Añadir Producto</a>
        </div>
     <?php
        if($resultado == 1){
           
        
      ?>

      <p class="error">Archivo no soportado, por favor intentelo de nuevo</p>


    <?php
        }

    ?>
        <form action="guardar_materiales.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">

            <div class="form_input">
                <label for="">Nombre:</label>
                <input type="text" maxlength="20" required name="nombre">
            </div>
            <div class="form_input">
                <label for="">Descripcion:</label>
                <textarea name="descr" required id="" maxlength="100" cols="30" rows="10"></textarea>
            </div>
            <div class="form_input">
                <label for="">Imagen:</label>
                <input type="file" accept="image/jpeg,image/jpg,image/png" required name="imagen" id="">
            </div>
            <div class="form_input">
                <label for="">Precio</label>
                <input type="number" required name="precio" placeholder="$0.00" id="number" min="0" max="1000">
            </div>
            <div class="form_input">
                <label for="">Stock</label>
                <input type="number" required name="stock" placeholder="0" id="number" min="0" max="1000">
            </div>
            <div class="form_input">
                <label for="">Categoria</label>
                <select name="categoria" id="" required>
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
                
                <input id="submit" type="submit">
            </div>            

        </form>
     </div>


</body>
</html>