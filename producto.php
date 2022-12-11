<?php
    include("conexion.php");
    $id = $_GET['id'];
    
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/CENT(2).png" type="image/x-icon">
    <link rel="stylesheet" href="css/cursos.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cursos.css">
    <link rel="stylesheet" href="css/materiales.css">
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
        $query = "SELECT * FROM inventario WHERE id_inventario = '$id'";

        $sel = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($sel)) {
            
        

    ?>

    <div class="info">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']) ?>" alt="">
            <div class="info-inter">

                <?php
                    if (isset($_SESSION['cliente'])) {
                        
                 
                ?>
                
                <form action="guardar_carrito.php?id=<?php echo $id ?>" method="POST" class="formulario_carrito">
                    <input id="titulo" readonly name="titulo" value="<?php echo $row['nombre'] ?>"  >
                    <p><?php echo $row['descripcion'] ?></p>
                    
                    <div class="info-precio">
                        <input name="precio" id="precio" type="text" value="$<?php echo $row['precio'] ?>">
                        <div class="info-input">
                            <input name="cantidad" type="number" value="1" min="1" max="<?php echo $row['stock']; ?>">
                        </div>

                    </div>
                <input class="boton" type="submit" value="APARTAR">
                </form>

            <?php

                }else{

                
            ?>
            <form action="añadir_cliente.php?id_inventario=<?php echo $row['id_inventario'] ?>&res=0" method="POST" class="formulario_carrito">
                    <input id="titulo" readonly name="titulo" value="<?php echo $row['nombre'] ?>"  >
                    <p><?php echo $row['descripcion'] ?></p>
                    
                    <div class="info-precio">
                        <input name="precio" id="precio" type="text" value="$<?php echo $row['precio'] ?>">
                        <div class="info-input">
                            <input name="cantidad" type="number" value="1" min="1" max="<?php echo $row['stock']; ?>">
                        </div>

                    </div>
                <input class="boton" type="submit" value="APARTAR">
                </form>

            <?php
                }
            ?>
            </div>
    </div>


        <?php
            }
        ?>
</body>
</html>