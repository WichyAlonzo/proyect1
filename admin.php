<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Alitas</title>
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
            display: inline-block; /* Para que se ajuste al contenido */
        }
        .imagenBlob img {
            max-width: 100%; /* Asegura que la imagen no exceda el ancho del contenedor */
            height: auto; /* Mantiene la proporción de la imagen */
        }

    </style>
</head>
<body>

<h1>Formulario de Alitas</h1>
<form id="alitasForm">
    <div>
        <label for="imagen">Imagen:</label>
        <input type="file" id="imagen" accept="image/*" required>
        <button type="button" onclick="comprimirImagen()">Comprimir Imagen</button>
        <div id="imagenBlobContainer" class="imagenBlob"></div>
    </div>
    
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" required>
    </div>

    <div>
        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" required>
    </div>

    <div>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" required></textarea>
    </div>

    <div>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" required>
    </div>

    <h2>Extras</h2>

    <div id="extrasContainer">
        <!-- Grupo de Extras -->
        <div class="extra-group">
            <input type="text" name="" class="idExtras" value="1">
            <div>
                <label for="extraNombre">Nombre Extras:</label>
                <input type="text" class="extraNombre" required placeholder="Ej: Elige tu sabor">
            </div>
            <div>
                <label for="extraDescripcion">Descripción Extras:</label>
                <input type="text" class="extraDescripcion" required placeholder="Descripción del extra">
            </div>

            <!-- Productos dentro del grupo de Extras -->
            <div class="product-input">
                
                <label for="productoNombre">Nombre Producto:</label>
                <input type="text" class="productoNombre" required placeholder="Ej: BBQ">
                <label for="productoPrecio">Precio Producto:</label>
                <input type="number" class="productoPrecio" required placeholder="Precio del producto">
                <button type="button" onclick="duplicarProducto(this)">Duplicar</button>
            </div>
        </div>
    </div>

    <!-- Botón para duplicar el grupo de Extras -->
    <button type="button" onclick="duplicarExtras()">Agregar Otro Extra</button>

    <button type="submit">Enviar</button>
</form>

<script>
// Función para duplicar el grupo de Extras
let countExtras = 2;
let compressedImageBase64 = '';

function duplicarExtras() {
    const container = document.getElementById('extrasContainer');
    
    const newExtraGroup = document.createElement('div');
    newExtraGroup.className = 'extra-group';
    
    newExtraGroup.innerHTML = `
        <div>
            
            <input type="text" name="" class="idExtras" value="${countExtras++}">
            <label for="extraNombre">Nombre Extras:</label>
            <input type="text" class="extraNombre" required placeholder="Ej: Elige tu sabor">
        </div>
        <div>
            <label for="extraDescripcion">Descripción Extras:</label>
            <input type="text" class="extraDescripcion" required placeholder="Descripción del extra">
        </div>

        <!-- Productos dentro del nuevo grupo de Extras -->
        <div class="product-input">
            <label for="productoNombre">Nombre Producto:</label>
            <input type="text" class="productoNombre" required placeholder="Ej: BBQ">
            <label for="productoPrecio">Precio Producto:</label>
            <input type="number" class="productoPrecio" required placeholder="Precio del producto">
            <button type="button" onclick="duplicarProducto(this)">Duplicar</button>
        </div>
    `;
    
    container.appendChild(newExtraGroup);
}

// Función para duplicar los productos dentro de un grupo de Extras
function duplicarProducto(button) {
    const productInputGroup = button.parentElement;
    
    const newProductInput = document.createElement('div');
    newProductInput.className = 'product-input';
    
    newProductInput.innerHTML = `
        <label for="productoNombre">Nombre Producto:</label>
        <input type="text" class="productoNombre" required placeholder="Ej: BBQ">
        <label for="productoPrecio">Precio Producto:</label>
        <input type="number" class="productoPrecio" required placeholder="Precio del producto">
        <button type="button" onclick="duplicarProducto(this)">Duplicar</button>
    `;
    
    productInputGroup.parentElement.appendChild(newProductInput);
}

// Manejo del envío del formulario
document.getElementById('alitasForm').onsubmit = function(event) {
    event.preventDefault();
    
    
    const nombre = document.getElementById('nombre').value;
    const categoria = document.getElementById('categoria').value;
    const descripcion = document.getElementById('descripcion').value;
    const precio = document.getElementById('precio').value;
    
    const extras = Array.from(document.querySelectorAll('.extra-group')).map(extra => {
        const extrasInput = extra.querySelector('.idExtras').value;
        const extraNombre = extra.querySelector('.extraNombre').value;
        const extraDescripcion = extra.querySelector('.extraDescripcion').value;

        const productos = Array.from(extra.querySelectorAll('.product-input')).map(product => {
            return {
                nombre: product.querySelector('.productoNombre').value,
                precio: parseFloat(product.querySelector('.productoPrecio').value) || 0
            };
        });

        return {
            id:extrasInput,
            nombre: extraNombre,
            descripcion: extraDescripcion,
            productos: productos
        };
    });

    const jsonData = {
        nombre: nombre,
        categoria: categoria,
        descripcion: descripcion,
        imagen: compressedImageBase64, // Aquí deberías incluir la imagen comprimida
        grupos: extras
    };

    console.log(JSON.stringify(jsonData));
};



async function comprimirImagen() {
    const input = document.getElementById('imagen');
    
    if (input.files.length === 0) {
        alert("Por favor selecciona una imagen.");
        return;
    }

    const file = input.files[0];
    
    // Mostrar el tamaño original
    const originalSize = file.size / 1024; // Tamaño en KB
    alert(`Tamaño original: ${originalSize.toFixed(2)} KB`);

    // Crear un objeto URL para la imagen
    const imageUrl = URL.createObjectURL(file);
    
    // Crear un nuevo elemento de imagen
    const img = new Image();
    
    img.src = imageUrl;

    // Esperar a que la imagen se cargue
    img.onload = () => {
        // Crear un canvas para dibujar la imagen
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');

        // Establecer el tamaño del canvas
        const MAX_WIDTH = 800; // Cambia este valor según tus necesidades
        const scaleFactor = MAX_WIDTH / img.width;
        canvas.width = MAX_WIDTH;
        canvas.height = img.height * scaleFactor;

        // Dibujar la imagen en el canvas
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

        // Comprimir la imagen y convertirla a Blob
        canvas.toBlob((blob) => {
            if (blob) {
                const compressedSize = blob.size / 1024; // Tamaño en KB
                alert(`Tamaño comprimido: ${compressedSize.toFixed(2)} KB`);

                // Convertir el Blob a Base64 usando FileReader
                const reader = new FileReader();
                reader.onloadend = function() {
                    compressedImageBase64 = reader.result; // Esta es tu cadena Base64.
                    
                    // Mostrar la imagen comprimida en el div .imagenBlob
                    const imageBlobContainer = document.getElementById('imagenBlobContainer');
                    imageBlobContainer.innerHTML = `<img src="${compressedImageBase64}" alt="Imagen Comprimida">`;
                };
                reader.readAsDataURL(blob); // Convierte el blob a base64.
            } else {
                alert("Error al comprimir la imagen.");
            }
        }, 'image/jpeg', 0.7); // Cambia el valor de calidad entre 0 y 1 según sea necesario
    };
}


</script>

</body>
</html>