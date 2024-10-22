<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Órdenes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles__102aql.css?v=<?php echo time(); ?>">
</head>

<body style="background: #eeeeee;">
  <audio id="notificationSound" src="a.mp3" preload="auto"></audio>

  <!-- Aceptar modal -->
  <div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 61%;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabel" style="font-weight: 900!important;">Orden</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="row g-0">
        <div class="col-sm-6 col-md-6 mx-0">
          <div class="mx-3" style="">
            <div style="padding: 10px;">
              <span style="font-weight: 900;">Productos</span>
            </div>
            <div class="productos_nuevos____" style="height: 61vh;overflow-x: hidden;overflow-y: scroll;width: 100%;">
              <!-- Productos -->
              <div class="mb-3" style="border-radius: 5px;border: 1px solid #198754;">
                <div style="padding: 15px 6px 15px 6px;border-top: 1px solid #0000001c;border-bottom: 1px solid #0000001c;">
                  <strong><b>15 Alitas + Ensalada + Papas Rojas</b></strong><br>
                </div>
                <div style="padding: 0px 6px 0px 6px;">
                  <span><b>Salsas:</b> BBQ</span><br>
                </div>
                <div style="padding: 0px 6px 0px 6px;">
                  <span><b>Extras:</b> BBQ</span><br>
                </div>
                <div class="d-flex justify-content-between" style="padding: 8px 6px 18px 6px;">
                  <div>
                    <span><b>Total</b>:</span>
                  </div>
                  <div>
                    <span><b>$149</b></span>
                  </div>
                </div>
              </div>
              <!-- Productos -->
              <div class="mb-3" style="border-radius: 5px;border: 1px solid #198754;">
                <div style="padding: 6px;border-top: 1px solid #0000001c;border-bottom: 1px solid #0000001c;">
                  <strong><b>1 X 15 Alitas + Ensalada + Papas Rojas</b></strong><br>
                </div>
                <div style="padding: 6px;">
                  <span><b>Salsas:</b> BBQ</span><br>
                </div>
                <div style="padding: 6px;">
                  <span><b>Extras:</b> BBQ</span><br>
                </div>
                <div class="d-flex justify-content-between">
                  <div style="padding: 6px;">
                    <span><b>Total</b>:</span>
                  </div>
                  <div style="padding: 6px;">
                    <span><b>$149</b></span>
                  </div>
                </div>
              </div>
              <!-- Productos -->
              <div class="mb-3" style="border-radius: 5px;border: 1px solid #198754;">
                <div style="padding: 6px;border-top: 1px solid #0000001c;border-bottom: 1px solid #0000001c;">
                  <strong><b>1 X 15 Alitas + Ensalada + Papas Rojas</b></strong><br>
                </div>
                <div style="padding: 6px;">
                  <span><b>Salsas:</b> BBQ</span><br>
                </div>
                <div style="padding: 6px;">
                  <span><b>Extras:</b> BBQ</span><br>
                </div>
                <div class="d-flex justify-content-between">
                  <div style="padding: 6px;">
                    <span><b>Total</b>:</span>
                  </div>
                  <div style="padding: 6px;">
                    <span><b>$149</b></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="mx-3" style="">
            <div style="padding: 10px;">
              <span style="font-weight: 900;">Datos del cliente</span>
            </div>

            <!-- Productos -->
            <div class="mb-3" style="border: 1px solid #198754;border-radius: 4px; padding-bottom:10px;">
              <div style="padding-top:5px;padding-left: 6px;padding-right: 6px;">
                <span>Cliente <span class="fw-bolder cliente_nombre">Wichy</span></span>
              </div>
              <div style="padding-top:2px;padding-left: 6px;padding-right: 6px;padding-bottom:5px;">
                <span>Dirección <span class="fw-bolder cliente_address">Tierra y libertad 3, Plan de ayala, Uriangato Gto.</span></span>
              </div>
              <div class="mx-2">
                <a href="" class="number_whats fw-bolder btn btn-outline-success w-100">Enviar WhatsApp</a>
                <a href="" class="number_phone fw-bolder btn btn-outline-dark w-100 mt-2">Llamar al Cliente</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="position: absolute;bottom: 0px;background: #f2f2f2;width: 100%;padding: 15px;">
        <button class="btn btn-dark w-100 fw-bolder order_nueva">ACEPTAR PEDIDO</button>
      </div>
    </div>
    <div id="offcanvas-footer" class="" style="position: absolute;bottom:66px;background: #f2f2f2;width: 100%;padding: 15px;">
      <div class="d-flex justify-content-between">
        <div style="padding: 6px;">
          <span><b>Total</b>:</span>
        </div>
        <div style="padding: 6px;">
          <span><b>$149</b></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Preparacion -->
  <div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasRightPrepa" aria-labelledby="offcanvasRightLabel" style="width: 61%;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabelPrepa" style="font-weight: 900!important;">Orden</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="row g-0">
        <div class="col-sm-6 col-md-6 mx-0">
          <div class="mx-3" style="">
            <div style="padding: 10px;">
              <span style="font-weight: 900;">Productos</span>
            </div>
            <div class="productos_preparados____" style="height: 61vh;overflow-x: hidden;overflow-y: scroll;width: 100%;">
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="mx-3" style="">
            <div style="padding: 10px;">
              <span style="font-weight: 900;">Datos del cliente</span>
            </div>

            <!-- Productos -->
            <div class="mb-3" style="border: 1px solid #198754;border-radius: 4px; padding-bottom:10px;">
              <div style="padding-top:5px;padding-left: 6px;padding-right: 6px;">
                <span>Cliente <span class="fw-bolder cliente_nombre">Wichy</span></span>
              </div>
              <div style="padding-top:2px;padding-left: 6px;padding-right: 6px;padding-bottom:5px;">
                <span>Dirección <span class="fw-bolder cliente_address">Tierra y libertad 3, Plan de ayala, Uriangato Gto.</span></span>
              </div>
              <div class="mx-2">
                <a href="" class="number_whats fw-bolder btn btn-outline-success w-100">Enviar WhatsApp</a>
                <a href="" class="number_phone fw-bolder btn btn-outline-dark w-100 mt-2">Llamar al Cliente</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="position: absolute;bottom: 0px;background: #f2f2f2;width: 100%;padding: 15px;">
        <button class="btn btn-dark w-100 fw-bolder order_preparada">PEDIDO LISTO</button>
      </div>
    </div>
    <div id="offcanvas-footer" class="" style="position: absolute;bottom:66px;background: #f2f2f2;width: 100%;padding: 15px;">
      <div class="d-flex justify-content-between">
        <div style="padding: 6px;">
          <span><b>Total</b>:</span>
        </div>
        <div style="padding: 6px;">
          <span><b>$149</b></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Terminado -->
  <div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasRightTerminado" aria-labelledby="offcanvasRightLabel" style="width: 61%;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasRightLabelTerminado" style="font-weight: 900!important;">Orden</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="row g-0">
        <div class="col-sm-6 col-md-6 mx-0">
          <div class="mx-3" style="">
            <div style="padding: 10px;">
              <span style="font-weight: 900;">Productos</span>
            </div>
            <div class="productos_terminado____" style="height: 61vh;overflow-x: hidden;overflow-y: scroll;width: 100%;">
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="mx-3" style="">
            <div style="padding: 10px;">
              <span style="font-weight: 900;">Datos del cliente</span>
            </div>
            <div class="mb-3" style="border: 1px solid #198754;border-radius: 4px; padding-bottom:10px;">
              <div style="padding-top:5px;padding-left: 6px;padding-right: 6px;">
                <span>Cliente <span class="fw-bolder cliente_nombre">Wichy</span></span>
              </div>
              <div style="padding-top:2px;padding-left: 6px;padding-right: 6px;padding-bottom:5px;">
                <span>Dirección <span class="fw-bolder cliente_address">Tierra y libertad 3, Plan de ayala, Uriangato Gto.</span></span>
              </div>
              <div class="mx-2">
                <a href="" class="number_whats fw-bolder btn btn-outline-success w-100">Enviar WhatsApp</a>
                <a href="" class="number_phone fw-bolder btn btn-outline-dark w-100 mt-2">Llamar al Cliente</a>
              </div>
            </div>
          </div>
          <div class="repa mx-3" style="">
            <div style="padding: 10px;">
              <span style="font-weight: 900;">Datos del Repartidor</span>
            </div>
            <div class="mb-3" style="border: 1px solid #198754;border-radius: 4px; padding-bottom:10px;">
              <div class="mb-1" style="padding-top:5px;padding-left: 6px;padding-right: 6px;">
                <span>Repa <span class="fw-bolder repa_nombre">Wichy</span></span>
              </div>
              <div class="mx-2">
                <a href="" class="number_whats_repa fw-bolder btn btn-outline-success w-100">Enviar WhatsApp</a>
                <a href="" class="number_phone_repa fw-bolder btn btn-outline-dark w-100 mt-2">Llamar al Cliente</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="offcanvas-footer" class="" style="position: absolute;bottom:0px;background: #f2f2f2;width: 100%;padding: 15px;">
      <div class="d-flex justify-content-between">
        <div style="padding: 6px;">
          <span><b>Total</b>:</span>
        </div>
        <div style="padding: 6px;">
          <span><b>$149</b></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Divs  -->
  <div class="mx-3 mt-2">
    <div class="row">
      <div class="col-12 col-md-4 mb-4" style="padding: 6px!important;">
        <!-- Categoria -->
        <div class="orden-card nuevos">
          <div class="px-1 py-1 border-bottom" style="display: flex;align-items: center;">
            <h6 class="pb-2 mb-0 p-2 text-uppercase" style="font-size: 11px;color: grey;font-weight: 700;">Por aceptar</h6>
            <span class="mx-3 badge" style="color: black;border: 1px solid #00000038;" id="nuevo-count">0</span>
          </div>
          <!-- Pedido -->
          <div class="p-2" id="nuevo" style="height: 33.5em;line-height: 1em;overflow-x: hidden;overflow-y: scroll;width: 100%;"></div>

        </div>
      </div>
      <!-- Categoria -->
      <div class="col-12 col-md-4 mb-4" style="padding: 6px!important;">
        <div class="orden-card">
          <div class="px-1 py-1 border-bottom" style="display: flex;align-items: center;">
            <h6 class="pb-2 mb-0 p-2 text-uppercase" style="font-size: 11px;color: grey;font-weight: 700;">En preparación</h6>
            <span class="mx-3 badge" style="color: black;border: 1px solid #00000038;" id="prepa-count">0</span>
          </div>
          <div class="p-2" id="preparado" style="height: 33.5em;line-height: 1em;overflow-x: hidden;overflow-y: scroll;width: 100%;"></div>
        </div>
      </div>
      <!-- Categoria -->
      <div class="col-12 col-md-4 mb-4" style="padding: 6px!important;">
        <div class="orden-card">
          <div class="px-1 py-1 border-bottom" style="display: flex;align-items: center;">
            <h6 class="pb-2 mb-0 p-2 text-uppercase" style="font-size: 11px;color: grey;font-weight: 700;">Por entregar </h6>
            <span class="mx-3 badge" style="color: black;border: 1px solid #00000038;" id="termi-count">0</span>
          </div>
          <div class="p-2" id="terminado" style="height: 33.5em;line-height: 1em;overflow-x: hidden;overflow-y: scroll;width: 100%;"></div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    // Notificaciones programar despues
    // $(document).ready(function() {
    //   $('#sendButton').click(function() {
    //     var message = $('#messageBox').val();
    //     if (message) {
    //       // Prepend the message to the notification area
    //       $('#notificationArea').prepend('<div class="notification">' + message + '</div>');

    //       // Play the notification sound
    //       $('#notificationSound')[0].play();

    //       // Clear the message box
    //       $('#messageBox').val('');
    //     } else {
    //       alert('Por favor, ingresa un mensaje.');
    //     }
    //   });
    // });
    const btn_Nuevo = $('.order_nueva');
    const btn_Preparada = $('.order_preparada');
    const eventSource = new EventSource('datos.php');
    const nuevoCountBadge = document.getElementById('nuevo-count');
    const preprandoCountBadge = document.getElementById('prepa-count');
    const terminandoCountBadge = document.getElementById('termi-count');

    function actualizarPedido(data) {
      const pedidoId = `pedido-${data.id}`;
      const nuevoDiv = document.getElementById('nuevo');
      const preparadoDiv = document.getElementById('preparado');
      const terminadoDiv = document.getElementById('terminado');

      // Eliminar el pedido de su ubicación actual (si existe)
      const pedidoExistente = document.getElementById(pedidoId);
      if (pedidoExistente) {
        pedidoExistente.remove();
      }

      let nuevoPedido;

      // Crear un nuevo elemento para el pedido
      if (data.status === 'nuevo') {
        nuevoPedido = document.createElement('div');
        nuevoPedido.id = pedidoId;
        nuevoPedido.classList.add('pedido-new');
        nuevoPedido.className = 'shadow-sm p-3 mb-2 rounded';
        nuevoPedido.style.width = '100%';
        nuevoPedido.style.border = 'solid 1px #e9e9e9';
        nuevoPedido.style.background = 'linear-gradient(160deg, #0093E9 0%, #80D0C7 100%)';
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
          nuevoPedido.className = 'shadow-sm p-3 mb-2 rounded';
          nuevoPedido.style.width = '100%';
          nuevoPedido.style.border = 'solid 1px #e9e9e9 !important';
          nuevoPedido.style.backgroundColor = '#ffffff47';
          nuevoPedido.innerHTML = `
                      <div onclick="preparandoOff(${data.id})" class="orden-id"  data-id="${data.idrandom}">ID: ${data.idrandom}
                      <div class="d-none px-1 buscar-rt text-ligth">${data.status}</div>
                      <div class="d-flex align-items-center">
                          <div class="spinner-grow text-primary" role="status" style="width: 15px!important;height: 15px!important;">
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
          nuevoPedido.className = 'shadow-sm p-3 mb-2 rounded';
          nuevoPedido.style.width = '100%';
          nuevoPedido.style.border = 'solid 1px #e9e9e9 !important';
          nuevoPedido.style.backgroundColor = '#ffffff47';
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
        nuevoPedido.className = 'shadow-sm p-3 mb-2 rounded';
        nuevoPedido.style.width = '100%';
        nuevoPedido.style.border = 'solid 1px #e9e9e9 !important';
        nuevoPedido.style.backgroundColor = '#ffffff47';
        nuevoPedido.textContent = `ID: ${data.id}, Cliente: ${data.cliente}, Status: ${data.status}`;
        if (data.repa === '') {
          nuevoPedido.innerHTML = `
                    <div onclick="terminadoOff(${data.id})" class="orden-id"  data-id="${data.idrandom}">ID: ${data.idrandom}
                    <div class="d-none px-1 buscar-rt text-ligth">${data.status}</div>
                    <div class="d-flex align-items-center">
                        <div class="spinner-grow text-primary" role="status" style="width: 15px!important;height: 15px!important;">
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
                        <div class="spinner-grow text-danger" role="status" style="width: 15px!important;height: 15px!important;">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="my-1 px-1 buscar-rt"><span>Esperando a ser recogido el pedido</span></div>
                    </div>
                    </div>
                `;
        }
        terminadoDiv.appendChild(nuevoPedido);

      }



      let nuevosPedidos = 0;
      let preparandoPedidos = 0;
      let terminadoPedidos = 0;

      // Contar los pedidos en cada div
      const pedidosNuevos = nuevoDiv.querySelectorAll('.buscar-rt');
      const pedidosPreparando = preparadoDiv.querySelectorAll('.buscar-rt');
      const pedidosTerminados = terminadoDiv.querySelectorAll('.buscar-rt');

      // Verificar contenido de cada estado
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

      // Actualizar los contadores en la interfaz
      $(nuevoCountBadge).text(nuevosPedidos);
      $(preprandoCountBadge).text(preparandoPedidos);
      $(terminandoCountBadge).text(terminadoPedidos);

    }

    eventSource.onmessage = (event) => {
      const data = JSON.parse(event.data);
      actualizarPedido(data); // Actualizar cada pedido cuando llega un evento
    };

    eventSource.onerror = (error) => {
      console.error('Error:', error);
    };

    // FUNCION OFCANVA
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

          // Accion Boton
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


          // Parsear los productos desde JSON
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

          // Actualizar el contenido del offcanvas con la información del cliente
          console.log(clienteData.cliente.productos);
          productos_nuevos.innerHTML = `
              ${generarProductosHTML(clienteData.cliente.productos)} <!-- Genera HTML para los productos -->
          `;

          // Mostrar el offcanvas
          const offcanvasElement = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
          offcanvasElement.show();
        })
        .catch(error => {
          console.error('Error al buscar el cliente:', error);
          alert('No se pudo obtener la información del cliente.');
        });
    }


    // Preparando
    function preparandoOff(clienteId) {
      buscarClientePorId(clienteId)
        .then(clienteData => {
          console.log(clienteData); // Muestra la información en la consola

          // Obtener el elemento del offcanvas
          const offcanvasBody = document.querySelector('#offcanvasRightPrepa .offcanvas-body');
          const productos_nuevos = document.querySelector('.productos_preparados____');
          const ordenCliente = document.getElementById('offcanvasRightLabelPrepa');
          const nombreCliente = $('.cliente_nombre');
          const addressCliente = $('.cliente_address');
          const whatsCliente = $('.number_whats');
          const phoneCliente = $('.number_phone');

          btn_Preparada.on("click", function() {
            const idRandom = clienteData.cliente.idrandom;
            const status = 'terminado';
            $.ajax({
              url: 'accions/status.php', // URL del archivo PHP
              type: 'POST', // Método HTTP
              data: {
                id: idRandom,
                status: status
              },
              success: function(response) {
                // Manejar la respuesta del servidor
                console.log(response); // Muestra la respuesta en la consola
                if (response === 'si') {
                  // alert('Parámetros recibidos correctamente.');
                  // <div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasRightPrepa" aria-labelledby="offcanvasRightLabel" style="width: 61%;">
                  $('#offcanvasRightPrepa').removeClass('show'); // Remueve la clase 'show' para cerrar el modal
                  $('.offcanvas-backdrop').remove(); // Elimina el backdrop
                  $('body').removeClass('modal-open'); // Permite el scroll en el body
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



          // Parsear los productos desde JSON
          const productos = JSON.parse(clienteData.cliente.productos);

          console.log(productos);
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

          // Actualizar el contenido del offcanvas con la información del cliente
          console.log(clienteData.cliente.productos);
          productos_nuevos.innerHTML = `
              ${generarProductosHTML(clienteData.cliente.productos)} <!-- Genera HTML para los productos -->
          `;

          // Mostrar el offcanvas
          const offcanvasElement = new bootstrap.Offcanvas(document.getElementById('offcanvasRightPrepa'));
          offcanvasElement.show();
        })
        .catch(error => {
          console.error('Error al buscar el cliente:', error);
          alert('No se pudo obtener la información del cliente.');
        });
    }

    // Terminado
    function terminadoOff(clienteId) {
      buscarClientePorId(clienteId)
        .then(clienteData => {
          console.log(clienteData); // Muestra la información en la consola
          alert('Terminado');
          // Obtener el elemento del offcanvas
          const offcanvasBody = document.querySelector('#offcanvasRightTerminado .offcanvas-body');
          const productos_nuevos = document.querySelector('.productos_terminado____');
          const ordenCliente = document.getElementById('offcanvasRightLabelTerminado');
          const nombreCliente = $('.cliente_nombre');
          const addressCliente = $('.cliente_address');
          const whatsCliente = $('.number_whats');
          const phoneCliente = $('.number_phone');


          btn_Nuevo.on("click", function() {
            const idRandom = clienteData.cliente.idrandom;
            const status = 'preparado';
            $.ajax({
              url: 'accions/status.php', // URL del archivo PHP
              type: 'POST', // Método HTTP
              data: {
                id: idRandom,
                status: status
              },
              success: function(response) {
                // Manejar la respuesta del servidor
                console.log(response); // Muestra la respuesta en la consola
                if (response === 'si') {
                  // alert('Parámetros recibidos correctamente.');
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


          // Parsear los productos desde JSON
          const productos = JSON.parse(clienteData.cliente.productos);

          console.log(productos);
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

          // Actualizar el contenido del offcanvas con la información del cliente
          console.log(clienteData.cliente.productos);
          productos_nuevos.innerHTML = `
              ${generarProductosHTML(clienteData.cliente.productos)} <!-- Genera HTML para los productos -->
          `;

          // Mostrar el offcanvas
          const offcanvasElement = new bootstrap.Offcanvas(document.getElementById('offcanvasRightTerminado'));
          offcanvasElement.show();
        })
        .catch(error => {
          console.error('Error al buscar el cliente:', error);
          alert('No se pudo obtener la información del cliente.');
        });
    }

    // Cliente por ID
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
          return data; // Devuelve los datos del cliente y productos
        });
    }

    // PRODUCTOS
    function generarProductosHTML(productosJSON) {
      const productos = JSON.parse(productosJSON); // Parsear los productos desde JSON
      let productosHTML = '';

      productos.forEach(producto => {
        productosHTML += `
            <div class="mb-3" style="border-radius: 5px; border: 1px solid #198754;">
                <div style="padding: 15px 6px; border-top: 1px solid #0000001c; border-bottom: 1px solid #0000001c;">
                    <strong><b>${producto.nombre}</b></strong><br>
                </div>
                <div style="padding: 0px 6px;">
                    <span><b>Salsas:</b> ${producto.salsas.join(', ') || 'Ninguna'}</span><br>
                </div>
                <div style="padding: 0px 6px;">
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
        url: 'accions/status.php', // URL del archivo PHP
        type: 'POST', // Método HTTP
        data: {
          id: idRandom,
          status: status
        },
        success: function(response) {
          if (response === 'si') {
            // alert('Parámetros recibidos correctamente.');

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
  </script>
</body>

</html>