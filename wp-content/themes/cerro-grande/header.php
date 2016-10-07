<?php
if($_SESSION['lang'] == 'en') {
    $laFirma = 'The Firm';
    $pilares = 'Pillars & Policies';
    $participacion = 'Involvement';
    $socios = 'Partners';
    $areas = 'Practice areas';
    $presencia = 'Presence';
    $recientes = 'Recent';
    $mas = 'More';
    $contacto = 'Contact';
    $cuenta = 'My account';
    $solicitudes = 'Mis applications';
    $logout = 'Log out';
} else {
    $laFirma = 'La Firma';
    $pilares = 'Pilares y Políticas';
    $participacion = 'Participación';
    $socios = 'Socios';
    $areas = 'Áreas de práctica';
    $presencia = 'Presencia';
    $recientes = 'Recientes';
    $mas = 'Ver más';
    $contacto = 'Contacto';
    $cuenta = 'Mi cuenta';
    $solicitudes = 'Mis solicitudes';
    $logout = 'Cerrar sesión';
}
?>
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
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/';?>css/effect1.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/';?>css/flag-icon.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url');?>">
        <script src="<?php echo bloginfo('template_url').'/';?>js/pre-loader/modernizr.custom.js"></script>
        <script src="<?php echo bloginfo('template_url').'/';?>js/jquery-1.12.0.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script src="<?php echo bloginfo('template_url').'/';?>js/bootstrap.min.js"></script>
        <?php
        if($_SESSION['loadModal'] == true) {
        ?>
        <script>
            $(document).ready(function() {
                $('#loadModal').modal('show');
            });
        </script>
        <?php
        }
        ?>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $laFirma; ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#firma/slide1"><?php echo $laFirma; ?></a></li>
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#firma/slide2"><?php echo $pilares; ?></a></li>
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#firma/slide3"><?php echo $participacion; ?></a></li>
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#firma/slide4"><?php echo $socios; ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#practica"><?php echo $areas; ?></a></li>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#presencia"><?php echo $presencia; ?></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#blog"><?php echo $recientes; ?></a></li>
                                <li><a href="blog"><?php echo $mas; ?></a></li>
                            </ul>
                        </li>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#contacto"><?php echo $contacto; ?></a></li>
                        <?php if(!is_user_logged_in()) { ?>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#login">Login</a></li>
                        <?php } else if(current_user_can('administrator')) { ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Admin</a>
                            <ul class="dropdown-menu">
                                <li><a href="registro">Registrar Solicitud</a></li>
                                <li><a href="lista-seguimientos">Lista de Seguimientos</a></li>
                                <li><a href="<?php echo wp_logout_url(home_url()); ?>">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                        <?php } else { ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $cuenta; ?></a>
                            <ul class="dropdown-menu">
                                <li><a href="mi-cuenta"><?php echo $solicitudes; ?></a></li>
                                <li><a href="<?php echo wp_logout_url(home_url()); ?>"><?php echo $logout; ?></a></li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li><a href="<?php if(!is_front_page()) { echo 'index'; } ?>#legal">Legal</a></li>
                        <li class="flag"><a href="http://cerrogrande.law/en" class="flag flag-icon-background flag-icon-gb center-block vertical-align"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="modal fade" tabindex="-1" role="dialog" id="loadModal">
            <div class="modal-dialog" role="document">
                <form action="./" method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Elige tu idioma/Choose your language</h4>
                        </div>
                        <div class="modal-body">
                            <select name="selectLang" id="selectLang">
                                <option value="es">Español</option>
                                <option value="en">English</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="acceptLang" value="OK">
                        </div>
                    </div><!-- /.modal-content -->
                </form>
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->