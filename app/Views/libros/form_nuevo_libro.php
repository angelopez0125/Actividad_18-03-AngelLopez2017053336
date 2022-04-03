<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Libro</title>
</head>
<body>
    <h1>Nuevo Libro</h1>
    <form action="<?=base_url('guardarLibro')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" placeholder="Ingrese Código">
        <br>
        <label for="txtCodigoautor">Código Autor:</label>
        <input type="text" name="txtCodigoautor" placeholder="Ingrese Código">
        <br>
        <label for="txtCodigoeditorial">Código Editorial:</label>
        <input type="text" name="txtDireccion" placeholder="Ingrese Código">
        <br>
        <label for="txtTitulo">Titulo:</label>
        <input type="text" name="txtTitulo" placeholder="Ingrese Titulo">
        <br>
        <label for="txtPaginas">No. de Páginas:</label>
        <input type="text" name="txtPaginas" placeholder="Ingrese No. de Páginas">
        <br>
        <label for="txtTamano">Tamaño:</label>
        <input type="text" name="txtTamano" placeholder="Ingrese el Tamaño">
        <br>
        <label for="txtPrecio">Precio:</label>
        <input type="text" name="txtPrecio" placeholder="Ingrese el Precio">
        <br>
        <label for="txtEstado">Estado:</label>
        <input type="text" name="txtEstado" placeholder="Ingrese el Estado">
        <br>
        <label for="txtEdicion">Edición:</label>
        <input type="text" name="txtEdicion" placeholder="Ingrese la Edición">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>