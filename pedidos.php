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
            <h1 class="pedidos_titulo">Pedidos pendientes</h1>
            
            <?php
                $query = "SELECT * FROM `carrito_admin` INNER JOIN carrito_cliente ON carrito_admin.id_carrito_cliente = carrito_cliente.id_carrito;";
                $sel = mysqli_query($con, $query);

                $id = "";
                $nombre="";
                $nombre_nuevo="";

                while ($row = mysqli_fetch_assoc($sel)) {
                    $id = $row['id_cliente'];

                    

                    $query2 = "SELECT * FROM cliente WHERE id_cliente = '$id'";
                    $sel2 = mysqli_query($con,$query2);
                    $row2 = mysqli_fetch_assoc($sel2);
                    $nombre = $row2['nombres'];

                    if($nombre != $nombre_nuevo){
                        



            ?>
            <div class="pedido">
                <div class="cliente">
                    <p class="nombre">Nombre: <?php echo $row2['nombres']." "; echo $row2['apellidos'] ?></p>
                    <p class="materiales_nombre">Telefono: <?php echo $row2['telefono'] ?></p>
                    <p class="materiales_nombre">Correo: <?php echo $row2['correo'] ?></p>
                    <p class="materiales_nombre">Materiales:</p>
                    <?php
                        $query3 = "SELECT * FROM `carrito_cliente` INNER JOIN inventario ON carrito_cliente.id_inventario = inventario.id_inventario WHERE id_cliente = '$id';";
                        $sel3 = mysqli_query($con,$query3);
                        $total =0;
                        while ($row3 = mysqli_fetch_assoc($sel3)) {
                        $total += $row3['cantidad'] * $row3['precio'] ;

                    ?>
                    <div class="materiales">
                        
                        <p><?php echo $row3['cantidad']."x". $row3['nombre']." - $".$row3['precio'] ?></p>
                    </div>
                    

                    <?php      
                        }
                    ?>
                    <div class="total">
                            <p>Total: $<?php echo $total ?></p>
                    </div>

                    <div class="botones">
                    <form action="confirmacion.php?clien=<?php echo $row['id_cliente'] ?>&conf=1" method="POST">
                        <input type="submit" value="✔" class="acep">
                    </form>
                    <form action="confirmacion.php" method="POST">
                        <input type="submit" value="✖" class="den">
                    </form>
                    </div>
                </div>        
            </div>

            <?php
                        $nombre_nuevo = $nombre;
                    }
                        
                    

                }

                    
                

            ?>
            
            
        </div>
    </div>
</body>
</html>
