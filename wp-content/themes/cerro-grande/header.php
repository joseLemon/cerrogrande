<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <link rel="icon" type="image/png" href="<?php echo bloginfo('template_url').'/';?>img/favicon.ico"/>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/';?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/';?>css/jquery.fullPage.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/';?>css/effect1.css" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url');?>">
        <script src="<?php echo bloginfo('template_url').'/';?>js/pre-loader/modernizr.custom.js"></script>
        <script src="<?php echo bloginfo('template_url').'/';?>js/jquery-1.12.0.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top <?php if(is_front_page()) { echo 'front-nav'; } ?>" style="display:none">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php if(!is_front_page()) { echo 'index'; } ?>#banner" class="navbar-brand"><img src="<?php echo bloginfo('template_url').'/';?>img/logo-inverted.png" class="img-responsive center-block vertical-align" alt="Cerro Grande Logo"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">La Firma</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#firma/slide1">La Firma</a></li>
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#firma/slide2">Pilares y Políticas</a></li>
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#firma/slide3">Participación</a></li>
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#firma/slide4">Socios</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#practica">Áreas de práctica</a></li>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#presencia">Presencia</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#blog">Recientes</a></li>
                                <li><a href="blog">Ver más</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#contacto">Contacto</a></li>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#login">Login</a></li>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#legal">Legal</a></li>
                    </ul>
                </div>
            </div>
        </nav>