<!-- <?php
    include_once '../funciones/edit.php';
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php  include_once '../layout/layout.php'?>
    <title>Document</title>
</head>
<body>
<div class="container" align=center>
        <h1 class="text-center">Editar empleados</h1>
        <form action="../funciones/edit.php" method="post">
            <div class="col-md-3">
                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                <label for="name">Inserta nombre</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name']?>">
            </div>
            <div class="col-md-3">
                <label for="date">Inserta Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="date" id="date" value="<?php echo $row['date']?>">
            </div>
           <div class="col-md-3">
                <label for="email">Inserta Correo Electronico</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email']?>">
           </div>
           <div class="col-md-3">
                <label for="phone">Inserta # telefonico</label>
                <input type="number" class="form-control" name="phone" id="phone" value="<?php echo $row['phone']?>">
           </div>
           
           <input type="submit" name="update" id="update" class="btn btn-success" value="Guardar">
        </form>
        <a href="../index.php"><button class="btn btn-danger">Volver</button></a>
    </div>
    
</body>
</html>