<?php get_header(); ?>
    <div id="ip-container" class="ip-container">
    <header class="ip-header">
        <h1 class="ip-logo">
            <img src="<?php echo bloginfo('template_url').'/';?>img/logo.png" alt="Cerro Grande" class="center-block">
        </h1>
        <div class="ip-loader">
            <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            </svg>
        </div>
    </header>
    <div class="wrapper ip-main" id="fullpage">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="section" id="section0">
        <nav class="main-nav text-center">
            <div class="navbar-brand">
                <a href="#banner"><img src="<?php echo bloginfo('template_url').'/';?>img/logo.png" class="img-responsive center-block" alt="Cerro Grande Logo"></a>
            </div>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $laFirma; ?></a>
                        <ul class="dropdown-menu">
                            <li><a href="#firma/slide1"><?php echo $laFirma; ?></a></li>
                            <li><a href="#firma/slide2"><?php echo $pilares; ?></a></li>
                            <li><a href="#firma/slide3"><?php echo $participacion; ?></a></li>
                            <li><a href="#firma/slide4">Socios</a></li>
                        </ul>
                    </li>
                    <li class="hidden"><a href="#firma"><?php echo $laFirma; ?></a></li>
                    <li><a href="#practica"><?php echo $areas; ?></a></li>
                    <li><a href="#presencia"><?php echo $presencia; ?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="#blog"><?php echo $recientes; ?></a></li>
                            <li><a href="blog"><?php echo $mas; ?></a></li>
                        </ul>
                    </li>
                    <li class="hidden"><a href="#blog">Blog</a></li>
                    <li><a href="#contacto"><?php echo $contacto; ?></a></li>
                    <li><a href="#login">Login</a></li>
                    <li><a href="#legal">Legal</a></li>
                    <li class="flag">
                        <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en') { ?>
                            <form action="./" method="POST">
                                <button type="submit" name="change_es" class="flag flag-icon-background flag-icon-es"></button>
                            </form>
                        <?php } else { ?>
                            <form action="./" method="POST">
                                <button type="submit" name="change_en" class="flag flag-icon-background flag-icon-gb"></button>
                            </form>
                        <?php } ?>
                    </li>
                </ul>
            </div>
            <div class="navbar-social">
                <a href="https://twitter.com/cerrograndecorp" target="_blank"><img src="<?php echo bloginfo('template_url').'/';?>img/social-media/twitter.png" alt="twitter"></a>
                <a href=""><img src="<?php echo bloginfo('template_url').'/';?>img/social-media/youtube.png" alt="YouTube"></a>
                <a href="https://www.facebook.com/cerrogcorporativo" target="_blank"><img src="<?php echo bloginfo('template_url').'/';?>img/social-media/facebook.png" alt="facebook"></a>
            </div>
            <div class="navbar-caption">
                <img src="<?php echo bloginfo('template_url').'/';?>img/caption.png" class="img-responsive center-block" alt="Más allá de lo convencional">
            </div>
        </nav>
        <div class="arrow-container">
            <div class="arrow"></div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* LA FIRMA  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="section text-center" id="section1">
        <div class="slide" data-anchor="slide1" id="slide1">
            <div class="container spacing">
                <h1 class="heading"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('nosotros_title_en') : CFS()->get('nosotros_title');?></h1>
                <p class="text">
                    <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('nosotros_text_en') : CFS()->get('nosotros_text');?>
                </p>
            </div>
        </div>
        <div class="slide" data-anchor="slide2" id="slide2">
            <div class="container spacing">
                <h3 class="heading"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('pilares_title_en') : CFS()->get('pilares_title');?></h3>
                <p class="text">
                    <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('pilares_text_en') : CFS()->get('pilares_text');?>
                </p>
            </div>
        </div>
        <div class="slide" data-anchor="slide3" id="slide3">
            <div class="container spacing">
                <h3 class="heading"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('participamos_title_en') : CFS()->get('participamos_title');?></h3>
                <div class="row no-margin">
                    <div class="col-sm-3"><img class="img-responsive center-block vertical-align" src="<?php echo bloginfo('template_url').'/';?>img/participar/1.png" alt="cfosc"></div>
                    <div class="col-sm-3"><img class="img-responsive center-block vertical-align" src="<?php echo bloginfo('template_url').'/';?>img/participar/2.png" alt="canaco"></div>
                    <div class="col-sm-3"><img class="img-responsive center-block vertical-align" src="<?php echo bloginfo('template_url').'/';?>img/participar/3.png" alt="generador 30"></div>
                    <div class="col-sm-3"><img class="img-responsive center-block vertical-align" src="<?php echo bloginfo('template_url').'/';?>img/participar/4.png" alt="uach"></div>
                </div>
                <div class="row no-margin">
                    <div class="col-sm-3"><img class="img-responsive center-block vertical-align" src="<?php echo bloginfo('template_url').'/';?>img/participar/8.png" alt="ficosec"></div>
                    <div class="col-sm-3"><img class="img-responsive center-block vertical-align" src="<?php echo bloginfo('template_url').'/';?>img/participar/5.png" alt="pils"></div>
                    <div class="col-sm-3"><img class="img-responsive center-block vertical-align" src="<?php echo bloginfo('template_url').'/';?>img/participar/6.png" alt="amppi"></div>
                    <div class="col-sm-3"><img class="img-responsive center-block vertical-align" src="<?php echo bloginfo('template_url').'/';?>img/participar/7.png" alt="anade"></div>
                </div>
            </div>
        </div>
        <div class="slide" data-anchor="slide4" id="slide4">
            <div class="container spacing socios">
                <h3 class="heading"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('socios_title_en') : CFS()->get('socios_title');?></h3>
                <div class="col-sm-3 col-xs-6 dropdown">
                    <a href="#" class="dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url').'/';?>img/socios/luis.png" alt="" class="img-responsive">
                            <img src="<?php echo bloginfo('template_url').'/';?>img/socios/luis-hover.png" alt="" class="img-responsive img-hover">
                        </div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown1">
                        <li>
                            <h4 class="associate-name red-decoration">LIC. LUIS GERARDO HOLGUÍN LERMA</h4>
                            <p class="associate-info">
                                <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('luis_text_en') : CFS()->get('luis_text');?>
                                <br><br>
                                <a href="mailto:luis@cerrogrande.law" class="italic">luis@cerrogrande.law</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-6 dropdown">
                    <a href="#" class="dropdown-toggle" type="button" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="tru2">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url').'/';?>img/socios/jose.png" alt="" class="img-responsive">
                            <img src="<?php echo bloginfo('template_url').'/';?>img/socios/jose-hover.png" alt="" class="img-responsive img-hover">
                        </div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown2">
                        <li>
                            <h4 class="associate-name red-decoration">JOSÉ ANTONIO ARGUELLO ROMERO</h4>
                            <p class="associate-info">
                                <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('jose_text_en') : CFS()->get('jose_text');?>
                                <br><br>
                                <a href="mailto:jose@cerrogrande.law" class="italic">jose@cerrogrande.law</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-6 dropdown">
                    <a href="#" class="dropdown-toggle" type="button" id="dropdown3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url').'/';?>img/socios/jorge.png" alt="" class="img-responsive">
                            <img src="<?php echo bloginfo('template_url').'/';?>img/socios/jorge-hover.png" alt="" class="img-responsive img-hover">
                        </div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown3">
                        <li>
                            <h4 class="associate-name red-decoration">JORGE OMAR BELTRÁN GARCÍA</h4>
                            <p class="associate-info">
                                <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('jorge_text_en') : CFS()->get('jorge_text');?>
                                <br><br>
                                <a href="mailto:jorge@cerrogrande.law" class="italic">jorge@cerrogrande.law</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-6 dropdown">
                    <a href="#" class="dropdown-toggle" type="button" id="dropdown4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <div class="img-container">
                            <img src="<?php echo bloginfo('template_url').'/';?>img/socios/humberto.png" alt="" class="img-responsive">
                            <img src="<?php echo bloginfo('template_url').'/';?>img/socios/humberto-hover.png" alt="" class="img-responsive img-hover">
                        </div>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown4">
                        <li>
                            <h4 class="associate-name red-decoration">HUMBERTO CARBAJAL ROMERO</h4>
                            <p class="associate-info">
                                <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('humberto_text_en') : CFS()->get('humberto_text');?>
                                <br><br>
                                <a href="mailto:humberto@cerrogrande.law" class="italic">humberto@cerrogrande.law</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* ÁREAS DE PRÁCTICA  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="section" id="section2">
        <div class="container white spacing">
            <h1 class="heading text-center"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('areas_title_en') : CFS()->get('areas_title');?></h1>
            <h5 class="sub-heading text-center italic"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('areas_sub_title_en') : CFS()->get('areas_sub_title');?></h5>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php
                $areas_array = isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('areas_array_en') : CFS()->get('areas_array');
                $array_end = end($areas_array);
                $counter = 0;
                foreach($areas_array as $key){
                    if($counter == 0 || $counter%2 == 0) {
                        echo '<div class="row no-margin">';
                    }
                    ?>
                    <div class="col-md-6">
                        <div class="panel panel-default <?php echo $counter%2 == 0 ? 'side-right' : 'side-left'; ?>">
                            <div class="panel-heading" role="tab" id="heading<?php echo $counter; ?>">
                                <h3 class="heading">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $counter; ?>" aria-expanded="false" aria-controls="collapse<?php echo $counter; ?>">
                                        <?php echo $key['title']; ?>
                                        <img src="<?php echo $key['img']; ?>" alt="Propiedad Intelectual">
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse<?php echo $counter; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $counter; ?>">
                                <div class="panel-body">
                                    <p class="text white">
                                        <?php echo $key['text']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $counter++;
                    if($key == end($areas_array) || $counter%2 == 0) {
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRESENCIA  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="section" id="section3">
        <div class="container spacing">
            <h1 class="heading text-center"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('presencia_title_en') : CFS()->get('presencia_title');?></h1>
            <h5 class="sub-heading text-center"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('presencia_sub_title_en') : CFS()->get('presencia_sub_title');?></h5>
            <div class="row no-margin">
                <div class="col-sm-5">
                    <ul class="slide-left">
                        <?php
                        $cities_array = isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('ciudades_array_en') : CFS()->get('ciudades_array');
                        foreach ($cities_array as $key) {
                            echo '<li class="red-decoration">'.$key['ciudad'].'</li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-sm-7">
                    <img src="<?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('mapa_img_en') : CFS()->get('mapa_img');?>" alt="Mapa" class="img-responsive center-block slide-right">
                </div>
            </div>
            <div class="foot-note col-sm-7">
                <div class="slide-left">
                    <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('presencia_footnote_en') : CFS()->get('presencia_footnote');?>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* ¿Y TÚ?/NUESTROS CLIENTES  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="section" id="section4">
        <div class="wrapper">
            <div class="parallax text-center">
                <div class="vertical-align">
                    <div class="container">
                        <h1 class="white"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('tu_title_en') : CFS()->get('tu_title');?></h1>
                        <h4 class="white">
                            <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('tu_sub_title_en') : CFS()->get('tu_sub_title');?>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <h1 class="heading"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? CFS()->get('clientes_title_en') : CFS()->get('clientes_title');?></h1>
                <div class="slide" data-anchor="slide1" id="slide1">
                    <div class="row no-margin">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/1.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/2.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/3.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/4.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/5.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row no-margin">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/6.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/7.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/8.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/9.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/10.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
                <div class="slide" data-anchor="slide2" id="slide2">
                    <div class="row no-margin">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/11.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/12.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/13.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/14.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/15.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row no-margin">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/16.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/17.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/18.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/19.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/20.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
                <div class="slide" data-anchor="slide3" id="slide3">
                    <div class="row no-margin">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/21.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/22.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/23.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/24.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/25.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row no-margin">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/26.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/27.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/28.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/29.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/30.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
                <div class="slide" data-anchor="slide4" id="slide4">
                    <div class="row no-margin">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/31.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/32.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/33.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/34.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/35.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row no-margin">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/36.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/37.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/38.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/39.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/40.png" alt="Logo" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-1"></div>
                    </div>
                </div>
                <div class="slide" data-anchor="slide5" id="slide5">
                    <div class="row no-margin">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/41.png" alt="" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/42.png" alt="" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/43.png" alt="" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/44.png" alt="" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/45.png" alt="" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-1"></div>
                    </div>
                    <div class="row no-margin">
                        <div class="col-sm-2 centering-cols"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/46.png" alt="" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/47.png" alt="" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/48.png" alt="" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2"><img src="<?php echo bloginfo('template_url').'/';?>img/clientes/49.png" alt="" class="img-responsive center-block vertical-align"></div>
                        <div class="col-sm-2 centering-cols"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BLOG  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="section" id="section5">
        <div class="container">
            <h1 class="heading white text-center main">BLOG</h1>
            <?php
            // set up or arguments for our custom query
            //$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                //'paged' => $paged
            );
            // create a new instance of WP_Query
            $the_query = new WP_Query( $query_args );
            $counter = 0;
            ?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop
                if($counter == 0) {
                    ?>
                    <div class="main-post slide-left">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Post Image" class="post-img">
                            <div class="vertical-align slide-left">
                                <div class="post-title slide-left">
                                    <h1 class="heading white">
                                        <?php
                                        if ( strlen($post->post_title) > 50) {
                                            echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . ' [...]';
                                        } else {
                                            the_title();
                                        }
                                        ?>
                                    </h1>
                                </div>
                                <div class="post-date white slide-left"><?php echo get_the_date(); ?></div>
                                <div class="post-excerpt white italic slide-left">
                                    <?php
                                    if ( strlen(get_the_excerpt()) > 120) {
                                        echo substr(get_the_excerpt(), 0,120).' [...]';
                                    } else {
                                        get_the_excerpt();
                                    }
                                    ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } else { ?>
                    <div class="post">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <div class="vertical-align slide-top">
                                <div class="img-container">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="Post Image" class="post-img">
                                </div>
                                <div class="post-title">
                                    <h3 class="heading white text-center">
                                        <?php
                                        if ( strlen($post->post_title) > 30) {
                                            echo substr(the_title($before = '', $after = '', FALSE), 0, 30) . ' [...]';
                                        } else {
                                            the_title();
                                        }
                                        ?>
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                $counter++;
            endwhile;
            else:
                ?>
                <article>
                    <h1>Sorry...</h1>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                </article>
            <?php endif;?>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="section" id="section7">
        <div class="map-container">
            <div class="googleMap" id="googleMap"></div>
            <img src="<?php echo bloginfo('template_url').'/';?>img/contacto/office.png" alt="Contact Image" class="decoration vertical-align">
        </div>
        <div class="contacto light-spacing container">
            <h3 class="heading"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'CONTACT' : 'CONTACTO';?></h3>
            <div class="col-sm-5">
                <div class="address slide-left">
                    Lázaro de Baigorri 1400<br>
                    Col. San Felipe, Chihuahua, Chih<br>
                    C.P. 31203
                </div>
                <div class="phone slide-left">
                    <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Telephone +52 (614) 415 94 79' : 'Tel (614) 415 94 79';?>
                </div>
                <div class="mail slide-left">
                    <a href="mailto:info@cerrogrande.law">info@cerrogrande.law</a>
                </div>
                <div class="social slide-left">
                    <a href="https://twitter.com/cerrograndecorp" target="_blank"><img src="<?php echo bloginfo('template_url').'/';?>img/social-media/twitter3.png" alt="twitter"></a>
                    <a href=""><img src="<?php echo bloginfo('template_url').'/';?>img/social-media/youtube3.png" alt=""></a>
                    <a href="https://www.facebook.com/cerrogcorporativo" target="_blank"><img src="<?php echo bloginfo('template_url').'/';?>img/social-media/facebook3.png" alt=""></a>
                </div>
            </div>
            <div class="col-sm-7 slide-right">
                <?php
                if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en') {
                    echo do_shortcode('[contact-form-7 id="55" title="Contact Form"]');
                } else {
                    echo do_shortcode('[contact-form-7 id="29" title="Forma de Contacto"]');
                }
                ?>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* LOGIN  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="section fp-auto-height" id="section8">
        <div class="parallax text-center">
            <a href="#login-modal" data-toggle="modal" data-target="#login-modal" class="btn-red vertical-align center-block">LOGIN</a>
        </div>
        <div id="login-modal" class="modal fade login-modal" role="dialog" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h1 class="heading text-center">LOGIN</h1>
                    </div>
                    <div class="modal-body">
                        <?php
                        if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en') {
                            $args = array(
                                'echo' => true,
                                'form_id' => 'loginform',
                                'label_username' => __('Username '),
                                'label_password' => __('Password '),
                                'label_remember' => __('Remember me'),
                                'label_log_in' => __( ' Log In ' ),
                                'id_username' => 'user_login',
                                'id_password' => 'user_pass',
                                'id_remember' => 'rememberme',
                                'id_submit' => 'wp-submit',
                                'value_username' => '',
                                'remember' => true,
                                'value_remember' => true
                            );
                        } else {
                            $args = array(
                                'echo' => true,
                                'form_id' => 'loginform',
                                'label_username' => __('Nombre de Usuario'),
                                'label_password' => __('Contraseña'),
                                'label_remember' => __('Recuerdame'),
                                'label_log_in' => __('Acceder'),
                                'id_username' => 'user_login',
                                'id_password' => 'user_pass',
                                'id_remember' => 'rememberme',
                                'id_submit' => 'wp-submit',
                                'remember' => true,
                                'value_username' => '',
                                'value_remember' => true
                            );
                        }
                        wp_login_form( $args );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* LEGAL  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="section fp-auto-height section6" id="section6">
        <div class="container spacing text-center">
            <a href="legal" class="btn-red vertical-align center-block">LEGAL</a>
        </div>
    </section>
<?php get_footer(); ?>