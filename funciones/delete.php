<?php  
    include_once '../model/conexion.php';

    $id = $_REQUEST['id'];
    $sql = mysqli_query($con,"DELETE FROM client WHERE id='$id'");
    if ($sql) {
        header("location:../index.php");
    }

?>