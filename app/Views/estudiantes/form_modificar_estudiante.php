<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Estudiante</title>
</head>
<body>
    <h1>Actualizar Estudiante</h1>

    <form action="<?=base_url('modificarEstudiante')?>" method="get">
        <label for="txtCarne">Carne del Alumno:</label>
        <input type="text" name="txtCarne" value="<?=$estudiante['carne_alumno']?>" readonly>
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$estudiante['nombre']?>">
        <br>
        <label for="txtApellido">Apellido:</label>
        <input type="text" name="txtApellido" value="<?=$estudiante['apellido']?>">
        <br>
        <label for="txtDireccion">Dirección:</label>
        <input type="text" name="txtDireccion" value="<?=$estudiante['direccion']?>">
        <br>
        <label for="txtTelefono">Telefono:</label>
        <input type="text" name="txtTelefono" value="<?=$estudiante['telefono']?>">
        <br>
        <label for="txtEmail">Correo Electrónico:</label>
        <input type="text" name="txtEmail" value="<?=$estudiante['email']?>">
        <br>
        <label for="txtFecha">Fecha de nacimiento:</label>
        <input type="text" name="txtFecha" value="<?=$estudiante['fechanacimiento']?>">
        <br>
        <label for="txtCodigogrado">Código de grado:</label>
        <input type="text" name="txtCodigogrado" value="<?=$estudiante['codigo_grado']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>