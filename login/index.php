<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validacion.php" method="post">
        <label for="ci">Ingrese su CI</label>
        <input type="number" class="form-control" id="ci" name="ci">
        <label for="pass">Contraseña</label>
        <input type="password" class="form-control" id="pass" name="pass">
        <button type="submit" name="aceptar" value="Aceptar">Iniciar Sesion</button>
    </form>
</body>
</html>