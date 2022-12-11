<?php
    include("conexion.php");

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/materiales.css">
    <link rel="shortcut icon" href="img/CENT(2).png" type="image/x-icon">
    <title>Centro de Capacitacion en Electronica Nikola Tesla</title>
</head>
<body>
    <header class="navegacion" id="navegacion">
        <a href="index.php""><img src="img/CENT(1).png" alt="" id="home"></a>
        <ul class="botones_nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.html" id="boton_nosotros">Nosotros</a></li>
            <li><a href="cursos.html">Cursos</a></li>
            <li><a href="index.php#visitanos">Visítanos</a></li>
            <li><a href="materiales.php">Materiales</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="index.php#contacto">Contacto</a></li>
        </ul>
    </header>

    <?php
        if(isset($_SESSION['correo'])){
            $correo = $_SESSION['correo'];
            $sel = "SELECT * FROM cliente WHERE correo = '$correo'";
            $select = mysqli_query($con,$sel);

            $id_clien = "";

            while ($row = mysqli_fetch_assoc($select)) {
                $id_clien = $row['id_cliente'];
            }
        }
    ?>

    <div class="busqueda">
        <form action="" class="buscar">
            <select name="categorias" onchange="form.submit()">
                 <?php $categorias = (isset($_GET['categorias']) ? strtolower($_GET['categorias']) : NULL);  ?>
                <option value="" selected>Categorias</option>
                <option value="0" >Todas las categorias</option>
                <option value="1" >Robotica</option>
                <option value="2">Accesorios</option>
                <option value="3">Herramientas</option>
            </select>
            <?php $prod = (isset($_GET['nombre']) ? strtolower($_GET['nombre']) : NULL);  ?>
            <input type="text" name="nombre" id="">
            <input type="submit" value="Buscar" id="busca">
        </form>
        <div class="carrito">
            <a href="carrito.php?id_clien=<?php echo $id_clien ?>&est=0"><img src="img/carrito blanco.png" alt=""></a>
        </div>
    </div>

    <div class="producto">
        <?php
            $query = "SELECT * FROM inventario ";

            if($categorias){
                $query = "SELECT * FROM inventario WHERE categoria = '$categorias';";
            }

            if($categorias == 0){
                $query = "SELECT * FROM inventario ";
            }

            if($prod){
                $query = "SELECT * FROM inventario WHERE nombre LIKE '%$prod%';";
            }
            
            $inventario = mysqli_query($con, $query);
            
            while ($row = mysqli_fetch_assoc($inventario)) {
                
            
        ?>

        <div class="producto_producto">
            <div class="producto_fondo">
                <a href="producto.php?id=<?php echo $row['id_inventario'] ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt=""></a>
            </div>
            
            <div class="producto_descrp">
                <span><?php echo $row['nombre'];  ?></span>
                <p>$<?php echo $row['precio'];  ?></p>
            </div>
        </div>

        <?php
            
            }
        ?>
        
    </div>
</body>
</html>