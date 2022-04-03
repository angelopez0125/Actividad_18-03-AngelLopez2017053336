<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Prestamo</title>
</head>
<body>
    <h1>Nuevo Prestamo</h1>
    <form action="<?=base_url('guardarPrestamo')?>" method="get">
        <label for="txtCodigo">No. de Prestamo:</label>
        <input type="text" name="txtCodigo" placeholder="Ingrese Código">
        <br>
        <label for="txtCodigolibro">Código de Libro:</label>
        <input type="text" name="txtCodigolibro" placeholder="Ingrese Código de Libro">
        <br>
        <label for="txtCarne">Carné de alumno:</label>
        <input type="text" name="txtCarne" placeholder="Ingrese Carné">
        <br>
        <label for="txtFecha">Fecha de Prestamo:</label>
        <input type="text" name="txtFecha" placeholder="Ingrese Fecha">
        <br>
        <label for="txtDevolucion">Fecha Devolución:</label>
        <input type="text" name="txtDevolucion" placeholder="Ingrese Fecha Devolución">
        <br>
        <label for="txtCodigoempleado">Código Empleado:</label>
        <input type="text" name="txtCodigoempleado" placeholder="Ingrese Código Empleado">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
</body>
</html>