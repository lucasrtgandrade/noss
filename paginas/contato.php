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
    <link rel="stylesheet" href="../css/contato-stylesheet.css">
    <!-- || Scripts -->
    <script src="../js/stickyNav.js"></script>
    <script src="../js/nav.js" defer></script>
    <title>Contato</title>
</head>

<body>
    <!-- || Navigation Menu -->
    <?php include "../templates/navigation-stick.php" ?>
    <!-- || Main Content -->
    <main class="content">
        <div class="contact-form">
            <?php $form_data = (!empty($_POST)) ? $_POST : null;
            $form_is_complete = (empty($_POST)) ? false : null;
            function check_required($value)
            {
                global $form_is_complete;
                if (empty(trim($value))) {
                    echo '<p class="alert">Campo obrigatório.</p>';
                    $form_is_complete = false;
                }
            }

            function check_email($email)
            {
                global $form_is_complete;
                $regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
                if (!preg_match($regex, $email)) {
                    echo '<p class="alert">Email inválido</p>';
                    $form_is_complete = false;
                }
            }

            function send_message($form_data)
            {
                $name = filter_var(strip_tags(trim($form_data['name'])), FILTER_SANITIZE_ADD_SLASHES);
                $email = filter_var($form_data['email'], FILTER_SANITIZE_EMAIL);
                ini_set('display_errors', 1);
                error_reporting(E_ALL);
                $name = $_POST["name"];
                $from = "$name <$email>";
                $to = "contato@lucasreategui.com";
                $reason = $_POST["reason"];
                $message = filter_var(strip_tags(trim($form_data['message'])), FILTER_SANITIZE_ADD_SLASHES);
                $message = 'From: ' . $from . ', for ' . $reason . "\n\n" . $message;
                $headers = 'From: ' . $from . "\r\n" .
                    'Reply-To: ' . $from . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                if (mail($to, $reason, $message, $headers, $from)) {
                    echo "<h2>Contato enviado!</h2>";
                }
            }
            ?>
            <h1>Contato</h1>
            <form name="contato" method="post">
                <!-- action="process.php" -->
                <div class="test">
                    <?php if (isset($form_data['name'])) check_required($form_data['name']); ?>
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" autofocus placeholder="Nome" required>
                </div>
                <div>
                    <?php if (isset($form_data['email'])) {
                        check_required($form_data['email']);
                        check_email($form_data['email']);
                    }
                    ?>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Seu email" required>
                </div>
                <div>
                    <label for="phone">Telefone</label>
                    <input type="tel" id="phone" name="phone" placeholder="Telefone">
                </div>
                <label class="motivo-contato">Motivo do contato:</label>
                <div class="subject">
                    <div class="subject-option">
                        <label class="subject-label" for="orcamento">Orçamento</label>
                        <input type="radio" name="reason" id="orcamento" value="orcamento">
                    </div>
                    <div class="subject-option">
                        <label class="subject-label" for="informacao">Informação</label>
                        <input type="radio" name="reason" id="informacao" value="informacao">
                    </div>
                    <div class="subject-option">
                        <label class="subject-label" for="duvida">Dúvida</label>
                        <input type="radio" name="reason" id="duvida" value="duvida">
                    </div>
                </div>
                <div>
                    <?php if (isset($form_data['message'])) check_required($form_data['message']); ?>
                    <label for="message">Mensagem</label>
                    <textarea name="message" placeholder="Como podemos te ajudar?" id="message" required></textarea>
                </div>
                <input type="submit" id="submit" value="Enviar">
            </form>
            <?php
            $form_is_complete = (!is_null($form_is_complete)) ?  $form_is_complete : true;
            if (true === $form_is_complete) {
                send_message($form_data);
            }
            ?>
            <!-- FOOTER -->
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
        </div>
        </div>
    </main>
</body>

</html>