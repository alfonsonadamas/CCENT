<?php

    include("conexion.php");

    session_start();

    $nombre = $_POST['name'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $check = $_POST['check'];
    $id = $_GET['id'];
    $query = "";

    $ver = "SELECT count(*) as contar FROM cliente WHERE correo = '$correo'";
    $consulta = mysqli_query($con, $ver);
    $array = mysqli_fetch_array($consulta);

    if ($array['contar'] > 0) {
        header("Location:añadir_cliente.php?id_inventario=$id&res=1");
    }else{
        $query = "INSERT INTO cliente(nombres, apellidos, telefono,correo) VALUES('$nombre','$apellidos','$telefono','$correo');";

    
    
        $insert = mysqli_query($con,$query);

        if($insert){
            if(!$check){
                $_SESSION['cliente'] = $nombre;
                $_SESSION['correo'] = $correo;
                $_SESSION['check'] = $check;
                header("Location:producto.php?id=$id");
                
            }else{
                $_SESSION['cliente'] = $nombre;
                $_SESSION['correo'] = $correo;
                $_SESSION['check'] = $check;
                header("Location:add_cliente.php?res=0&id_inventario=$id");
            }
        }

    }

    
    





?>