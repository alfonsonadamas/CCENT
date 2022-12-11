<?php
    include("conexion.php");
    session_start();

    $correo = array();
    $pw = $_POST['psw'];
    $pw2 = $_POST['confpsw'];
    $correo = $_SESSION['correo'];
    $id = $_GET['id'];
    $query = "SELECT count(*) as contar FROM cliente WHERE correo = '$correo' AND contra = '$pw'";
    $consulta = mysqli_query($con, $query);
    $array = mysqli_fetch_array($consulta);

    if($array['contar'] > 0){
        header("Location:add_cliente.php?res=1&id_inventario=$id"); 
    }else{
        if($pw == $pw2){
            $query = "UPDATE cliente SET contra = '$pw' WHERE correo = '$correo' ";
            $upd = mysqli_query($con,$query);
            if($upd){
                header("Location:logeo_cliente.php?id_inventario=$id&res=0");
            }
        }else{
            header("Location:add_cliente.php?res=2&id_inventario=$id");
        }
    }

?>