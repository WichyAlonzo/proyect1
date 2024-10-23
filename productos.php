<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles__102aql.css?v=<?php echo time(); ?>">
</head>

<body>
    <audio id="notificationSound" src="a.mp3" preload="auto"></audio>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel" style="width: 21%;">
        <div class="offcanvas-header">
        </div>
        <div class="offcanvas-body" style="padding: 0px !important;">
            <div class="py3" style="height: 24px;">

            </div>
            <div class="active__menu p-2 menu__action_bar">
                <!-- Icono -->
                <span class="mx-1">Pedidos</span>
            </div>
            <div class="p-2 menu__action_bar">
                <!-- Icono -->
                <span class="mx-1">Menú</span>
            </div>

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
            <div class="d-none d-flex align-items-center dropdown mx-4">
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
    <h5 class="mx-3 mt-3 fw-bold">Productos</h5>
    <!-- Divs  -->
    <div class="mx-3 mt-2">
        <div class="row">
            <div class="col-12 col-md-2 mb-4" style="padding: 6px!important;">
                <!-- Categoria -->
                <div class="orden-card nuevos">
                    <button class="mx-2 btn"><span class="text-primary fw-bolder">+ Agregar categoría</span></button>
                    <div class="px-1 py-1 border-bottom" style="display: flex;align-items: center;">
                        <h6 class="pb-2 mb-0 p-2 text-uppercase text__men____">Categorias</h6>
                    </div>
                    <!-- Mostrar las Categorias con el Div -->
                    <div class="px-2 py-2 bg-danger">
                        <span>Alitas</span>
                    </div>
                    <div class="px-2 py-2 bg-danger">
                        <span>Boneless</span>
                    </div>
                </div>
            </div>
            <!-- Categoria -->
            <div class="col-12 col-md-2 col-sm-6 mb-4" style="padding: 6px!important;">
                <div class="orden-card">
                    <button class="mx-2 btn"><span class="text-primary fw-bolder">+ Agregar producto</span></button>
                    <div class="px-1 py-1 border-bottom" style="display: flex;align-items: center;">
                        <h6 class="pb-2 mb-0 p-2 text-uppercase text__men____">Productos</h6>
                    </div>
                    <div class="px-2 py-2 bg-danger" style="width: 100%;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis; ">
                        <span>15 Alitas + Ensalda + Papas Rojas </span>
                    </div>
                    <!-- Mostrar los prouctos con el div -->
                </div>
            </div>
            <!-- Categoria -->
            <div class="col-12 col-md-8 mb-4" style="padding: 6px!important;">
                <div class="orden-card">
                    <div class="m-3">
                        <img src="https://wichyalonzo.com/delivery/business/cactuswings/alitas.png" class="img-fluid img_product_admin" alt="">

                        <label class="my-2 label_input">Nombre</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="input__st form-control" placeholder="Nombre del producto" aria-label="Nombre del producto" aria-describedby="addon-wrapping">
                        </div>
                        <label class="mt-4 mb-2 label_input">Descripción</label>
                        <div class="input-group flex-nowrap">
                            <textarea type="text" class="input__st form-control" placeholder="Nombre del producto" aria-label="Nombre del producto" aria-describedby="addon-wrapping"></textarea>
                        </div>
                        <label class="mt-4 mb-2 label_input">Precio</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="input__st form-control" placeholder="Nombre del producto" aria-label="Nombre del producto" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>