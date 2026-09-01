<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gobierno de Metepec | Sitio Oficial</title>

    <!-- CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- Estilos del sitio (css/) -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/widgets.css">
</head>
<body>

    <?php include './header.php'; ?>

    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Metepec Ciudad que Funciona</h1>
            <p class="lead mb-5">Encuentra trámites, pagos, servicios e información relevante de Metepec.</p>

            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Ej. Pago de predio, SARE, Actas, Infracciones..." aria-label="Buscar trámites">
                <button class="btn btn-met-accent" type="button" onclick="performSearch()"><i class="fa-solid fa-search"></i> Buscar</button>
            </div>
        </div>
    </section>

    <!-- Lo más solicitado (Accesos Rápidos) -->
    <section class="container quick-access-wrapper mb-5">
        <div class="row g-3 g-md-4 justify-content-center">
            <div class="col-6 col-md-3 col-lg-2">
                <a href="./archivo-municipal" class="qa-card">
                    <i class="fa-solid fa-box-archive" style="color: var(--met-verde-amarillo);"></i>
                    <h6>Archivo Municipal</h6>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <a href="./consultar-multas-infracciones" class="qa-card">
                    <i class="fa-solid fa-car-burst" style="color: var(--met-naranja);"></i>
                    <h6>Infracciones en Línea</h6>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <a href="https://odapasmetepec.gob.mx:8090/opdapasml/hola" class="qa-card">
                    <i class="fa-solid fa-faucet-drip" style="color: var(--met-cian);"></i>
                    <h6>Pago Agua</h6>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <a href="https://pagospredialmetepec.mx/" class="qa-card">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    <h6>Pago Predio</h6>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <a href="https://metepec.gob.mx/empleo/" class="qa-card">
                    <i class="fa-solid fa-briefcase" style="color: var(--met-lavanda);"></i>
                    <h6>Portal de Empleo</h6>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <a href="./transparencia-financiera" class="qa-card">
                    <i class="fa-solid fa-hand-holding-dollar" style="color: var(--met-cian);"></i>
                    <h6>Transparencia Financiera</h6>
                </a>
            </div>
            
        </div>
    </section>

    <section class="container mb-5 py-4">
        <div class="row align-items-center mb-4">
            <div class="col-md-3 d-none d-md-block"></div>
            <div class="col-12 col-md-6 text-center mb-3 mb-md-0">
                <h2 class="section-title d-inline-block mb-2">Últimas Noticias</h2>
                <p class="text-muted mb-0">Entérate de las novedades, avisos y eventos en Metepec.</p>
            </div>
            <div class="col-12 col-md-3 d-flex justify-content-center justify-content-md-end">
                <div class="news-controls d-flex gap-2">
                    <button class="btn btn-sm rounded-circle shadow-sm" type="button" data-bs-target="#noticiasCarousel" data-bs-slide="prev" aria-label="Anterior">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                    <button class="btn btn-sm rounded-circle shadow-sm" type="button" data-bs-target="#noticiasCarousel" data-bs-slide="next" aria-label="Siguiente">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="noticiasCarousel" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner pb-2">
                
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                        
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                                <div class="ratio ratio-1x1">
                                    <img src="./img/cards/card-455.jpg" class="object-fit-cover" alt="">
                                </div>
                                <div class="card-body p-3 d-flex flex-column">
                                    <div class="mb-2 d-flex align-items-center">
                                        <span class="badge rounded-pill" style="background-color: var(--met-naranja);">Aviso</span>
                                        <small class="text-muted ms-2" style="font-size: 0.75rem;">Ahora</small>
                                    </div>
                                    <h6 class="card-title fw-bold text-dark mb-2">Actualización de Ruta para la Recolección de Residuos</h6>
                                    <p class="card-text text-muted small mb-3 line-clamp-3">Consulta las rutas del turno matutino para la recolección de residuos en nuestro municipio.</p>
                                    <a href="./img/cards/card-455.jpg" class="text-decoration-none fw-bold mt-auto small" style="color: var(--met-celeste);">Ver Imagen <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                                <div class="ratio ratio-1x1">
                                    <img src="./img/cards/card-456.jpg" class="object-fit-cover" alt="">
                                </div>
                                <div class="card-body p-3 d-flex flex-column">
                                    <div class="mb-2 d-flex align-items-center">
                                        <span class="badge rounded-pill" style="background-color: var(--met-naranja);">Aviso</span>
                                        <small class="text-muted ms-2" style="font-size: 0.75rem;">Ahora</small>
                                    </div>
                                    <h6 class="card-title fw-bold text-dark mb-2">Actualización de Ruta para la Recolección de Residuos</h6>
                                    <p class="card-text text-muted small mb-3 line-clamp-3">Consulta las rutas del turno matutino para la recolección de residuos en nuestro municipio.</p>
                                    <a href="./img/cards/card-456.jpg" class="text-decoration-none fw-bold mt-auto small" style="color: var(--met-celeste);">Ver Imagen <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                                <div class="ratio ratio-1x1">
                                    <img src="./img/cards/card-352.jpg" class="object-fit-cover" alt="">
                                </div>
                                <div class="card-body p-3 d-flex flex-column">
                                    <div class="mb-2 d-flex align-items-center">
                                        <span class="badge rounded-pill" style="background-color: var(--met-amarillo);">Tránsito</span>
                                        <small class="text-muted ms-2" style="font-size: 0.75rem;">Ahora</small>
                                    </div>
                                    <h6 class="card-title fw-bold text-dark mb-2">Programa Hoy No Circula</h6>
                                    <p class="card-text text-muted small mb-3 line-clamp-3">¿Tu auto aplica? Revisa color, terminación de placa y holograma.</p>
                                    <a href="./img/cards/card-352.jpg" class="text-decoration-none fw-bold mt-auto small" style="color: var(--met-celeste);">Ver Imagen <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                                <div class="ratio ratio-1x1">
                                    <img src="./img/cards/card-417.jpg" class="object-fit-cover" alt="">
                                </div>
                                <div class="card-body p-3 d-flex flex-column">
                                    <div class="mb-2 d-flex align-items-center">
                                        <span class="badge rounded-pill" style="background-color: var(--met-lavanda);">Desarrollo Económico</span>
                                        <small class="text-muted ms-2" style="font-size: 0.75rem;">Ahora</small>
                                    </div>
                                    <h6 class="card-title fw-bold text-dark mb-2">Impulsa tu Negocio con Crédito PyME</h6>
                                    <p class="card-text text-muted small mb-3 line-clamp-3">SECTUR y BBVA impulsan el turismo nacional con la estrategia “Avanzamos por México”.</p>
                                    <a href="https://www.bbva.mx/empresas/landings/alianzas/colaboracion-sectur.html" class="text-decoration-none fw-bold mt-auto small" style="color: var(--met-celeste);">Ir al sitio<i class="fa-solid fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                                <div class="ratio ratio-1x1">
                                    <img src="./img/cards/card-375.jpg" class="object-fit-cover" alt="">
                                </div>
                                <div class="card-body p-3 d-flex flex-column">
                                    <div class="mb-2 d-flex align-items-center">
                                        <span class="badge rounded-pill" style="background-color: var(--met-primary);">Obras Públicas</span>
                                        <small class="text-muted ms-2" style="font-size: 0.75rem;">Ahora</small>
                                    </div>
                                    <h6 class="card-title fw-bold text-dark mb-2">FAISMUN 2025</h6>
                                    <p class="card-text text-muted small mb-3 line-clamp-3">Consulta el fondo de aportaciones FAISMUN 2025 Metepec en este enlace.</p>
                                    <a href="https://metepec.gob.mx/pagina/documentos/temporales/2026/DIFUSION%20DE%20OBRAS%20FAISMUN%202026.pdf" class="text-decoration-none fw-bold mt-auto small" style="color: var(--met-celeste);">Ir al documento<i class="fa-solid fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 text-center py-5">
                            <p class="text-muted">Más noticias próximamente...</p>
                        </div>
                       
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="text-center">
            <h2 class="section-title d-inline-block">Organismos y Direcciones</h2>
            <p class="text-muted mb-5">Conoce las dependencias centralizadas y descentralizadas a tu servicio.</p>
        </div>

        <div class="row g-4">
            <div class="col-6 col-md-4 col-lg-3">
                <a href="https://opdapasmetepec.gob.mx/" class="org-card org-color-1 shadow-sm">
                    <div class="org-card-content">
                        <i class="fa-solid fa-hand-holding-droplet"></i>
                        <h5>OPDAPAS</h5>
                        <small class="text-muted d-block mt-2">Agua Potable y Saneamiento</small>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="https://difmetepec.gob.mx/" class="org-card org-color-2 shadow-sm">
                    <div class="org-card-content">
                        <i class="fa-solid fa-people-roof"></i>
                        <h5>DIF Metepec</h5>
                        <small class="text-muted d-block mt-2">Desarrollo Integral de la Familia</small>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="https://metepec.gob.mx/pagina_imcufidem/" class="org-card org-color-3 shadow-sm">
                    <div class="org-card-content">
                        <i class="fa-solid fa-medal"></i>
                        <h5>IMCUFIDEM</h5>
                        <small class="text-muted d-block mt-2">Cultura Física y Deporte</small>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="./medio-ambiente" class="org-card org-color-4 shadow-sm">
                    <div class="org-card-content">
                        <i class="fa-solid fa-leaf"></i>
                        <h5>Medio Ambiente</h5>
                        <small class="text-muted d-block mt-2">Sustentabilidad y Ecología</small>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="./cultura" class="org-card org-color-5 shadow-sm">
                    <div class="org-card-content">
                        <i class="fa-solid fa-masks-theater"></i>
                        <h5>Cultura</h5>
                        <small class="text-muted d-block mt-2">Dirección de Cultura y Turismo</small>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="./seguridad" class="org-card org-color-6 shadow-sm">
                    <div class="org-card-content">
                        <i class="fa-solid fa-shield-halved"></i>
                        <h5>Seguridad</h5>
                        <small class="text-muted d-block mt-2">Seguridad Pública y Tránsito</small>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="./desarrollo-economico" class="org-card org-color-7 shadow-sm">
                    <div class="org-card-content">
                        <i class="fa-solid fa-chart-line"></i>
                        <h5>Desarrollo Económico</h5>
                        <small class="text-muted d-block mt-2">Fomento al Empleo y SARE</small>
                    </div>
                </a>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <a href="./igualdad-genero" class="org-card org-color-8 shadow-sm">
                    <div class="org-card-content">
                        <i class="fa-solid fa-scale-balanced"></i>
                        <h5>Igualdad de Género</h5>
                        <small class="text-muted d-block mt-2">Atención y Prevención</small>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="container mb-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="promo-banner shadow">
                    <div class="promo-content">
                        <span class="badge bg-white text-dark mb-3 px-3 py-2 rounded-pill">App Ciudadana</span>
                        <h2 class="fw-bold mb-3">Descarga Metepec *7311</h2>
                        <p class="mb-4">Realiza reportes, solicita servicios públicos y mantén contacto directo con tu gobierno desde la palma de tu mano.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <button class="btn btn-light rounded-pill fw-bold text-primary px-4"><a href="https://play.google.com/store/apps/details?id=mx.gob.edomex.metepec.gc&hl=es_MX" class="text-decoration-none" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-google-play me-2"></i> Google Play</a></button>
                            <button class="btn btn-light rounded-pill fw-bold text-primary px-4"><a href="https://apps.apple.com/mx/app/metepec-7311/id1608414526" class="text-decoration-none" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-app-store-ios me-2"></i> App Store</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="section-title mb-4">Programas Destacados</h3>
                <div class="list-group list-group-flush shadow-sm rounded-4 overflow-hidden border">
                    <a href="https://medicoentucasametepec.com.mx/" class="list-group-item list-group-item-action p-4 d-flex align-items-center">
                        <div class="bg-light rounded-circle p-3 me-4 text-center" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-house-medical fs-4" style="color: var(--met-naranja);"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 fw-bold text-dark">Médico en tu Casa</h5>
                            <p class="mb-0 text-muted small">Atención médica gratuita hasta la puerta de tu hogar para grupos vulnerables.</p>
                        </div>
                    </a>
                    <a href="https://www.metrohealth.com.mx/landing-metepec.html" class="list-group-item list-group-item-action p-4 d-flex align-items-center">
                        <div class="bg-light rounded-circle p-3 me-4 text-center" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-stethoscope fs-4" style="color: var(--met-verde-amarillo);"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 fw-bold text-dark">Red de Salud Familias Felices</h5>
                            <p class="mb-0 text-muted small">Atención médica general, examenes de vista, procedimientos visuales y más.</p>
                        </div>
                    </a>
                    <a href="https://metepec.gob.mx/geoportal/" class="list-group-item list-group-item-action p-4 d-flex align-items-center">
                        <div class="bg-light rounded-circle p-3 me-4 text-center" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-map-location-dot fs-4" style="color: var(--met-celeste);"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 fw-bold text-dark">Geoportal Metepec</h5>
                            <p class="mb-0 text-muted small">Consulta el uso de suelo, cartografía y ordenamiento territorial del municipio.</p>
                        </div>
                    </a>
                    <a href="https://metepec.gob.mx/atlas_genero/" class="list-group-item list-group-item-action p-4 d-flex align-items-center">
                        <div class="bg-light rounded-circle p-3 me-4 text-center" style="width: 60px; height: 60px;">
                            <i class="fa-solid fa-venus-mars fs-4" style="color: var(--met-rosa);"></i>
                        </div>
                        <div>
                            <h5 class="mb-1 fw-bold text-dark">Atlas de Género</h5>
                            <p class="mb-0 text-muted small">Información estadística y geográfica para la igualdad y erradicación de violencia.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="section-title d-inline-block">Gobierno Estatal y Federal</h2>
            <p class="text-muted">Enlaces directos a trámites y servicios de otros niveles de gobierno.</p>
        </div>

        <div class="row g-4">
            <!-- Gobierno Estatal -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white border-0 pt-4 pb-0 text-center">
                        <img src="./img/index/gobierno-estatal.png" alt="Gobierno del Estado de México" class="img-fluid w-50 mb-0">
                    </div>
                    <div class="card-body p-4">
                        <div class="list-group list-group-flush">
                            <a href="https://edomex.gob.mx/" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-bottom">
                                <i class="fa-solid fa-arrow-up-right-from-square me-3" style="color: var(--met-celeste); width: 20px;"></i>
                                <span class="fw-semibold text-dark">Portal edomex.gob.mx</span>
                            </a>
                            <a href="https://sam.secogem.gob.mx/datosciudadano/create" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-bottom">
                                <i class="fa-solid fa-headset me-3" style="color: var(--met-celeste); width: 20px;"></i>
                                <span class="fw-semibold text-dark">Sistema de Atención Mexiquense (SAM)</span>
                            </a>
                            <a href="https://retys.edomex.gob.mx/" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-bottom">
                                <i class="fa-solid fa-file-signature me-3" style="color: var(--met-celeste); width: 20px;"></i>
                                <span class="fw-semibold text-dark">RETyS (Registro Estatal de Trámites y Servicios)</span>
                            </a>
                            <a href="https://edomex.gob.mx/certificado_no_antecedentes_penales_edom%C3%A9x" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                                <i class="fa-solid fa-id-card me-3" style="color: var(--met-celeste); width: 20px;"></i>
                                <span class="fw-semibold text-dark">Certificado de Antecedentes Penales</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gobierno Federal -->
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white border-0 pt-4 pb-0 text-center">
                        <img src="./img/index/gobierno-federal.png" alt="Gobierno de México" class="img-fluid w-50 mt-2 mb-3">
                    </div>
                    <div class="card-body p-4">
                        <div class="list-group list-group-flush">
                            <a href="https://www.gob.mx/" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-bottom">
                                <i class="fa-solid fa-arrow-up-right-from-square me-3" style="color: var(--met-naranja); width: 20px;"></i>
                                <span class="fw-semibold text-dark">Portal gob.mx</span>
                            </a>
                            <a href="https://www.gob.mx/curp/" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-bottom">
                                <i class="fa-solid fa-fingerprint me-3" style="color: var(--met-naranja); width: 20px;"></i>
                                <span class="fw-semibold text-dark">Trámite de CURP</span>
                            </a>
                            <a href="https://www.sat.gob.mx/portal/public/tramites/constancia-de-situacion-fiscal" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center py-3 border-bottom">
                                <i class="fa-solid fa-file-invoice-dollar me-3" style="color: var(--met-naranja); width: 20px;"></i>
                                <span class="fw-semibold text-dark">Constancia de Situación Fiscal (SAT)</span>
                            </a>
                            <a href="https://citas.sre.gob.mx/" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center py-3">
                                <i class="fa-solid fa-passport me-3" style="color: var(--met-naranja); width: 20px;"></i>
                                <span class="fw-semibold text-dark">Cita para Pasaporte</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-5">
        <div class="text-center mb-5">
            <h2 class="section-title d-inline-block">Transparencia y Rendición de Cuentas</h2>
            <p class="text-muted">Acceso a la información pública gubernamental.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3">
                <a href="https://consultapublicamx.plataformadetransparencia.org.mx/vut-web/faces/view/denuncia/denunciaCiudadana.xhtml" target="_blank" class="qa-card h-100">
                    <i class="fa-solid fa-magnifying-glass-chart fs-1 mb-3" style="color: var(--met-azul);"></i>
                    <h6 class="text-dark">Plataforma Nacional de Transparencia</h6>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="https://consultapublicamx.plataformadetransparencia.org.mx/vut-web/faces/view/consultaPublica.xhtml?idEntidad=MTU=&idSujetoObligado=MA==#inicio" target="_blank" class="qa-card h-100">
                    <i class="fa-solid fa-scale-unbalanced fs-1 mb-3" style="color: var(--met-lavanda);"></i>
                    <h6 class="text-dark">Consulta Obligaciones (LGT Art. 64)</h6>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="https://www.ipomex.org.mx/ipo3/lgt/indice/METEPEC.web?token=03AFcWeA5ZWRQKR3dDk5v1FZkME_yo1gmLUewlKc9PPNGfTas5LKkqQ50jtlqNNMk0FvykhNIQS52WmNBzOCfr_p0K0qp9e-Tz_Gwl3MnfFx0fjCD6wNiz39be2naE6iizSEnXvoCzyAy6wBAhfUWF1fibkIkM83QKBxgi-dXfXpV-_8qVuaNPDg0g46EZA-WB6WyXhU0eLbG2JlZEJ_kIQu2ZeYayzWMlsf4F0sP5eTxaO6rwZI-ykDip6bEtkgQtCb1NssGOUiWc24MUc4YEAouwh-vCbRua9_QNhGxGe3clPWuS5_eLTbPTeZJijPOwPqm24A7u6iXVXplS_kD9f47fWoYmHFha9hkMdmgEacSZHaoJ2gZWQkGuhEAnIL9k9KJzuV28KoY47daPf5fvy3rE5SGqk09o0WJVsgF5xYVm2Xo_xNYX9IAOStwSk5kvHNTdoxmrSwrL0GmmwLQOxYajjNhxP9oaG8RMl3OX5yFyP7ZXAdZUGFo8KxIeHiq2PdKH8dRlV_3b-tJCtAmpdJ5tK4tc5KshV2CyRx-8i0CZLDkFsmAW9RvMrbd8sG91gbuKn8yxw8Qb3pmajajldkysRIWZSO41ZUywJDsqnbmH0WVunpG1JMyzmI51_i2dkwGALNdauVMn6-FUQbmfIr5nGrkWN3UpKZzIMxwf1UqbQn0SHmEqYo3movE-BD7n7COg8QNbqAcPdNibFW6xSli61PDEcTMh1x5kmd1g1CuQiL0v4DH5r_J-crvw6PcYfUh93dIIxhVCY6pccrUQzCAxX762p8TkmykKkOjFFGPh7sfz1YG67s2lE-pEEejAsoqHprsuS7OnUiGNlCcyNAKgbq_p9pRVmuUZTpup6DdGz8exsMRltW4Mxu51cKLzhQPZRJLMxG4i" target="_blank" class="qa-card h-100">
                    <i class="fa-regular fa-folder-open fs-1 mb-3" style="color: var(--met-verde-amarillo);"></i>
                    <h6 class="text-dark">IPOMEX 3.0</h6>
                </a>
            </div>
            <div class="col-6 col-md-3">
                <a href="https://infoem2.ipomex.org.mx/ipomex/#/obligaciones/146" target="_blank" class="qa-card h-100">
                    <i class="fa-solid fa-folder-tree fs-1 mb-3" style="color: var(--met-cian);"></i>
                    <h6 class="text-dark">IPOMEX 4.0</h6>
                </a>
            </div>
        </div>
    </section>

    <!-- MODAL DE ANUNCIOS -->
    <div class="modal fade" id="modal_anuncio" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg overflow-hidden" style="border-radius: 15px;">
                <div class="modal-body p-0 position-relative">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3 bg-white p-2 rounded-circle shadow-sm" data-bs-dismiss="modal" aria-label="Close" style="z-index: 10;"></button>

                    <img id="imagen_anuncio" src="" class="img-fluid w-100" alt="Anuncio" style="display: none;">
                    <video id="video_anuncio" controls style="display: none; max-width: 100%;"></video>

                    <div class="p-4 bg-white text-center">
                        <div class="d-grid gap-3 d-md-flex justify-content-md-center mb-3">
                            <a id="link_pago" href="#" target="_blank" class="btn btn-outline-primary px-4 py-2">
                                <i class="fa-solid fa-credit-card me-2"></i>Pagar en Línea
                            </a>
                            <a id="link_mapa" href="#" target="_blank" class="btn btn-outline-primary px-4 py-2">
                                <i class="fa-solid fa-location-dot me-2"></i>Ver Ubicación
                            </a>
                            <a id="link_pdf" href="#" target="_blank" class="btn btn-outline-primary px-4 py-2">
                                <i class="fa-solid fa-file-pdf me-2"></i>Ver PDF
                            </a>
                        </div>
                        <button id="btn_no_mostrar" class="btn btn-outline-primary px-4 py-2">
                            <i class="fa-regular fa-eye-slash me-1"></i>No mostrar por hoy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include './footer.php'; ?>

    <!-- Scripts -->
    <script src="./js/header.js"></script>

</body>
</html>
