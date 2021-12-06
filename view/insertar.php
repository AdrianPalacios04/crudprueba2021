<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include '../layout/layout.php'?>

    <title>Insertar Nuevos Empleados</title>
</head>
<body>
    <div class="container" align=center>
        <h1 class="text-center">Nuevos empleados</h1>
        <form action="../funciones/insert.php" method="post">
            <div class="col-md-3">
                <label for="name">Inserta nombre</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="col-md-3">
                <label for="date">Inserta Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="date" id="date">
            </div>
           <div class="col-md-3">
                <label for="email">Inserta Correo Electronico</label>
                <input type="email" class="form-control" name="email" id="email">
           </div>
           <div class="col-md-3">
                <label for="phone">Inserta # telefonico</label>
                <input type="number" class="form-control" name="phone" id="phone">
           </div>
           
           <input type="submit" name="save" id="save" class="btn btn-success" value="Guardar">
        </form>
        <a href="../index.php"><button class="btn btn-info">Volver</button></a>
    </div>
</body>
</html>