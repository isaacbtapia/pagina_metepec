<?php
/* ============================================================
   FOOTER.PHP — Botones flotantes + Footer + Scripts globales
   Se incluye al final de todas las páginas: <?php include __DIR__ . '/footer.php'; ?>
============================================================ */
?>

<!-- Scripts globales -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="floating-container acc-btn-container">
    <div class="acc-panel" id="accessibilityPanel">
        <h6 class="fw-bold mb-3" style="color: var(--met-primary); border-bottom: 1px solid #eee; padding-bottom: 10px;">Accesibilidad</h6>
        <div class="acc-option" onclick="toggleTextSize()">
            <i class="fa-solid fa-text-height"></i>
            <span>Aumentar Tamaño</span>
        </div>
        <div class="acc-option" onclick="toggleHighContrast()">
            <i class="fa-solid fa-circle-half-stroke"></i>
            <span>Alto Contraste</span>
        </div>
        <div class="acc-option" onclick="resetAccessibility()">
            <i class="fa-solid fa-rotate-left"></i>
            <span>Restablecer</span>
        </div>
    </div>
    <div class="btn-accesibilidad" onclick="toggleAccPanel()" title="Opciones de Accesibilidad">
        <i class="fa-solid fa-universal-access"></i>
    </div>
</div>

<!-- <div class="floating-container porfirio-btn-container">
    <a href="./porfirio.php" class="btn-porfirio" title="Asistente Virtual">
        <div class="porfirio-tooltip">¡Hola, soy Porfirio! ¿En qué te ayudo?</div>
        <i class="fa-solid fa-robot"></i>
    </a>
</div> -->

<footer>
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <img src="./img/index/logo-administracion-blanco.png" alt="Logo Metepec Blanco" class="mb-4 w-50 img-fluid">
                <p>José Vicente Villada 330, Barrio del Espíritu Santo, Centro, Ciudad Típica de Metepec, C.P. 52140.</p>
                <p><i class="fa-solid fa-phone me-2"></i> Tel: 722 235 8200</p>
            </div>
            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title">Gobierno</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#">Cabildo</a></li>
                    <li class="mb-2"><a href="#">Directorio</a></li>
                    <li class="mb-2"><a href="#">Sesiones de Cabildo</a></li>
                    <li class="mb-2"><a href="#">Derechos Humanos</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title">Sitios de Interés</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#">Avisos de Privacidad</a></li>
                    <li class="mb-2"><a href="#">Datos Abietos</a></li>
                    <li class="mb-2"><a href="#">Simplificación y Digitalización</a></li>
                    <li class="mb-2"><a href="#">Transparencia Financiera</a></li>
                    <li class="mb-2"><a href="#">Verificadores Municipales</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title">Síguenos</h5>
                <p class="mb-3">Mantente informado en nuestras redes sociales oficiales.</p>
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <hr class="mt-5 mb-4 border-light opacity-25">
        <div class="text-center small">
            <p class="mb-0">&copy; 2025-2027 H. Ayuntamiento de Metepec. Todos los derechos reservados. | <a href="#" class="text-white text-decoration-underline">Última actualización: Agosto 2026</a></p>
        </div>
    </div>
</footer>

<script>
    // Búsqueda simple (solo si la página tiene buscador)
    function performSearch() {
        const input = document.getElementById('searchInput');
        if (input && input.value.trim() !== '') {
            alert(`Buscando en el portal: "${input.value}"\n(Esta acción redirigiría a la página de resultados real).`);
        }
    }
    const searchInput = document.getElementById('searchInput');
    if (searchInput) {
        searchInput.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') performSearch();
        });
    }

    // IA Porfirio
    function openPorfirio() {
        alert('¡Hola! Soy Porfirio, la IA de Metepec. Abriendo ventana de chat...\n(Aquí se montaría el iframe o modal del chatbot).');
    }

    // Lógica del Panel de Accesibilidad
    function toggleAccPanel() {
        const panel = document.getElementById('accessibilityPanel');
        if (panel) panel.classList.toggle('show');
    }

    // Cierra el panel de accesibilidad si se hace clic fuera
    document.addEventListener('click', function(event) {
        const container = document.querySelector('.acc-btn-container');
        const panel = document.getElementById('accessibilityPanel');
        if (container && panel && !container.contains(event.target) && panel.classList.contains('show')) {
            panel.classList.remove('show');
        }
    });

    // Funciones de Accesibilidad (Vanilla JS)
    function toggleTextSize() {
        document.body.classList.toggle('large-text');
    }

    function toggleHighContrast() {
        document.body.classList.toggle('high-contrast');
    }

    function resetAccessibility() {
        document.body.classList.remove('large-text');
        document.body.classList.remove('high-contrast');
    }

    // Sombra en Navbar al scrollear
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.main-header');
        if (!header) return;
        if (window.scrollY > 10) {
            header.style.boxShadow = '0 4px 15px rgba(20, 66, 100, 0.15)';
        } else {
            header.style.boxShadow = '0 4px 6px rgba(20, 66, 100, 0.08)';
        }
    });
</script>
