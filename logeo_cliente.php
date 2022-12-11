<?php

    include("conexion.php");
    $id = $_GET['id_inventario'];
    $st = $_GET['res'];
    
    
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
<body class="body_form">
<header class="navegacion" id="navegacion">
        <a href="index.php""><img src="img/CENT(1).png" alt="" id="home"></a>
        <ul class="botones_nav">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="cursos.html">Cursos</a></li>
            <li><a href="index.php#visitanos">Visítanos</a></li>
            <li><a href="index.php#contacto">Contacto</a></li>
            <li><a href="materiales.php">Materiales</a></li>
            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="nosotros.html" id="boton_nosotros">Nosotros</a></li>
        </ul>
    </header>

    

   

    <div class="añadir_cuenta">
    <h1>Iniciar Sesión</h1>
        <form action="logeo_user.php?id=<?php echo $id ?>" class="formulario_cuenta" method="POST">
            <div class="input_cuenta">
            <label for="correo">Correo:</label>
            <input type="email" required name="correo">
            </div>

            <div class="input_cuenta">
            <label for="psw">Contraseña:</label>
            <input type="text" required name="psw">
            </div>

            <?php
        if ($st == 1) {          
    ?>
            <p class="error">Correo o contraseña incorrecto</p>
    <?php
        }
    ?>


            <input type="submit" value="Iniciar Sesión" id="guardar">
            
        </form>
    </div>
</body>
</html>