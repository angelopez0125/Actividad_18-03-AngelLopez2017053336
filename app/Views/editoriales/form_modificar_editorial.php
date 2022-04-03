<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Editoriales</title>
</head>
<body>
    <h1>Actualizar Editorial</h1>

    <form action="<?=base_url('modificarEditorial')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" value="<?=$editorial['codigo_editorial']?>" readonly>
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$editorial['nombre']?>">
        <br>
        <label for="txtDireccion">Dirección:</label>
        <input type="text" name="txtDireccion" value="<?=$editorial['direccion']?>">
        <br>
        <label for="txtTelefono">Telefono:</label>
        <input type="text" name="txtTelefono" value="<?=$editorial['telefono']?>">
        <br>
        <label for="txtEmail">Email:</label>
        <input type="text" name="txtEmail" value="<?=$editorial['email']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>