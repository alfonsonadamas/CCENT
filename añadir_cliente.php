<?php
    include("conexion.php");
    $id = $_GET['id_inventario'];
    $res = $_GET['res'];
    
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
    <h1>Completa tu registro</h1>
        <p>Hola, para apartar tus productos es necesario que nos proporciones tu información personal para comunicarnos contigo cuando tengamos los materiales listos para que los recojas. </p>
        <form action="add_user.php?id=<?php echo $id ?>" class="formulario_cuenta" method="POST">
            <div class="input_cuenta">
            <label for="name">Nombre(s):</label>
            <input type="text" required name="name">
            </div>
            <div class="input_cuenta">
            <label for="apellidos">Apellidos:</label>
            <input type="text" required name="apellidos">
            </div>
            <div class="input_cuenta">
            <label for="correo">Correo:</label>
            <input type="email" required name="correo">
            </div>
            
            <div class="input_cuenta">
            <label for="telefono">Telefono:</label>
            <input type="number" id="telefono" min="0" required name="telefono">
            </div>

            <?php 
                if($res == 1){
                    
            ?>
                <p class="error">Correo ya registrado, por favor intentelo de nuevo</p>
            <?php
                }
            ?>
            <input type="submit" value="Guardar" id="guardar">
            
        </form>
    </div>
</body>
</html>