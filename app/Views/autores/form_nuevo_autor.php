<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Autor</title>
</head>
<body>
    <h1>Nuevo Autor</h1>
    <form action="<?=base_url('guardarAutor')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" placeholder="Ingrese Código">
        <br>
        <label for="txtApellido">Apellido:</label>
        <input type="text" name="txtApellido" placeholder="Ingrese Apellido">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        <br>
        <label for="txtNacionalidad">Nacionalidad:</label>
        <input type="text" name="txtNacionalidad" placeholder="Ingrese Nacionalidad">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>