<?php
    include("conexion.php");
    $id=$_GET['id'];
    $consulta="SELECT * FROM usuario WHERE id='$id'";
    $resultado=mysqli_query($conex,$consulta);
    $row= $resultado->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>CI</th>
            <th>EMAIL</th>
        </tr>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['ci'] ?></td>
            <td><?php echo $row['email'] ?></td>
        </tr>
    </table>
    <a href="index.php">CERRAR SESION</a>
</body>
</html>