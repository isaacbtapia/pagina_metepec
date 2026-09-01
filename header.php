<?php
$current_page = basename($_SERVER['PHP_SELF'], ".php");
if ($current_page == '' || $current_page == 'index.php') {
    $current_page = 'index';
}

$is_inicio = ($current_page == 'index');
$is_tramites = in_array($current_page, ['tramites-linea', 'archivo-municipal', 'sugem', 'remtys']);
$is_gobierno = in_array($current_page, ['cabildo', 'staff-presidencia', 'direcciones', 'organismos-descentralizados', 'defensoria-municipal', 'cabildo-en-vivo', 'videos-cabildo']);
$is_comunidad = in_array($current_page, ['datos-abiertos', 'microportales', 'verificadores-municipales']);
?>
<!-- Top Bar -->
<div class="top-bar d-none d-lg-block">
    <div class="container d-flex justify-content-between align-items-center">
        <div>
            <!-- 
            <a href="#"><i class="fa-solid fa-envelope me-1"></i> contacto@metepec.gob.mx</a>
            <a href="#"><i class="fa-solid fa-phone me-1"></i> 722 235 8200</a>
            -->
        </div>
        <div>
            <a href="./avisos-privacidad">Avisos de Privacidad</a>
            <a href="./simplificacion-digitalizacion">Simplificación y Digitalización</a>
            <a href="./transparencia-financiera">Transparencia Financiera</a>
            <a href="./datos-abiertos">Datos Abiertos</a>
        </div>
    </div>
</div>

<!-- Header & Navbar -->
<header class="main-header">
    <nav class="navbar navbar-expand-xl navbar-light container py-2">
        <a class="navbar-brand d-flex align-items-center gap-2 gap-md-3" href="./index">
            <img src="./img/index/logo-edomex.png" alt="Gobierno del Estado de México" class="brand-logo logo-edomex" width="50" height="69">
            <img src="./img/index/escudo-metepec.png" alt="Escudo de Metepec" class="brand-logo logo-escudo" width="41" height="50">
            <img src="./img/index/logo-administracion.png" alt="Administración Pública Estatal" class="brand-logo logo-admin" width="1438" height="829">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $is_inicio ? 'active' : '' ?>" href="./index">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pagos en Línea</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://odapasmetepec.gob.mx:8090/opdapasml/hola">Pago de Agua</a></li>
                        <li><a class="dropdown-item" href="https://pagospredialmetepec.mx/">Pago de Predio</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= $is_tramites ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">Trámites y Servicios</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?= ($current_page == 'tramites-linea') ? 'active' : '' ?>" href="./tramites-linea">Trámites en línea</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'archivo-municipal') ? 'active' : '' ?>" href="./archivo-municipal">Archivo Municipal</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'remtys') ? 'active' : '' ?>" href="./remtys">REMTyS</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'sugem') ? 'active' : '' ?>" href="./sugem">SUGEM</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= $is_gobierno ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">Gobierno</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?= ($current_page == 'cabildo') ? 'active' : '' ?>" href="./cabildo">Cabildo</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'staff-presidencia') ? 'active' : '' ?>" href="./staff-presidencia">Staff de Presidencia</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'direcciones') ? 'active' : '' ?>" href="./direcciones">Direcciones</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'organismos-descentralizados') ? 'active' : '' ?>" href="./organismos-descentralizados">Organismos Descentralizados</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'defensoria-municipal') ? 'active' : '' ?>" href="./defensoria-municipal">Defensoría Municipal</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'cabildo-en-vivo') ? 'active' : '' ?>" href="./cabildo-en-vivo">Transmisiones en Vivo</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'videos-cabildo') ? 'active' : '' ?>" href="./videos-cabildo">Sesiones de Cabildo</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= $is_comunidad ? 'active' : '' ?>" href="#" data-bs-toggle="dropdown">Comunidad</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item <?= ($current_page == 'datos-abiertos') ? 'active' : '' ?>" href="./datos-abiertos">Datos Abiertos</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'microportales') ? 'active' : '' ?>" href="./microportales">Microportales</a></li>
                        <li><a class="dropdown-item" href="https://metepec.gob.mx/turismo/">Turismo</a></li>
                        <li><a class="dropdown-item <?= ($current_page == 'verificadores-municipales') ? 'active' : '' ?>" href="./verificadores-municipales">Verificadores Municipales</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex ms-xl-3 mt-3 mt-xl-0 gap-2">
                <button class="btn btn-met-primary rounded-pill px-4"> <a href="tel:+*7311" class="text-white text-decoration-none"><i class="fa-solid fa-mobile-screen me-2"></i>Llama *7311</a> </button>
            </div>
        </div>
    </nav>
</header>
