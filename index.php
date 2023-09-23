<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- || Basics -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Somos um escritório que visualiza o espaço de maneira integrada e propõe soluções que consideram a Arquitetura por sua urbanidade, por suas possibilidades e vocações espaciais e por sua ambiência interna, transitando entre as disciplinas de Arquitetura, Interiores e Design.">
    <meta name="author" content="Lucas Reategui, Renan Sampaio, Marina Menossi, Noss Arquitetura">
    <!-- || FavIcons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- || Stylesheets -->
    <link rel="stylesheet" href="css/home.css">
    <!-- || Scripts -->
    <script src="js/nav.js" defer></script>
    <script src="js/full-height.js"></script>
    <script src="js/carousel-home.js" defer></script>
    <title>Noss Arquitetura</title>
</head>

<body>
    <!-- || Navigation Menu -->
    <header>
        <div class="main-header header-style">
            <div class="empty"></div>
            <div class="hamburger-resize">
                <button class="mobile-nav-toggle" aria-controls="primary-navigation" aria-expanded="false">
                    <span class="sr-only">Menu</span>
                </button>
            </div>
            <div class="main-logo">
                <a class="main-logo" href="index.php">NOSS</a>
            </div>
            <div class="main-icons">
                <a href="https://www.instagram.com/nossarquitetura/" target="_blank" aria-label="Entre no instagram da NOSS e conheça mais projetos">
                    <i class="fa-brands fa-instagram main-instagram"></i>
                </a>
                <a href="https://wa.me/5511957848872" target="_blank"><i class="fa-brands fa-whatsapp main-whatsapp" aria-label="Entre em contato pelo WhatsApp"></i></a>
            </div>
        </div>
        <nav id="primary-navigation" class="primary-navigation" data-visible="false">
            <div class="mobile-empty"></div>
            <ul class="main-navigation nobullets">
                <li><a class="nav-links-color" href="index.php">Home</a></li>
                <li><a class="nav-links-color" href="paginas/sobre.php">Sobre</a></li>
                <li><a class="nav-links-color" href="paginas/projetos.php">Projetos</a></li>
                <li><a class="nav-links-color" href="paginas/contato.php">Contato</a></li>
            </ul>
            <div class="mobile-info">
                <div class="mobile-logo">NOSS</div>
                <div class="mobile-icons">
                    <a href="https://www.instagram.com/nossarquitetura/" target="_blank" aria-label="Entre no instagram da NOSS e conheça mais projetos">
                        <i class="fa-brands fa-instagram mobile-instagram"></i>
                    </a>
                    <a href="https://wa.me/5511957848872" target="_blank"><i class="fa-brands fa-whatsapp mobile-whatsapp" aria-label="Entre em contato pelo WhatsApp"></i></a>
                </div>
                <address class="bottom-space">
                    Alameda Barão de Limeira, 1306 cj.43 <br>
                    São Paulo - SP
                </address>
            </div>
            </div>
        </nav>
    </header>
    <!-- || Main Content -->
    <main class="minHeight">
        <!-- Carousel -->
        <ul class="carousel nobullets">
            <!-- Projeto 01 -->
            <li class="carousel-list">
                <a href="paginas/projeto-pingoo.php">
                    <div class="image-container">
                        <picture data-index="0">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="images/pingoo/projeto-pingoo-desktop-01.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="images/pingoo/projeto-pingoo-tablet-01.jpg">
                            <img class="carousel-image" src="images/pingoo/projeto-pingoo-mobile-01.jpg">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3>Escritório Pingoo</h3>
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
                <a href="paginas/projeto-west-side.php">
                    <div class="image-container">
                        <picture data-index="1">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="images/west-side/projeto-residencial-westside-desktop-03.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="images/republica/projeto-residencial-westside-tablet-03.jpg">
                            <img class="carousel-image" src="images/republica/projeto-residencial-westside-mobile-03.jpg">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3>Apartamento West Side</h3>
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
                <a href="paginas/projeto-biotrop.php">
                    <div class="image-container">
                        <picture data-index="2">
                            <source class="carousel-image active" media="(min-width: 1000px)" srcset="images/biotrop/projeto-biotrop-desktop-01.jpg">
                            <source class="carousel-image" media="(min-width: 600px)" srcset="images/biotrop/projeto-biotrop-tablet-01.jpg">
                            <img class="carousel-image" src="images/biotrop/projeto-biotrop-mobile-01.jpg">
                        </picture>
                    </div>
                    <div class="project-title">
                        <h3>Escritório Biotrop</h3>
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
            <span class="current-slide">1</span><span>/</span><span class="total-slides">3</span>
        </div>
    </main>
    <!-- Footer -->
    <footer class="foot-space">
    </footer>
</body>

</html>