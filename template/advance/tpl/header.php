<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 04/02/2020 - 6:55 PM
 */
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo $antiXss->xss_clean(get_config("page_title")); ?></title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link href="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/favicon.ICO" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/css/style.css" rel="stylesheet">
    <?php echo getCaptchaJS(); ?>
    <?php echo(!empty(lang('custom_css')) ? '<style>' . lang('custom_css') . '</style>' : ''); ?>
    <?php echo(!empty(lang('tpl_advance_custom_css')) ? '<style>' . lang('tpl_advance_custom_css') . '</style>' : ''); ?>

    <style>
    /* Estilo inspirado em sites antigos da Blizzard/WoW */
    body {
        background-color: #000;
        background-image: linear-gradient(to bottom, #000000, #222222, #000000, #222222);
        color: #c0c0c0;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Ajuste para a navbar ocupar toda a largura */
    .nav-menu {
        background-color: #222;
        border-bottom: 2px solid #ffcc00;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .nav-inner {
        display: flex;
        justify-content: space-around;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .nav-menu a {
        color: #ffcc00 !important;
        text-transform: uppercase;
        font-weight: bold;
        padding: 10px 15px;
        display: block;
    }

    .nav-menu a:hover {
        color: #fff !important;
        background-color: #444;
        text-decoration: none;
    }

    /* Cores consistentes */
    :root {
        --primary-color: #ffcc00;
        --secondary-color: #0078ff;
        --accent-color: #ff9900;
        --dark-bg: #000000;
        --medium-bg: #222222;
        --light-bg: #333333;
        --text-color:rgb(255, 255, 255);
        --highlight-text: #ffffff;
        --border-color: #444444;
    }

    .container {
        background-color: rgba(0, 0, 0, 0.7);
        border: 1px solid var(--border-color);
        border-radius: 0;
        padding: 15px;
        margin-top: 15px;
        margin-bottom: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .section-title h2 {
        color: var(--primary-color);
        text-transform: uppercase;
        border-bottom: 2px solid var(--border-color);
        padding-bottom: 10px;
        text-shadow: 2px 2px 4px #000;
    }

    .btn {
        border-radius: 0;
        text-transform: uppercase;
        font-weight: bold;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .btn-primary {
        background-color: var(--secondary-color);
        border-color: #0055cc;
    }

    .btn-success {
        background-color: #4a8110;
        border-color: #336600;
    }

    .btn-info {
        background-color: #ffcc00;
        border-color: #ffcc00;
    }

    .btn-danger {
        background-color: #990000;
        border-color: #770000;
    }

    .info {
        background-color: rgba(20, 20, 40, 0.7);
        border: 1px solid var(--border-color);
        padding: 15px;
        margin-bottom: 15px;
    }

    .info h4 {
        color: var(--primary-color);
        border-bottom: 1px solid var(--border-color);
        padding-bottom: 5px;
        margin-bottom: 15px;
    }

    .info h5 {
        color: var(--accent-color);
        margin-top: 15px;
    }

    .table {
        background-color: rgba(0, 0, 0, 0.5);
        color: var(--text-color);
        border: 1px solid var(--border-color);
    }

    .table th {
        background-color: var(--medium-bg);
        color: var(--primary-color);
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(50, 50, 50, 0.5);
    }

    code {
        background-color: var(--medium-bg);
        color: #00ff00;
        border: 1px solid var(--border-color);
        padding: 2px 4px;
    }

    .modal-content {
        background-color: var(--dark-bg);
        border: 1px solid var(--border-color);
        border-radius: 0;
        color: var(--text-color);
    }

    .modal-header {
        border-bottom: 1px solid var(--border-color);
        background-color: var(--medium-bg);
    }

    .modal-footer {
        border-top: 1px solid var(--border-color);
        background-color: var(--medium-bg);
    }

    .form-control {
        background-color: var(--medium-bg);
        border: 1px solid var(--border-color);
        color: var(--text-color);
        border-radius: 0;
    }

    .form-control:focus {
        background-color: var(--light-bg);
        color: var(--highlight-text);
        border-color: var(--secondary-color);
    }

    #hero {
        border-bottom: 4px solid var(--primary-color);
    }

    footer {
        background-color: var(--dark-bg);
        border-top: 2px solid var(--border-color);
        color: var(--text-color);
        padding: 20px 0;
        text-align: center;
    }

    /* Ajustes adicionais para consistência */
    a {
        color: var(--secondary-color);
    }

    a:hover {
        color: var(--accent-color);
        text-decoration: none;
    }

    .section-bg {
        background-color: rgba(34, 34, 34, 0.5);
    }

    /* Ajustes para o header */
    #header {
        background-color: var(--dark-bg);
        width: 100%;
        padding: 0;
        margin: 0;
    }

    /* Ajustes para o hero */
    .hero-container {
        padding: 30px 0;
    }

    .hero-container h1, 
    .hero-container h2 {
        color: var(--primary-color);
        text-shadow: 2px 2px 4px #000;
    }

    /* Ajustes para botões e links */
    .download-button, 
    .btn-get-started {
        background-color: var(--secondary-color);
        color: var(--highlight-text);
        border: 1px solid #0055cc;
        padding: 10px 20px;
        text-transform: uppercase;
        font-weight: bold;
        display: inline-block;
        margin-top: 10px;
        text-decoration: none;
        border-radius: 0;
    }

    .download-button:hover, 
    .btn-get-started:hover {
        background-color: var(--accent-color);
        color: var(--highlight-text);
        text-decoration: none;
    }

    /* Ajustes para listas */
    ul, ol {
        padding-left: 20px;
    }

    li {
        margin-bottom: 5px;
    }

    /* Ajustes para ícones */
    .icofont-download, 
    .icofont-code, 
    .icofont-computer, 
    .icofont-linux, 
    .icofont-apple, 
    .icofont-user-alt-7, 
    .icofont-plugin, 
    .icofont-star, 
    .icofont-question-circle {
        color: var(--primary-color);
        font-size: 24px;
        margin-right: 10px;
    }

    /* Ajustes para o layout responsivo */
    @media (max-width: 768px) {
        .nav-inner {
            flex-direction: column;
        }
        
        .nav-logo {
            text-align: center;
        }
    }

    /* Ajustes para a barra de navegação principal */
    #header {
        position: relative;
        width: 100%;
    }

    .nav-menu {
        width: 100%;
        display: block;
        background-color: #333;
    }

    .nav-inner {
        display: flex;
        justify-content: space-between;
        width: 100%;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .nav-inner li {
        flex: 1;
        text-align: center;
        margin: 0;
        padding: 0;
        border-right: 1px solid #444;
    }

    .nav-inner li:last-child {
        border-right: none;
    }

    .nav-inner li a {
        display: block;
        padding: 15px 5px;
        color: #ffcc00 !important;
        text-decoration: none;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
    }

    .nav-inner li a:hover,
    .nav-inner li.active a {
        background-color: #444;
        color: #fff !important;
    }

    .nav-logo {
        display: none; /* Escondendo o logo na navbar para economizar espaço */
    }
    </style>
</head>
<body>
    <section id="hero" style="background-image: url('<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/img/wow-bg/<?php echo get_config('expansion') . '-' . rand(1, 6); ?>.jpg');background-size: cover;">
        <div class="hero-container">
            <a href="" class="hero-logo" data-aos="zoom-in"><img style="width: 250px; max-width: 80%;" src="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/img/logo-1.png" alt=""></a>
            <h1 data-aos="zoom-in" class="text-shadow1">Servidor Privado Tah'kaka WoW Classic</h1>
            <h2 data-aos="fade-up" class="text-shadow1">Reviva a experiência autêntica de World of Warcraft Classic em nosso servidor privado. Junte-se a outros jogadores em uma aventura épica por Azeroth!</h2>
            <a data-aos="fade-up" href="#about" class="btn-get-started scrollto">Começar</a>
        </div>
    </section>

    <header id="header" class="d-flex align-items-center">
        <div class="container-fluid p-0">
            <div class="logo d-block d-lg-none">
                <a href="index.php"><img src="<?php echo $antiXss->xss_clean(get_config("baseurl")); ?>/template/<?php echo $antiXss->xss_clean(get_config("template")); ?>/assets/img/logo.png" alt="" class="img-fluid"></a>
            </div>
            <nav class="nav-menu d-block">
                <ul class="nav-inner">
                    <li class="active"><a href="#hero">Início</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#connect">Como Conectar</a></li>
                    <li><a href="#register">Registro</a></li>
                    <li><a href="#server-status">Status do Servidor</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contato</a></li>
                    <?php if(!empty(get_config('supported_langs'))) { ?>
                    <li><a class="nav-item nav-link" id="nav-contact-tab" data-toggle="modal" data-target="#lang-modal" role="tab" aria-controls="nav-contact" aria-selected="false">Idioma</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
    <?php if(!empty(get_config('supported_langs'))) { ?>
    <!-- Language Modal -->
    <div class="modal" id="lang-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><?php elang('change_lang_head'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="lang"><?php elang('change_lang_form_head'); ?></label>
                            <select class="form-control" id="langchange" name="langchange">
                                <?php $supported_langs = get_config('supported_langs'); foreach($supported_langs as $val => $lang) { echo '<option value="' . $val . '">' . $lang . '</option>'; } ?>
                            </select>
                        </div>
                        <input name="langchangever" type="hidden" value="langchanger">
                        <button type="submit" class="btn btn-primary"><?php elang('change_lang_sub'); ?></button>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
