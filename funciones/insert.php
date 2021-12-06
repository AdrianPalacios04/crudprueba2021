<?php
include_once '../model/conexion.php';

$name = $_POST['name'];
$date = $_POST['date'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if ($_POST['save']) {
    $sql = $con->prepare('INSERT INTO client(name,date,email,phone) VALUES (?,?,?,?)');    
    $sql->bind_param('ssss',$name,$date,$email,$phone);
    $sql->execute();
}
if ($sql->error) {
    echo '<script type="text/javascript">'; 
    echo 'alert("ERROR REVISAR SI FALTA ALGUN DATO");'; 
    echo 'window.location = "../view/insertar.php";';
    echo '</script>';
}else{
    echo '<script type="text/javascript">'; 
echo 'alert("Se inserto correctamente");'; 
echo 'window.location = "../index.php";';
echo '</script>';
}
?>