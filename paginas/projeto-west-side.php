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
    <link rel="stylesheet" href="../css/projetos-west-side.css">
    <!-- || Scripts -->
    <script src="../js/nav.js" defer></script>
    <script src="../js/full-height.js"></script>
    <script src="../js/carousel-home.js" defer></script>
    <script src="../js/lightbox.js" defer></script>
    <title>Projeto Residencial West Side</title>
</head>

<body>
    <!-- || Navigation Menu -->
    <?php
    include '../templates/navigation.php';
    ?>
    <!-- || Main -->
    <main class="minHeight">
        <!-- || Carousel images -->
        <ul class="carousel nobullets">
            <li class="carousel-list">
                <!-- || Imagem 01 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-01.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-01.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(1)" src="../images/west-side/projeto-residencial-westside-mobile-01.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 02 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-02.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-02.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(2)" src="../images/west-side/projeto-residencial-westside-mobile-02.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 03 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-03.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-03.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(3)" src="../images/west-side/projeto-residencial-westside-mobile-03.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 04 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-04.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-04.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(4)" src="../images/west-side/projeto-residencial-westside-mobile-04.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 05 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-05.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-05.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(5)" src="../images/west-side/projeto-residencial-westside-mobile-05.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 06 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-06.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-06.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(6)" src="../images/west-side/projeto-residencial-westside-mobile-06.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 07 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-07.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-07.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(7)" src="../images/west-side/projeto-residencial-westside-mobile-07.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 08 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-08.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-08.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(8)" src="../images/west-side/projeto-residencial-westside-mobile-08.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 09 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-09.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-09.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(9)" src="../images/west-side/projeto-residencial-westside-mobile-09.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 10 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-10.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-10.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(10)" src="../images/west-side/projeto-residencial-westside-mobile-10.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 11 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-11.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-11.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(11)" src="../images/west-side/projeto-residencial-westside-mobile-11.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 12 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-12.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-12.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(12)" src="../images/west-side/projeto-residencial-westside-mobile-12.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 13 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-13.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-13.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(13)" src="../images/west-side/projeto-residencial-westside-mobile-13.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 14 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-14.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-14.jpg">
                    <img class="carousel-image" onclick="openLightbox(); toSlide(14)" src="../images/west-side/projeto-residencial-westside-mobile-14.jpg">
                </picture>
            </li>
            <li class="carousel-list">
                <!-- || Imagem 15 -->
                <picture>
                    <source class="carousel-image active" media="(min-width: 1000px)" srcset="../images/west-side/projeto-residencial-westside-desktop-15.jpg">
                    <source class="carousel-image" media="(min-width: 600px)" srcset="../images/west-side/projeto-residencial-westside-tablet-15.jpg">
                    <img class="carousel-image" onclick="openLightbox();toSlide(15)" src="../images/west-side/projeto-residencial-westside-mobile-15.jpg">
                </picture>
            </li>
        </ul>
        <!-- || Next and previous button -->
        <button class="prev-button">
            <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button class="next-button">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
        <!-- || Carousel navigation dots -->
        <div class="carousel-nav">
            <button class="carousel-indicator active-dot" data-index="0"></button>
            <button class="carousel-indicator" data-index="1"></button>
            <button class="carousel-indicator" data-index="2"></button>
            <button class="carousel-indicator" data-index="3"></button>
            <button class="carousel-indicator" data-index="4"></button>
            <button class="carousel-indicator" data-index="5"></button>
            <button class="carousel-indicator" data-index="6"></button>
            <button class="carousel-indicator" data-index="7"></button>
            <button class="carousel-indicator" data-index="8"></button>
            <button class="carousel-indicator" data-index="9"></button>
            <button class="carousel-indicator" data-index="10"></button>
            <button class="carousel-indicator" data-index="11"></button>
            <button class="carousel-indicator" data-index="12"></button>
            <button class="carousel-indicator" data-index="13"></button>
            <button class="carousel-indicator" data-index="14"></button>
        </div>
        <!-- || Lightbox -->
        <div id="Lightbox" class="modal">
            <div class="modal-content">
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-01.jpg" class="image-slide" alt="">
                    <h2>Teste PORRRRRRRRA!</h2>
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-02.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-03.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-04.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-05.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-06.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-07.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-08.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-09.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-10.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-11.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-12.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-13.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-14.jpg" class="image-slide" alt="">
                </div>
                <div class="slide">
                    <img src="../images/west-side/projeto-residencial-westside-full-15.jpg" class="image-slide" alt="">
                </div>
                <button class="close-button">
                    <i class="fa-solid fa-xmark" onclick="closeLightbox()"></i>
                </button>
                <button class="prev-button" onclick="changeSlide(-1)">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="next-button" onclick="changeSlide(1)">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </main>

    <!-- || Footer -->
    <footer class="foot-space">
    </footer>
</body>

</html>