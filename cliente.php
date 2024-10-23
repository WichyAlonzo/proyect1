<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Órdenes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles__102aql.css?v=<?php echo time(); ?>">
</head>

<body>
  <audio id="notificationSound" src="a.mp3" preload="auto"></audio>

  <!-- Aceptar modal -->
  <div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width: 61%;">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title fw-900" id="offcanvasRightLabel"></h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="row g-0">
        <div class="col-sm-6 col-md-6 mx-0">
          <div class="mx-3">
            <div style="padding: 10px;">
              <span style="font-weight: 900;">Productos</span>
            </div>
            <div class="productos_nuevos____ scroll-productos">
              <!-- Productos -->
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="mx-3">
            <div style="padding: 10px;">
              <span class="fw-900">Datos del cliente</span>
            </div>
            <!-- Datos cliente -->
            <div class="mb-3 space__client">
              <div class="name-client">
                <span>Cliente <span class="fw-bolder cliente_nombre"></span></span>
              </div>
              <div class="address-client">
                <span>Dirección <span class="fw-bolder cliente_address"></span></span>
              </div>
              <div class="mx-2">
                <a href="" class="number_whats fw-bolder btn btn-outline-success w-100">Enviar WhatsApp</a>
                <a href="" class="number_phone fw-bolder btn btn-outline-dark w-100 mt-2">Llamar al Cliente</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row button_footer_info">
        <button class="btn btn-dark w-100 fw-bolder order_nueva">ACEPTAR PEDIDO</button>
      </div>
    </div>
    <div id="offcanvas-footer" class="total_footer_client">
      <div class="d-flex justify-content-between">
        <div style="padding-left: 6px;">
          <span class="fw-900"><b>Envio</b></span>
        </div>
        <div style="padding-left: 6px;">
          <b><span class="subtotal_order__ fw-900">$22</span></b>
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <div style="padding-left: 6px;">
          <span class="fw-900"><b>Total</b></span>
        </div>
        <div style="padding-left: 6px;">
          <b><span class="total_order__ fw-900">149</span></b>
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
          <div class="mx-3">
            <div style="padding: 10px;">
              <span style="font-weight: 900;">Productos</span>
            </div>
            <div class="productos_preparados____ scroll-productos">
              <!-- Productos -->
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="mx-3">
            <div style="padding: 10px;">
              <span class="fw-900">Datos del cliente</span>
            </div>
            <!-- Datos cliente -->
            <div class="mb-3 space__client">
              <div class="name-client">
                <span>Cliente <span class="fw-bolder cliente_nombre"></span></span>
              </div>
              <div class="address-client">
                <span>Dirección <span class="fw-bolder cliente_address"></span></span>
              </div>
              <div class="mx-2">
                <a href="" class="number_whats fw-bolder btn btn-outline-success w-100">Enviar WhatsApp</a>
                <a href="" class="number_phone fw-bolder btn btn-outline-dark w-100 mt-2">Llamar al Cliente</a>
              </div>
            </div>
          </div>
          <div class="mx-3">
            <div style="padding: 10px;">
              <span class="fw-900">Datos del Repartidor</span>
            </div>
            <div class="search__repa">
              <div class="d-flex align-items-center">
                <div class="spinner-grow text-primary" role="status" style="width: 7px!important;height: 7px!important;">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="my-1 px-1 buscar-rt"><span style="font-weight: 600;">Buscando Repa</span></div>
              </div>
            </div>
            <!-- Datos cliente -->
            <div class="mb-3 space__repa d-none">
              <div class="name-client">
                <span>Repa <span class="fw-bolder repa_nombre"></span></span>
              </div>
              <div class="d-none mx-2 mt-1">
                <a href="" class="repa_number_whats fw-bolder btn btn-outline-success w-100">Enviar WhatsApp</a>
                <a href="" class="repa_number_phone fw-bolder btn btn-outline-dark w-100 mt-2">Llamar al Cliente</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row button_footer_info">
        <button class="btn btn-primary w-100 fw-bolder order_preparada">PEDIDO LISTO</button>
      </div>
    </div>
    <div id="offcanvas-footer" class="total_footer_client">
      <div class="d-flex justify-content-between">
        <div style="padding-left: 6px;">
          <span class="fw-900"><b>Envio</b></span>
        </div>
        <div style="padding-left: 6px;">
          <b><span class="subtotal_order__ fw-900">$22</span></b>
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <div style="padding-left: 6px;">
          <span class="fw-900"><b>Total</b></span>
        </div>
        <div style="padding-left: 6px;">
          <b><span class="total_order__ fw-900">149</span></b>
        </div>
      </div>
    </div>
  </div>
  <!-- </div> -->

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
          <div class="mx-3">
            <div style="padding: 10px;">
              <span class="fw-900">Datos del cliente</span>
            </div>
            <!-- Datos cliente -->
            <div class="mb-3 space__client">
              <div class="name-client">
                <span>Cliente <span class="fw-bolder cliente_nombre"></span></span>
              </div>
              <div class="address-client">
                <span>Dirección <span class="fw-bolder cliente_address"></span></span>
              </div>
              <div class="mx-2">
                <a href="" class="number_whats fw-bolder btn btn-outline-success w-100">Enviar WhatsApp</a>
                <a href="" class="number_phone fw-bolder btn btn-outline-dark w-100 mt-2">Llamar al Cliente</a>
              </div>
            </div>
          </div>
          <div class="mx-3">
            <div style="padding: 10px;">
              <span class="fw-900">Datos del Repartidor</span>
            </div>
            <div class="search__repa">
              <div class="d-flex align-items-center">
                <div class="spinner-grow text-primary" role="status" style="width: 7px!important;height: 7px!important;">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <div class="my-1 px-1 buscar-rt"><span style="font-weight: 600;">Buscando Repa</span></div>
              </div>
            </div>
            <!-- Datos cliente -->
            <div class="mb-3 space__repa d-none">
              <div class="name-client">
                <span>Repa <span class="fw-bolder repa_nombre"></span></span>
              </div>
              <div class="d-none mx-2 mt-1">
                <a href="" class="repa_number_whats fw-bolder btn btn-outline-success w-100">Enviar WhatsApp</a>
                <a href="" class="repa_number_phone fw-bolder btn btn-outline-dark w-100 mt-2">Llamar al Cliente</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="offcanvas-footer" style="position: absolute;bottom:0px;background: #f2f2f2;width: 100%;padding: 15px;">
      <div class="d-flex justify-content-between">
        <div style="padding-left: 6px;">
          <span class="fw-900"><b>Envio</b></span>
        </div>
        <div style="padding-left: 6px;">
          <b><span class="subtotal_order__ fw-900">$22</span></b>
        </div>
      </div>
      <div class="d-flex justify-content-between">
        <div style="padding-left: 6px;">
          <span class="fw-900"><b>Total</b></span>
        </div>
        <div style="padding-left: 6px;">
          <b><span class="total_order__ fw-900">149</span></b>
        </div>
      </div>
    </div>
  </div>



  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 21%;">
    <div class="offcanvas-header">
    </div>
    <div class="offcanvas-body" style="padding: 0px !important;">
      <div class="py3" style="height: 24px;">

      </div>
      <a class="text-decoration-none" href="cliente">
        <div class="active__menu p-2 menu__action_bar">
          <!-- Icono -->
          <span class="mx-1">Pedidos</span>
        </div>
      </a>
      <a class="text-decoration-none" href="productos">
        <div class="p-2 menu__action_bar">
          <!-- Icono -->
          <span class="mx-1">Menú</span>
        </div>
      </a>
    </div>
  </div>

  <div class="navbar">
    <div class="left-section">
      <div class="menu-icon">
        <!-- <button class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">xx</button> -->
        <svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="width: 27px;height: 27px;color: #000ba6;">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
      </div>
      <div class="logo">
        <img src="https://wichyalonzo.com/delivery/business/cactuswings/icon.png" alt="CactusWings Delivery Logo">
        <h6 class="aliados"><b>Delivery</b></h6>
      </div>
    </div>

    <div class="right-section">
      <div class="d-none code-info">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
            <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375z" />
            <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396z" />
          </svg>
          <span class="code-label">Código RT: <span class="code-number">5796</span></span>
        </div>
        <span class="code-expiration">Vence: nov. 05, 2024</span>
      </div>
      <div class="d-flex align-items-center dropdown mx-4">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="display: flex;align-items: center;">
          <div class="spinner-grow text-warning mx-1" role="status" style="width: 7px;height: 7px;color: #00a639 !important;">
            <span class="visually-hidden">Loading...</span>
          </div>
          <span class="fw-bold">Tienda abierta</span>
        </button>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item" type="button">Cerrar ahora</button></li>
        </ul>
      </div>
      <i class="fas fa-bell notification-icon"></i>
    </div>
  </div>
  <h5 class="mx-3 mt-3 fw-bold">Pedidos</h5>
  <!-- Divs  -->
  <div class="mx-3 mt-2">
    <div class="row">
      <div class="col-12 col-md-4 mb-4" style="padding: 6px!important;">
        <!-- Categoria -->
        <div class="orden-card nuevos">
          <div class="px-1 py-1 border-bottom" style="display: flex;align-items: center;">
            <h6 class="pb-2 mb-0 p-2 text-uppercase text__men____">Por aceptar</h6>
            <span class="mx-3 badge text__men____" style="color: black;border: 1px solid #00000038;" id="nuevo-count">0</span>
          </div>
          <!-- Pedido -->
          <div class="p-2 d-none" id="nuevo" style="height: 93%;line-height: 1em;overflow-x: hidden;overflow-y: scroll;width: 100%;"></div>
          <div class="p-3 menssage__divs nuevoDivs">
            <span class="font_line_text">Aqui veras nuevos pedidos de tus clientes. Acepalas para confirmar que las prepararás</span>
          </div>
        </div>
      </div>
      <!-- Categoria -->
      <div class="col-12 col-md-4 col-sm-6 mb-4" style="padding: 6px!important;">
        <div class="orden-card">
          <div class="px-1 py-1 border-bottom" style="display: flex;align-items: center;">
            <h6 class="pb-2 mb-0 p-2 text-uppercase text__men____">En preparación</h6>
            <span class="mx-3 badge text__men____" style="color: black;border: 1px solid #00000038;" id="prepa-count">0</span>
          </div>
          <div class="p-2 d-none" id="preparado" style="height: 93%;line-height: 1em;overflow-x: hidden;overflow-y: scroll;width: 100%;"></div>
          <div class="p-3 menssage__divs preparadoDivs">
            <span class="font_line_text">Aqui veras los pedidos a preparar, el repa estara atento para recogerla</span>
          </div>
        </div>
      </div>
      <!-- Categoria -->
      <div class="col-12 col-md-4 mb-4" style="padding: 6px!important;">
        <div class="orden-card">
          <div class="px-1 py-1 border-bottom" style="display: flex;align-items: center;">
            <h6 class="pb-2 mb-0 p-2 text-uppercase text__men____">Por entregar </h6>
            <span class="mx-3 badge text__men____" style="color: black;border: 1px solid #00000038;" id="termi-count">0</span>
          </div>
          <div class="p-2 d-none" id="terminado" style="height: 93%;line-height: 1em;overflow-x: hidden;overflow-y: scroll;width: 100%;"></div>
          <div class="p-3 menssage__divs terminadoDivs">
            <span class="font_line_text">Aqui veras los pedidos a preparar, el repa estara atento para recogerla</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="assets/js/index.js?v=<?php echo time();  ?>"></script>
</body>

</html>