<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehículo</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="marca">Marca:</label><br>
            <input type="text" id="marca" name="marca" required>
        </div>
        <div>
            <label for="modelo">Modelo:</label><br>
            <input type="text" id="modelo" name="modelo" required>
        </div>
        <div>
            <label for="color">Color:</label><br>
            <input type="text" id="color" name="color">
        </div>
        <div>
            <label for="propietario">Propietario:</label><br>
            <input type="text" id="propietario" name="propietario">
        </div>
        <div>
            <label for="precio">Precio:</label><br>
            <input type="number" id="precio" name="precio" step="0.01">
        </div>
        <br>
        <button type="submit" name="btnGuarda" value="ok">Guardar</button>
    </form>
</body>
</html>