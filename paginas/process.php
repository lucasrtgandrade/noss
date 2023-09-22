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
    <link rel="stylesheet" href="../css/process.css">
    <!-- || Scripts -->
    <script src="../js/stickyNav.js"></script>
    <script src="../js/nav.js" defer></script>
    <script src="../js/full-height.js"></script>
    <title>Contato Enviado</title>
</head>

<body>
    <!-- || Navigation Menu -->
    <?php
    include "../templates/navigation.php"
    ?>
    <!-- Form action -->
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $name = $_POST["name"];
    $from = $_POST["email"];
    $to = "contato@lucasreategui.com";
    $reason = $_POST["reason"];
    $message = $_POST["message"];
    $headers = "De:" . $name . $from;
    mail($to, $reason, $name, $message, $headers);
    ?>
    <!-- Main Content -->
    <main class="content">
        <h1 class="titulo-contato">Formulário enviado</h1>
        <p>Em breve entraremos em contato</p>
        <div class="icon-check">
            <i class="fa-solid fa-check"></i>
        </div>
        <div class="contact-info">
            <div class="contact-logo">NOSS</div>
            <div class="contact-icons">
                <a href="https://www.instagram.com/nossarquitetura/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://wa.me/5511957848872" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <address class="contact-address">
                Alameda Barão de Limeira, 1306 cj.43 <br>
                São Paulo - SP
            </address>
        </div>
    </main>
</body>

</html>