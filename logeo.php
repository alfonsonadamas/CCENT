<?php
    require 'conexion.php';
    session_start();
    $usuario = $_REQUEST['user'];
    $password = $_REQUEST['password'];

    $query = "SELECT count(*) as contar FROM usuarios WHERE usuario = '$usuario' AND contra = '$password'";

    $consulta = mysqli_query($con, $query);

    $array = mysqli_fetch_array($consulta);

    if($array['contar'] > 0){
        $_SESSION['username'] = $usuario;
        $_SESSION['password'] = $password;
        echo $usuario;
        header('location:admin.php');

    }else{
        header('location:login.php');
    }



?>