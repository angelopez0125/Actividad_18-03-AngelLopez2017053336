<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Autores</title>
</head>
<body>
    <h1>Actualizar Autor</h1>

    <form action="<?=base_url('modificarAutor')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" value="<?=$autor['codigo_autor']?>" readonly>
        <br>
        <label for="txtApellido">Apellido:</label>
        <input type="text" name="txtApellido" value="<?=$autor['apellido']?>">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$autor['nombre']?>">
        <br>
        <label for="txtNacionalidad">Nacionalidad:</label>
        <input type="text" name="txtNacionalidad" value="<?=$autor['nacionalidad']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>