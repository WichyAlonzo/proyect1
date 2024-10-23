<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .extra-group {
            margin: 20px 0;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .product-input {
            margin: 10px 0;
        }

        .imagenBlob {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            display: inline-block;
            /* Para que se ajuste al contenido */
            height: 236px !important;
            /* Mantiene la proporción de la imagen */
        }

        .imagenBlob img {
            max-width: 100%;
            /* Asegura que la imagen no exceda el ancho del contenedor */
            height: 236px !important;
            /* Mantiene la proporción de la imagen */
        }

        .productos___ {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-around;
            align-items: center;
        }
    </style>
</head>

<body>

    <form id="alitasForm" class="container my-3">
        <h1>Formulario de Alitas</h1>
        <div>
            <label for="imagen">Imagen:</label>
            <input class="form-control" type="file" id="imagen" accept="image/*" required>
            <div class="conatiner" id="imagenBlobContainer" class="imagenBlob"></div>
        </div>
        <input type="text" class="idRandom" id="idRandom">
        <div>
            <label for="nombre">Nombre:</label>
            <input class="form-control" type="text" id="nombre" required>
        </div>

        <div>
            <label for="categoria">Categoría:</label>
            <input class="form-control" type="text" id="categoria" required>
        </div>

        <div>
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" required></textarea>
        </div>

        <div>
            <label for="precio">Precio:</label>
            <input class="form-control" type="number" id="precio" required>
        </div>

        <h2>Extras</h2>

        <div id="extrasContainer">
            <div class="extra-group">
                <input class="form-control idExtras" type="text" value="1">
                <div>
                    <label for="extraNombre">Nombre Extras:</label>
                    <input class="form-control extraNombre" type="text" required placeholder="Ej: Elige tu sabor">
                </div>
                <div>
                    <label for="extraDescripcion">Descripción Extras:</label>
                    <input class="form-control extraDescripcion" type="text" required placeholder="Descripción del extra">
                </div>
                <div>
                    <label for="extraCantidad">Cantidad:</label>
                    <input class="form-control extraCantidad" type="text" required placeholder="Cantidad seleccionada del extra">
                </div>
                <div class="product-input productos___">
                    <input class="form-control mx-1 productoNombre" type="text" required placeholder="Ej: BBQ">
                    <input class="form-control mx-1 productoPrecio" type="number" required placeholder="Precio del producto">
                    <button class="btn btn-primary mx-1" type="button" onclick="duplicarProducto(this)">Duplicar</button>
                </div>
            </div>
        </div>

        <button class="w-100 mt-1 btn btn-primary" type="button" onclick="duplicarExtras()">Agregar Otro Extra</button>
        <button class="w-100 mt-1 btn btn-success" type="submit">Enviar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="assets/js/admin.js?v=<?php echo time(); ?>"></script>

</body>

</html>