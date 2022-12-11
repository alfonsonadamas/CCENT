<?php
    include("conexion.php");
    $id = $_REQUEST['id'];
    $id_cat = $_REQUEST['id_cat'];


    $query = "DELETE FROM inventario WHERE id_inventario = '$id'";

    $del = mysqli_query($con, $query);

    if($del){
        echo $id_cat;
        
    }else{
        echo "tas bien wey";
    }



?>