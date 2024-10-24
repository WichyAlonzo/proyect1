// Función para duplicar el grupo de Extras
let countExtras = 2;
let compressedImageBase64 = '';
let business = 'CactusWingsMX';
document.getElementById('imagen').addEventListener('change', function() {
    if (this.files.length > 0) {
        comprimirImagen();
    }
});


function generarCadenaAleatoria(longitud = 10) {
    const caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let resultado = '';

    for (let i = 0; i < longitud; i++) {
        const indiceAleatorio = Math.floor(Math.random() * caracteres.length);
        resultado += caracteres[indiceAleatorio];
    }

    return resultado;
}

var idExtras = $('.idRandom');
$(document).ready(function() {
    idExtras.val(generarCadenaAleatoria());

})


// Ejemplo de uso
const cadenaAleatoria = generarCadenaAleatoria();
console.log(cadenaAleatoria); // Muestra una cadena aleatoria de 16 caracteres


function duplicarExtras() {
    const container = document.getElementById('extrasContainer');

    const newExtraGroup = document.createElement('div');
    newExtraGroup.className = 'extra-group';

    newExtraGroup.innerHTML = `
        <div>
            <input type="text" name="" class="idExtras" value="${countExtras++}">
            <label for="extraNombre">Nombre Extras:</label>
            <input type="text" class="form-control extraNombre" required placeholder="Ej: Elige tu sabor">
        </div>
        <div>
            <label for="extraDescripcion">Descripción Extras:</label>
            <input type="text" class="form-control extraDescripcion" required placeholder="Descripción del extra">
        </div>
        <div>
            <label for="extraCantidad">Cantidad:</label>
            <input class="form-control" type="text" class="extraCantidad" required placeholder="Cantidad seleccionada del extra">
        </div>

        <!-- Productos dentro del nuevo grupo de Extras -->
        <div class="product-input productos___">
            <input type="text" class="form-control productoNombre mx-1" required placeholder="Ej: BBQ">
            <input type="number" class="form-control productoPrecio mx-1" required placeholder="Precio del producto">
            <button class="btn btn-primary mx-1" type="button" onclick="duplicarProducto(this)">Duplicar</button>
        </div>
    `;

    container.appendChild(newExtraGroup);
}

// Función para duplicar los productos dentro de un grupo de Extras
function duplicarProducto(button) {
    const productInputGroup = button.parentElement;

    const newProductInput = document.createElement('div');
    newProductInput.className = 'product-input productos___';

    newProductInput.innerHTML = `
        <input type="text" class="form-control productoNombre mx-1" required placeholder="Ej: BBQ">
        <input type="number" class="form-control productoPrecio mx-1" required placeholder="Precio del producto">
        <button class="btn btn-primary mx-1" type="button" onclick="duplicarProducto(this)">Duplicar</button>
    `;

    productInputGroup.parentElement.appendChild(newProductInput);
}

// Manejo del envío del formulario
// document.getElementById('alitasForm').onsubmit = function(event) {
//     event.preventDefault();

//     const idRandom = document.getElementById('idRandom').value;
//     const nombre = document.getElementById('nombre').value;
//     const categoria = document.getElementById('categoria').value;
//     const descripcion = document.getElementById('descripcion').value;
//     const precio = parseFloat(document.getElementById('precio').value);

//     const extras = Array.from(document.querySelectorAll('.extra-group')).map(extra => {
//         const extrasInput = parseFloat(extra.querySelector('.idExtras')?.value || '');
//         const extraNombre = extra.querySelector('.extraNombre')?.value || '';
//         const extraDescripcion = extra.querySelector('.extraDescripcion')?.value || '';
//         const extraCantidad = parseFloat(extra.querySelector('.extraCantidad') 	?.value || '');

//         const productos = Array.from(extra.querySelectorAll('.product-input')).map(product => {
//             return {
//                 nombre: product.querySelector('.productoNombre')?.value || '',
//                 precio: parseFloat(product.querySelector('.productoPrecio')?.value) || 0
//             };
//         });

//         return {
//             id: extrasInput,
//             nombre: extraNombre,
//             descripcion: extraDescripcion,
//             cantidad: extraCantidad,
//             productos: productos
//         };
//     });


//     const jsonData = {
//         id: idRandom,
//         business: business,
//         top: 0,
//         personas: 2,
//         nombre: nombre,
//         categoria: categoria,
//         descripcion: descripcion,
//         imagen: compressedImageBase64, // Aquí deberías incluir la imagen comprimida
//         precio: precio,
//         grupos: extras
//     };

//     console.log(JSON.stringify(jsonData));
//     fetch('accions/save_json.php', { // Cambia esto por la URL real de tu backend
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//             },
//             body: JSON.stringify(jsonData)
//         })
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Error al guardar el archivo JSON');
//             }
//             return response.json();
//         })
//         .then(data => {
//             console.log('Archivo guardado:', data);
//             alert('Información guardada exitosamente.');
//         })
//         .catch(error => {
//             console.error('Error:', error);
//             alert('Hubo un problema al guardar la información.');
//         });

// };
document.getElementById('alitasForm').onsubmit = function(event) {
    event.preventDefault();

    const idRandom = document.getElementById('idRandom').value;
    const nombre = document.getElementById('nombre').value;
    const categoria = document.getElementById('categoria').value;
    const descripcion = document.getElementById('descripcion').value;
    const precio = parseFloat(document.getElementById('precio').value);

    const extras = Array.from(document.querySelectorAll('.extra-group')).map(extra => {
        const extrasInput = parseFloat(extra.querySelector('.idExtras')?.value || '');
        const extraNombre = extra.querySelector('.extraNombre')?.value || '';
        const extraDescripcion = extra.querySelector('.extraDescripcion')?.value || '';
        const extraCantidad = parseFloat(extra.querySelector('.extraCantidad')?.value || '');

        const productos = Array.from(extra.querySelectorAll('.product-input')).map(product => {
            return {
                nombre: product.querySelector('.productoNombre')?.value || '',
                precio: parseFloat(product.querySelector('.productoPrecio')?.value) || 0
            };
        });

        return {
            id: extrasInput,
            nombre: extraNombre,
            descripcion: extraDescripcion,
            cantidad: extraCantidad,
            productos: productos
        };
    });

    // Crear el objeto JSON para el nuevo producto
    const jsonData = {
        id: idRandom,
        business: business,
        top: 0,
        active: true,
        personas: 2,
        nombre: nombre,
        categoria: categoria,
        descripcion: descripcion,
        imagen: compressedImageBase64, // Aquí deberías incluir la imagen comprimida
        precio: precio,
        grupos: extras
    };

    console.log(JSON.stringify(jsonData));

    // Enviar el objeto JSON al servidor
    fetch('accions/save_json.php', { // Cambia esto por la URL real de tu backend
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(jsonData)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al guardar el archivo JSON');
            }
            return response.json();
        })
        .then(data => {
            console.log('Archivo guardado:', data);
            alert('Información guardada exitosamente.');
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Hubo un problema al guardar la información.');
        });
};



async function comprimirImagen() {
    const input = document.getElementById('imagen');

    if (input.files.length === 0) {
        alert("Por favor selecciona una imagen.");
        return;
    }

    const file = input.files[0];
    const originalSize = file.size / 1024;

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
        const MAX_WIDTH = 800;
        const scaleFactor = MAX_WIDTH / img.width;
        canvas.width = MAX_WIDTH;
        canvas.height = img.height * scaleFactor;
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
        canvas.toBlob((blob) => {
            if (blob) {
                const compressedSize = blob.size / 1024;
                const reader = new FileReader();
                reader.onloadend = function() {
                    compressedImageBase64 = reader.result; // Esta es tu cadena Base64.

                    // Mostrar la imagen comprimida en el div .imagenBlob
                    const imageBlobContainer = document.getElementById('imagenBlobContainer');
                    imageBlobContainer.innerHTML = `<img src="${compressedImageBase64}" style="height: 236px!important;" alt="Imagen Comprimida">`;
                };
                reader.readAsDataURL(blob); // Convierte el blob a base64.
            } else {
                alert("Error al comprimir la imagen.");
            }
        }, 'image/jpeg', 0.7); // Cambia el valor de calidad entre 0 y 1 según sea necesario
    };
}