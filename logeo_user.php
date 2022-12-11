<?php
    include("conexion.php");
    session_start();

    $correo = array();
    $pw = $_POST['psw'];
    $correo = $_POST['correo'];
    $id = $_GET['id'];
    $query = "SELECT count(*) as contar FROM cliente WHERE correo = '$correo' AND contra = '$pw'";
    $consulta = mysqli_query($con, $query);
    $array = mysqli_fetch_array($consulta);
    $sel = "SELECT * FROM cliente WHERE correo = '$correo' AND contra = '$pw'";
    $select = mysqli_query($con,$sel);
    $row = mysqli_fetch_assoc($select);

    if($array['contar'] > 0){
        $_SESSION['cliente'] = $row['nombres'];
        header("Location:producto.php?id=$id"); 
    }else{
        header("Location:logeo_cliente.php?id_inventario=$id&res=1");
    }

?>