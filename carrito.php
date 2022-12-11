<?php
    include("conexion.php");

    session_start();

    if(isset($_SESSION['correo'])){
        $id_clien = $_GET['id_clien'];
        $est = $_GET['est'];
    }

    

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
        $q = "SELECT * FROM cliente WHERE id_cliente = '$id_clien'"; 
        $user = mysqli_query($con, $q);

        while ($row = mysqli_fetch_assoc($user)) {
            
        
    
    ?>

        <h1 class="bienvenida">Hola de nuevo, <?php echo $row["nombres"] ?></h1>

    <?php
        }
    ?>

    <?php
        $query = "SELECT * FROM `carrito_cliente` INNER JOIN inventario ON carrito_cliente.id_inventario = inventario.id_inventario WHERE id_cliente = '$id_clien' AND enviado = 0;";

        $sel = mysqli_query($con,$query);

        

        

    ?>
        <div class="carrito_carrito">
        <table>
            <tr>
                <th>Cantidad</th>
                <th>Nombre del producto</th>
                <th>Total</th>
                <th></th>
            </tr>

            
            

            <?php
            while($row = mysqli_fetch_assoc($sel)){
                $id_carrito = $row['id_carrito'];
                if($row['enviado'] == '0'){       
               
            ?>
               <tr>

                <td><?php echo $row['cantidad'] ?></td>
                <td><?php echo $row['nombre'] ?></td>

                <?php
                    $total = $row['cantidad'] * $row['precio'];
                ?>
                <td>$<?php echo $total ?></td>
                <td><form action="eliminar_carrito.php?id_carrito=<?php echo $row['id_carrito'] ?>&id_clien=<?php echo $id_clien ?>" method="POST"><input type="submit" value="-"></form></td>
                
                </tr>    


        <?php
                     }else if($row['enviado'] == 1){

                     
                        

            ?>

            

            <?php
                }    
                                
                }

            ?>

        

        </table>

        

        
        <?php
        
            $sel = "SELECT count(*) as contar FROM `carrito_cliente` INNER JOIN inventario ON carrito_cliente.id_inventario = inventario.id_inventario WHERE id_cliente = '$id_clien' AND enviado = 0;";
            $select = mysqli_query($con,$sel);
            
            $array = mysqli_fetch_array($select);

            if($array['contar']>0){

            
        ?>
    <form action="añadir_carrito_admin.php?id_carrito=<?php echo $id_carrito ?>&id_clien=<?php echo $id_clien ?>" class="enviar" method="POST">
            <input type="submit" value="Apartar">
        </form>
        </div>
    
    
                <?php
}else{


                ?>

                <p class="vacio">Carrito Vacío</p>

                <?php
}
                ?>
<?php
            if($est == 1){

            
                


            
        ?>
            
            <p class="confirmacion">Pedido enviado correctamente, por favor pase a recoger su material</p>
             <form action="pdf.php?id_clien=<?php echo $id_clien ?>" method="POST">
                <input type="submit" class="imprimir" value="💾|Imprimir Ticket">
             </form>   
        <?php
            }
        ?>

</body>
</html>