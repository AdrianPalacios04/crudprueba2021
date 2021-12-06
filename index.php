<?php 
    include_once 'model/conexion.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'layout/layout.php'?>

    <link rel="stylesheet" href="css/estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center"># de empleados</h1>
        <a href="view/insertar.php"><button type="button" class="btn btn-primary" >
            Nuevo Empleado
        </button></a>

        <table class="table">
            <thead>
                <tr>
                  
                    <th>Name</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
                    $sql = "SELECT * FROM client";
                    $result = mysqli_query($con,$sql);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['date'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td>
                        <a href="view/editar.php?id=<?php echo $row['id'] ?>"><button class="btn btn-info">Editar</button></a>
                        <a href="funciones/delete.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                    
                </tr>
                <?php 
                    }
                    ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>
