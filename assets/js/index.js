const btn_Nuevo = $('.order_nueva');
const btn_Preparada = $('.order_preparada');
const eventSource = new EventSource('datos.php');
const nuevoCountBadge = document.getElementById('nuevo-count');
const preprandoCountBadge = document.getElementById('prepa-count');
const terminandoCountBadge = document.getElementById('termi-count');

/* Variables para divs Pedidos */
let inicioPedidos = $('#nuevo');
let incioTexto = $('.nuevoDivs');

let preparadosPedidos = $('#preparado');
let preparadoTexto = $('.preparadoDivs');

let termnadosPedidos = $('#terminado');
let terminadoTexto = $('.terminadoDivs');


function actualizarPedido(data) {
    const pedidoId = `pedido-${data.id}`;
    const nuevoDiv = document.getElementById('nuevo');
    const preparadoDiv = document.getElementById('preparado');
    const terminadoDiv = document.getElementById('terminado');
    let nuevoPedido;

    const pedidoExistente = document.getElementById(pedidoId);
    if (pedidoExistente) {
        pedidoExistente.remove();
    }

    if (data.status === 'nuevo') {
        nuevoPedido = document.createElement('div');
        nuevoPedido.id = pedidoId;
        nuevoPedido.classList.add('pedido-new');
        nuevoPedido.className = 'shadow-sm p-2 mb-2 rounded  new_pedido_card';
        nuevoPedido.innerHTML = `
                    <div onclick="abrirOffcanvas(${data.id})" class="orden-id" data-id="${data.idrandom}">
                    ID: ${data.idrandom}
                    <div class="d-none px-1 buscar-rt text-ligth">${data.status}</div>
                    </div>
                `;
        nuevoDiv.appendChild(nuevoPedido);
    } else if (data.status === 'preparado') {
        if (data.repa === '') {
            nuevoPedido = document.createElement('div');
            nuevoPedido.id = pedidoId;
            nuevoPedido.className = 'shadow-sm p-2 mb-2 rounded preparado_card';
            nuevoPedido.innerHTML = `
                      <div onclick="preparandoOff(${data.id})" class="orden-id"  data-id="${data.idrandom}">ID: ${data.idrandom}
                      <div class="d-none px-1 buscar-rt text-ligth">${data.status}</div>
                      <div class="d-flex align-items-center">
                          <div class="spinner-grow text-primary" role="status" style="width: 7px!important;height: 7px!important;">
                              <span class="visually-hidden">Loading...</span>
                          </div>
                          <div class="my-1 px-1 buscar-rt"><span>Buscando Repa</span></div>
                      </div>
                      <button class="d-none mt-1 btn btn-dark w-100" onclick=orderFull(${data.idrandom})>Orden lista</button>
                      </div>
                  `;
            preparadoDiv.appendChild(nuevoPedido);

        } else {
            nuevoPedido = document.createElement('div');
            nuevoPedido.id = pedidoId;
            nuevoPedido.className = 'shadow-sm p-2 mb-2 rounded preparado_card';
            nuevoPedido.innerHTML = `
                    <div onclick="preparandoOff(${data.id})" class="orden-id"  data-id="${data.idrandom}">ID: ${data.idrandom}
                    <div class="d-none px-1 buscar-rt text-ligth">${data.status}</div>
                    <div class="d-flex align-items-center">
                        <div class="my-1 px-1 buscar-rt"><b>Repa:</b> ${data.repa}</div>
                    </div>
                    <button class="d-none mt-1 btn btn-dark w-100" onclick=orderFull(${data.idrandom})>Orden lista</button>
                    </div>
                `;
            preparadoDiv.appendChild(nuevoPedido);
        }
    } else if (data.status === 'terminado') {
        nuevoPedido = document.createElement('div');
        nuevoPedido.id = pedidoId;
        nuevoPedido.id = pedidoId;
        nuevoPedido.className = 'shadow-sm p-3 mb-2 rounded terminado_card';
        nuevoPedido.textContent = `ID: ${data.id}, Cliente: ${data.cliente}, Status: ${data.status}`;
        if (data.repa === '') {
            nuevoPedido.innerHTML = `
                    <div onclick="terminadoOff(${data.id})" class="orden-id"  data-id="${data.idrandom}">ID: ${data.idrandom}
                    <div class="d-none px-1 buscar-rt text-ligth">${data.status}</div>
                    <div class="d-flex align-items-center">
                        <div class="spinner-grow text-primary" role="status" style="width: 7px!important;height: 7px!important;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="my-1 px-1 buscar-rt"><span>Buscando Repa</span></div>
                    </div>
                    </div>
                `;
        } else {
            nuevoPedido.innerHTML = `
                    <div onclick="terminadoOff(${data.id})" class="orden-id"  data-id="${data.idrandom}">ID: ${data.idrandom}
                    <div class="d-none px-1 buscar-rt text-ligth">${data.status}</div>
                    <div class="d-flex align-items-center">
                        <div class="my-1 px-1 buscar-rt"><b>Repa:</b> ${data.repa}</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="spinner-grow text-danger" role="status" style="width: 7px!important;height: 7px!important;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="my-0 px-1 buscar-rt"><span>Esperando a ser recogido el pedido</span></div>
                    </div>
                    </div>
                `;
        }
        terminadoDiv.appendChild(nuevoPedido);

    } else if (data.status === 'entregado') {


    }



    let nuevosPedidos = 0;
    let preparandoPedidos = 0;
    let terminadoPedidos = 0;
    const pedidosNuevos = nuevoDiv.querySelectorAll('.buscar-rt');
    const pedidosPreparando = preparadoDiv.querySelectorAll('.buscar-rt');
    const pedidosTerminados = terminadoDiv.querySelectorAll('.buscar-rt');
    pedidosNuevos.forEach(pedido => {
        if (pedido.textContent.includes('nuevo')) {
            nuevosPedidos++;
        }
    });

    pedidosPreparando.forEach(pedido => {
        if (pedido.textContent.includes('preparado')) {
            preparandoPedidos++;
        }
    });

    pedidosTerminados.forEach(pedido => {
        if (pedido.textContent.includes('terminado')) {
            terminadoPedidos++;
        }
    });

    $(nuevoCountBadge).text(nuevosPedidos);
    $(preprandoCountBadge).text(preparandoPedidos);
    $(terminandoCountBadge).text(terminadoPedidos);

    // PEDIDOS ENTRANTES
    if (nuevosPedidos >= 1) {
        inicioPedidos.removeClass('d-none');
        incioTexto.addClass('d-none');

    } else {
        inicioPedidos.addClass('d-none');
        incioTexto.removeClass('d-none');
    }

    // PEDIDOS EN PREPARACION
    if (preparandoPedidos >= 1) {
        preparadosPedidos.removeClass('d-none');
        preparadoTexto.addClass('d-none');

    } else {
        preparadosPedidos.addClass('d-none');
        preparadoTexto.removeClass('d-none');
    }


    // PEDIDOS TERMINADOS
    if (terminadoPedidos >= 1) {
        termnadosPedidos.removeClass('d-none');
        terminadoTexto.addClass('d-none');

    } else {
        termnadosPedidos.addClass('d-none');
        terminadoTexto.removeClass('d-none');
    }

}

eventSource.onmessage = (event) => {
    const data = JSON.parse(event.data);
    actualizarPedido(data);

};

eventSource.onerror = (error) => {
    console.error('Error:', error);
};


function abrirOffcanvas(clienteId) {
    buscarClientePorId(clienteId)
        .then(clienteData => {
            const offcanvasBody = document.querySelector('#offcanvasRight .offcanvas-body');
            const productos_nuevos = document.querySelector('.productos_nuevos____');
            const ordenCliente = document.getElementById('offcanvasRightLabel');
            const nombreCliente = $('.cliente_nombre');
            const addressCliente = $('.cliente_address');
            const whatsCliente = $('.number_whats');
            const phoneCliente = $('.number_phone');
            const totalPedido = $('.total_order__');
            const subtotalPedido = $('.subtotal_order__');

            btn_Nuevo.on("click", function() {
                const idRandom = clienteData.cliente.idrandom;
                const status = 'preparado';
                $.ajax({
                    url: 'accions/status.php',
                    type: 'POST',
                    data: {
                        id: idRandom,
                        status: status
                    },
                    success: function(response) {
                        if (response === 'si') {
                            $('#offcanvasRight').removeClass('show');
                            $('.offcanvas-backdrop').remove();
                            $('body').removeClass('modal-open');
                        } else {
                            alert('Hubo un error al pasar este pedido a Preparado, comunicarte con Wichy');

                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('Error en la solicitud:', textStatus, errorThrown);
                        alert('Hubo un error al enviar los datos.');
                    }
                });
            });

            const productos = JSON.parse(clienteData.cliente.productos);
            const countProdcutos = productos.length;
            let textoCount = '';
            if (countProdcutos > 1) {
                textoCount = `${countProdcutos} Productos`;
            } else {
                textoCount = `${countProdcutos} Producto`;
            }
            ordenCliente.innerHTML = `Orden: ${clienteData.cliente.idrandom} (${textoCount})`;
            nombreCliente.text(clienteData.cliente.nombre);
            addressCliente.text(clienteData.cliente.direccion);
            totalPedido.text(`$${clienteData.cliente.total}`);
            subtotalPedido.text(`$${clienteData.cliente.envio}`);
            whatsCliente.attr('href', `https://wa.me/${clienteData.cliente.telefono}`);
            phoneCliente.attr('href', `tel:${clienteData.cliente.telefono}`);

            productos_nuevos.innerHTML = `
              ${generarProductosHTML(clienteData.cliente.productos)} <!-- Genera HTML para los productos -->
          `;

            const offcanvasElement = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
            offcanvasElement.show();
        })
        .catch(error => {
            console.error('Error al buscar el cliente:', error);
            alert('No se pudo obtener la información del cliente.');
        });
}

function preparandoOff(clienteId) {
    buscarClientePorId(clienteId)
        .then(clienteData => {
            const offcanvasBody = document.querySelector('#offcanvasRightPrepa .offcanvas-body');
            const productos_nuevos = document.querySelector('.productos_preparados____');
            const ordenCliente = document.getElementById('offcanvasRightLabelPrepa');
            const nombreCliente = $('.cliente_nombre');
            const addressCliente = $('.cliente_address');
            const whatsCliente = $('.number_whats');
            const phoneCliente = $('.number_phone');
            const totalPedido = $('.total_order__');
            const subtotalPedido = $('.subtotal_order__');
            const nombreRepa = $('.repa_nombre');
            const eventSource = new EventSource(`pedido.php?clienteId=${clienteId}`);

            eventSource.onmessage = function(event) {
                const pedidoData = JSON.parse(event.data);
                if (pedidoData.error) {
                    console.error(pedidoData.error);
                } else if (pedidoData.message) {
                    console.log(pedidoData.message);
                } else {
                    let containerRepa = $('.space__repa');
                    let containerSearch = $('.search__repa');
                    if (pedidoData.repa === '' || pedidoData.repa === null) {
                        console.log('Sin repa');
                        containerRepa.addClass('d-none');
                        containerSearch.removeClass('d-none');


                    } else {
                        console.log('Con repa');
                        containerRepa.removeClass('d-none');
                        containerSearch.addClass('d-none');
                        nombreRepa.text(pedidoData.repa);
                    }



                }
            };

            eventSource.onerror = function(error) {
                console.error("Error recibiendo datos del servidor", error);
                eventSource.close(); // Cerrar la conexión en caso de error
            };



            btn_Preparada.on("click", function() {
                const idRandom = clienteData.cliente.idrandom;
                const status = 'terminado';
                $.ajax({
                    url: 'accions/status.php',
                    type: 'POST',
                    data: {
                        id: idRandom,
                        status: status
                    },
                    success: function(response) {
                        console.log(response);
                        if (response === 'si') {
                            $('#offcanvasRightPrepa').removeClass('show');
                            $('.offcanvas-backdrop').remove();
                            $('body').removeClass('modal-open');
                        } else {
                            alert('Hubo un error al pasar este pedido a Terminado, comunicarte con Wichy');

                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('Error en la solicitud:', textStatus, errorThrown);
                        alert('Hubo un error al enviar los datos.');
                    }
                });

            });

            const productos = JSON.parse(clienteData.cliente.productos);
            const countProdcutos = productos.length;
            let textoCount = '';
            if (countProdcutos > 1) {
                textoCount = `${countProdcutos} Productos`;
            } else {
                textoCount = `${countProdcutos} Producto`;
            }
            ordenCliente.innerHTML = `Orden: ${clienteData.cliente.idrandom} (${textoCount})`;
            nombreCliente.text(clienteData.cliente.nombre);
            addressCliente.text(clienteData.cliente.direccion);
            whatsCliente.attr('href', `https://wa.me/${clienteData.cliente.telefono}`);
            phoneCliente.attr('href', `tel:${clienteData.cliente.telefono}`);
            totalPedido.text(`$${clienteData.cliente.total}`);
            subtotalPedido.text(`$${clienteData.cliente.envio}`);

            productos_nuevos.innerHTML = `
              ${generarProductosHTML(clienteData.cliente.productos)} <!-- Genera HTML para los productos -->
            `;

            const offcanvasElement = new bootstrap.Offcanvas(document.getElementById('offcanvasRightPrepa'));
            offcanvasElement.show();
        })
        .catch(error => {
            console.error('Error al buscar el cliente:', error);
            alert('No se pudo obtener la información del cliente.');
        });
}

function terminadoOff(clienteId) {
    buscarClientePorId(clienteId)
        .then(clienteData => {
            const offcanvasBody = document.querySelector('#offcanvasRightTerminado .offcanvas-body');
            const productos_nuevos = document.querySelector('.productos_terminado____');
            const ordenCliente = document.getElementById('offcanvasRightLabelTerminado');
            const nombreCliente = $('.cliente_nombre');
            const addressCliente = $('.cliente_address');
            const whatsCliente = $('.number_whats');
            const phoneCliente = $('.number_phone');
            const totalPedido = $('.total_order__');
            const subtotalPedido = $('.subtotal_order__');
            const nombreRepa = $('.repa_nombre');
            const eventSource = new EventSource(`pedido.php?clienteId=${clienteId}`);

            eventSource.onmessage = function(event) {
                const pedidoData = JSON.parse(event.data);
                console.log(pedidoData);
                if (pedidoData.error) {
                    console.error(pedidoData.error);
                } else if (pedidoData.message) {
                    console.log(pedidoData.message);
                } else {
                    let containerRepa = $('.space__repa');
                    let containerSearch = $('.search__repa');
                    if (pedidoData.repa === '' || pedidoData.repa === null) {
                        console.log('Sin repa');
                        containerRepa.addClass('d-none');
                        containerSearch.removeClass('d-none');


                    } else {
                        console.log('Con repa');
                        containerRepa.removeClass('d-none');
                        containerSearch.addClass('d-none');
                        nombreRepa.text(pedidoData.repa);
                    }



                }
            };

            eventSource.onerror = function(error) {
                console.error("Error recibiendo datos del servidor", error);
                eventSource.close(); // Cerrar la conexión en caso de error
            };



            btn_Preparada.on("click", function() {
                const idRandom = clienteData.cliente.idrandom;
                const status = 'terminado';
                $.ajax({
                    url: 'accions/status.php',
                    type: 'POST',
                    data: {
                        id: idRandom,
                        status: status
                    },
                    success: function(response) {
                        console.log(response);
                        if (response === 'si') {
                            $('#offcanvasRightPrepa').removeClass('show');
                            $('.offcanvas-backdrop').remove();
                            $('body').removeClass('modal-open');
                        } else {
                            alert('Hubo un error al pasar este pedido a Terminado, comunicarte con Wichy');

                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error('Error en la solicitud:', textStatus, errorThrown);
                        alert('Hubo un error al enviar los datos.');
                    }
                });

            });

            const productos = JSON.parse(clienteData.cliente.productos);
            const countProdcutos = productos.length;
            let textoCount = '';
            if (countProdcutos > 1) {
                textoCount = `${countProdcutos} Productos`;
            } else {
                textoCount = `${countProdcutos} Producto`;
            }
            ordenCliente.innerHTML = `Orden: ${clienteData.cliente.idrandom} (${textoCount})`;
            nombreCliente.text(clienteData.cliente.nombre);
            addressCliente.text(clienteData.cliente.direccion);
            whatsCliente.attr('href', `https://wa.me/${clienteData.cliente.telefono}`);
            phoneCliente.attr('href', `tel:${clienteData.cliente.telefono}`);
            totalPedido.text(`$${clienteData.cliente.total}`);
            subtotalPedido.text(`$${clienteData.cliente.envio}`);

            productos_nuevos.innerHTML = `
              ${generarProductosHTML(clienteData.cliente.productos)} <!-- Genera HTML para los productos -->
            `;

            const offcanvasElement = new bootstrap.Offcanvas(document.getElementById('offcanvasRightTerminado'));
            offcanvasElement.show();
        })
        .catch(error => {
            console.error('Error al buscar el cliente:', error);
            alert('No se pudo obtener la información del cliente.');
        });
}

/* funciones */
function buscarClientePorId(clienteId) {
    return fetch(`get_cliente.php?id=${clienteId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la red');
            }
            return response.json();
        })
        .then(data => {
            if (data.error) {
                throw new Error(data.error);
            }
            return data;
        });
}

function generarProductosHTML(productosJSON) {
    const productos = JSON.parse(productosJSON);
    let productosHTML = '';

    productos.forEach(producto => {
        productosHTML += `
            <div class="mb-3 container__product">
                <div class="class__product">
                    <strong><b>${producto.nombre}</b></strong><br>
                </div>
                <div class="dim__topp">
                    <span><b>Salsas:</b> ${producto.salsas.join(', ') || 'Ninguna'}</span><br>
                </div>
                <div class="dim__topp">
                    <span><b>Extras:</b> ${producto.accompaning.join(', ') || 'Ninguno'}</span><br>
                </div>
                <div class="d-flex justify-content-between" style="padding: 8px 6px 18px 6px;">
                    <div>
                        <span><b>Total</b>:</span>
                    </div>
                    <div>
                        <span><b>$${producto.precio}</b></span>
                    </div>
                </div>
            </div>
        `;
    });
    return productosHTML;

}

function orderFull(idPedido) {
    const idRandom = idPedido;
    const status = 'terminado';
    $.ajax({
        url: 'accions/status.php',
        type: 'POST',
        data: {
            id: idRandom,
            status: status
        },
        success: function(response) {
            if (response === 'si') {
                /* no code */

            } else {
                alert('Hubo un error al pasar este pedido a la ultima fase, comunicarte con Wichy');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error en la solicitud:', textStatus, errorThrown);
            alert('Hubo un error al enviar los datos.');
        }
    });
}