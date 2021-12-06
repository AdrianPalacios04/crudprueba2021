<?php 
include_once '../model/conexion.php';

$id = $_REQUEST['id'];
$sql = mysqli_query($con,"SELECT * FROM client WHERE id='$id'");

$row = mysqli_fetch_array($sql);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $edit = mysqli_query($con,"UPDATE client SET name='$name',
    date='$date',email='$email',phone='$phone' WHERE id='$id'");

    if ($edit) {
        // mysqli_close($con);
        header('location:../index.php');
    }else{
    
    }
}

?>