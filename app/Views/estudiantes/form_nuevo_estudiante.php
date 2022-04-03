<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Estudiante</title>
</head>
<body>
    <h1>Nuevo Estudiante</h1>
    <form action="<?=base_url('guardarEstudiante')?>" method="get">
        <label for="txtCarne">Carne de alumno:</label>
        <input type="text" name="txtCarne" placeholder="Ingrese Código">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        <br>
        <label for="txtApellido">Apellido:</label>
        <input type="text" name="txtApellido" placeholder="Ingrese Apellido">
        <br>
        <label for="txtDireccion">Dirección:</label>
        <input type="text" name="txtDireccion" placeholder="Ingrese Dirección">
        <br>
        <label for="txtTelefono">Telefono:</label>
        <input type="text" name="txtTelefono" placeholder="Ingrese Telefono">
        <br>
        <label for="txtEmail">Correo Electrónico:</label>
        <input type="text" name="txtEmail" placeholder="Ingrese Correo Electrónico">
        <br>
        <label for="txtFecha">Fecha de Nacimiento:</label>
        <input type="text" name="txtFecha" placeholder="Ingrese Fecha de Nacimiento">
        <br>
        <label for="txtCodigogrado">Código de Grado:</label>
        <input type="text" name="txtCodigogrado" placeholder="Ingrese Código de Grado">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>