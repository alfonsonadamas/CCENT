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

<div class="cont">
    
<h2 style="font-family: 'Montserrat', sans-serif;"><a href="noticias.php">Noticias</a>  &raquo; <a href="addNoticia.php">Agregar Noticias</a></h2>

        <div class="content">            
            <form class="form-horizontal" enctype="multipart/form-data" action="añadirNoticia.php" method="post">
                <div class="form_input">
                    <label class="col-sm-3 control-label">Titulo:</label>
                    <div class="col-sm-4">
                        <input type="text" maxlength="40" name="titulo_Noticia" class="form-control" placeholder="Titulo" required>
                    </div>
                </div>
                <div class="form_input">
                    <label class="col-sm-3 control-label">Descripcion</label>
                    <div class="col-sm-4">
                        <textarea name="Descripcion" maxlength="220" id="" cols="30" required rows="10"></textarea>
                    </div>
                </div>
                <div class="form_input">
                    <label class="col-sm-3 control-label">Categoria Noticia</label>
                        <select required name="categoria_Noticia" class="form-control">
                            <option value=""> ----- </option>
                            <option value="Curso">Curso</option>
                            <option value="Noticia General">Noticia General</option>
                        </select>
                </div>
                <div class="form_input">
                    <label class="col-sm-3 control-label">Imagen</label>
                    <div class="col-sm-4">
                        <input accept="image/png,image/jpeg,image/webp" type="file" required name="imagen"><br>
                    </div>
                </div>
                
                <div class="form_input">
                    <label class="col-sm-3 control-label">&nbsp;</label>
                    <div class="col-sm-6">
                        <input type="submit" id="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
                        <a href="noticias.php" class="btn btn-sm btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>