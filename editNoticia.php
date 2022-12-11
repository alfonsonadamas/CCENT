<?php
    $id = $_GET['id_noticia'];

    include("conexion.php");
    session_start();

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


    <?php
        $query = "SELECT * FROM noticias WHERE id_Noticia = '$id';";
        $sel = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($sel)){

        

    ?>
        
        <div class="form_añadir">
        <h2><a href="noticias.php">Noticias</a>  &raquo; Editar Noticias</h2>

        <form action="editarNoticia.php?id_Not=<?php echo $row['id_Noticia'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form_input">
                <label for="">Titulo:</label>
                <input type="text" name="tituloN" value="<?php echo $row['titulo_Noticia'] ?>">
            </div>
            <div class="form_input">
                <label for="">Descripcion:</label>
                <textarea name="descN" id="" cols="30" rows="10"><?php echo $row['Descripcion'] ?></textarea>
            </div>
            <div class="form_input">
                    <label class="col-sm-3 control-label">Categoria Noticia</label>
                        <select  name="categoria_Noticia" class="form-control">
                            <option value=""> ----- </option>
                            <option value="Curso">Curso</option>
                            <option value="Noticia General">Noticia General</option>
                        </select>
                </div>
                <div class="form_input">
                    <label class="col-sm-3 control-label">Imagen</label>
                    <div class="col-sm-4">
                        <input accept="image/png,image/jpeg,image/webp" type="file"  name="imagen"><br>
                    </div>
                </div>
            <div>
                <input id="submit" type="submit">
            </div>            

        </form>
     </div>


    <?php
        }

    ?>

</body>
</html>