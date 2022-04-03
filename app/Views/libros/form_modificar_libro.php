<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Libros</title>
</head>
<body>
    <h1>Actualizar Libro</h1>

    <form action="<?=base_url('modificarLibro')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" value="<?=$libro['codigo_libro']?>" readonly>
        <br>
        <label for="txtCodigoautor">Código Autor:</label>
        <input type="text" name="txtCodigoautor" value="<?=$libro['codigo_autor']?>">
        <br>
        <label for="txtCodigoeditorial">Código Editorial:</label>
        <input type="text" name="txtCodigoeditorial" value="<?=$libro['codigo_editorial']?>">
        <br>
        <label for="txtTitulo">Titulo:</label>
        <input type="text" name="txtTitulo" value="<?=$libro['titulo']?>">
        <br>
        <label for="txtPaginas">No. de Páginas:</label>
        <input type="text" name="txtPaginas" value="<?=$libro['numero_paginas']?>">
        <br>
        <label for="txtTamano">Tamaño:</label>
        <input type="text" name="txtTamano" value="<?=$libro['tamanio']?>">
        <br>
        <label for="txtPrecio">Precio:</label>
        <input type="text" name="txtPrecio" value="<?=$libro['precio']?>">
        <br>
        <label for="txtEstado">Estado:</label>
        <input type="text" name="txtEstado" value="<?=$libro['estado']?>">
        <br>
        <label for="txtEdicion">Edición:</label>
        <input type="text" name="txtEdicion" value="<?=$libro['edicion']?>">
        <br>

        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>