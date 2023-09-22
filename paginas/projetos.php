<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- || Metadata -->
    <?php include "../templates/meta.php" ?>
    <!-- || Stylesheets -->
    <link rel="stylesheet" href="../css/cores.css">
    <link rel="stylesheet" href="../css/navigation.css">
    <link rel="stylesheet" href="../css/tipografia.css">
    <link rel="stylesheet" href="../css/uteis.css">
    <!-- <link rel="stylesheet" href="../css/projetos-stylesheet.css"> -->
    <link rel="stylesheet" href="../css/carousel.css">
    <!-- || Scripts -->
    <script src="../js/nav.js" defer></script>
    <script src="../js/full-height.js"></script>
    <script src="../js/carousel-home.js" defer></script>
    <title>Projetos</title>
</head>

<body>
    <!-- || Navigation Menu -->
    <?php
    include '../templates/navigation.php';
    ?>

    <!-- || Main -->
    <main class="minHeight">
        <!-- Carousel -->
        <ul class="carousel nobullets">
            <!-- Projeto 01 -->
            <li class="carousel-list">
                <a href="../paginas/projeto-pingoo.php">
                    <div class="image-container">
                        <picture data-index="0">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/pingoo/projeto-pingoo-desktop-01.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/pingoo/projeto-pingoo-tablet-01.jpg">
                            <img class="carousel-image" src="../images/pingoo/projeto-pingoo-mobile-01.jpg">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Escritório Pingoo</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                </a>
            </li>
            <!-- Projeto 02 -->
            <li class="carousel-list">
                <a href="../paginas/projeto-west-side.php">
                    <div class="image-container">
                        <picture data-index="1">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-03.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/republica/projeto-residencial-westside-tablet-03.jpg">
                            <img class="carousel-image" src="../images/republica/projeto-residencial-westside-mobile-03.jpg">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Apartamento West Side</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                </a>
            </li>
            <!-- Projeto 03 -->
            <li class="carousel-list">
                <a href="../paginas/projeto-biotrop.php">
                    <div class="image-container">
                        <picture data-index="2">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/biotrop/projeto-biotrop-desktop-01.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/biotrop/projeto-biotrop-tablet-01.jpg">
                            <img class="carousel-image" src="../images/biotrop/projeto-biotrop-mobile-01.jpg">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Escritório Biotrop</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                </a>
            </li>
            <!-- Projeto 04 -->
            <li class="carousel-list">
                <a href="../paginas/projeto-republica.php">
                    <div class="image-container">
                        <picture data-index="3">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/republica/projeto-residencial-westside-desktop-03.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="../images/republica/projeto-residencial-westside-tablet-03.jpg">
                            <img class="carousel-image" src="../images/republica/projeto-residencial-westside-mobile-03.jpg">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3 class="project-header">Apartamento República</h3>
                        <div class="project-icon-mobile">
                            <i class="fa-solid fa-arrow-up-right-from-square cta-mobile"></i>
                        </div>
                        <div class="project-icon-large">
                            <p class="cta-text">Ver Projeto</p>
                            <i class="fa-solid fa-arrow-up-right-from-square cta-large"></i>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <!-- || Next and previous button -->
        <div class="nav-carousel">
            <button aria-label="Ir para imagem anterior" class="prev-button">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button aria-label="Ir para imagem seguinte" class="next-button">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <!-- || Carousel navigation dots -->
        <div class="carousel-counter">
            <span class="current-slide">1</span><span>/</span><span class="total-slides">4</span>
        </div>
    </main>
    <!-- Footer -->
    <footer class="foot-space">
    </footer>
</body>

</html>