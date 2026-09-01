<?php
$titulo_pagina = 'Gobierno de Metepec | Ayuntamiento de Metepec';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>

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
    <main class="container py-5 my-3">

        <!-- Ejemplo: Hero section. Cópialo o modifícalo según tu página -->
        <section class="hero-section">
            <div class="container">
                <div class="breadcrumb-custom">
                    <a href="./index" class="link-light text-decoration-none"><i class="fa-solid fa-house"></i> Inicio</a>
                    <span class="separator"><i class="fa-solid fa-chevron-right fa-xs"></i></span>
                    <span>Gobierno</span>
                    <span class="separator"><i class="fa-solid fa-chevron-right fa-xs"></i></span>
                    <span class="text-white fw-bold">Cabildo</span>
                </div>
                <h1 class="display-4 fw-bold mb-4">Cabildo</h1>
            </div>
        </section>


    </main>
    <!-- ================= FIN CONTENIDO ================= -->

    <?php include './footer.php'; ?>

</body>
</html>
