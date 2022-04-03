<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Prestamo</title>
</head>
<body>
    <h1>Actualizar Prestamo</h1>

    <form action="<?=base_url('modificarPrestamo')?>" method="get">
        <label for="txtCodigo">No. de Prestamo:</label>
        <input type="text" name="txtCodigo" value="<?=$prestamo['numero_prestamo']?>" readonly>
        <br>
        <label for="txtCodigolibro">Código Libro:</label>
        <input type="text" name="txtCodigolibro" value="<?=$prestamo['codigo_libro']?>">
        <br>
        <label for="txtCarne">Carne de alumno:</label>
        <input type="text" name="txtCarne" value="<?=$prestamo['carne_alumno']?>">
        <br>
        <label for="txtFecha">Fecha Prestamo:</label>
        <input type="text" name="txtFecha" value="<?=$prestamo['fecha_prestamo']?>">
        <br>
        <label for="txtDevolucion">Fecha Devolución:</label>
        <input type="text" name="txtDevolucion" value="<?=$prestamo['fecha_devolucion']?>">
        <br>
        <label for="txtCodigoempleado">Código Empleado:</label>
        <input type="text" name="txtCodigoempleado" value="<?=$prestamo['codigo_empleado']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
</body>
</html>