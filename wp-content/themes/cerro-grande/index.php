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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">La Firma</a>
                            <ul class="dropdown-menu">
                                <li><a href="#firma/slide1">La Firma</a></li>
                                <li><a href="#firma/slide2">Pilares y Políticas</a></li>
                                <li><a href="#firma/slide3">Participación</a></li>
                                <li><a href="#firma/slide4">Socios</a></li>
                            </ul>
                        </li>
                        <li class="hidden"><a href="#firma">La Firma</a></li>
                        <li><a href="#practica">Áreas de práctica</a></li>
                        <li><a href="#presencia">Presencia</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="#blog">Recientes</a></li>
                                <li><a href="blog">Ver más</a></li>
                            </ul>
                        </li>
                        <li class="hidden"><a href="#blog">Blog</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                        <li><a href="#login">Login</a></li>
                        <li><a href="#legal">Legal</a></li>
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
                    <h1 class="heading">LA FIRMA</h1>
                    <p class="text">
                        <strong>Cerro Grande Corporativo</strong> ® nació en 2013, con el espíritu de <strong>contribuir a la propiedad intelectual del mundo</strong>, y con un estilo que fuera <strong>más allá de lo convencional</strong>, rompiendo paradigmas en la prestación de servicios legales con su trato, contenidos y resultados.
                        <br><br>
                        Nos hemos posicionado como una <strong>firma líder en el norte del país</strong>, siendo actores y promotores de la cultura de la Propiedad Intelectual, <strong>impulsando y protegiendo</strong> temas de gran importancia para la <strong>creatividad, originalidad y prestigio</strong> de las personas y empresas. 
                        <br>
                        Este liderazgo y prestigio han sido reconocido por la <strong>Asociación Mexicana para la Protección de Propiedad Intelectual</strong> (AMPPI) – <a href="http://www.amppi.org.mx">www.amppi.org.mx</a>, al permitirnos ser la <strong>primer firma chihuahuense en contar su aval</strong>.
                    </p>
                </div>
            </div>
            <div class="slide" data-anchor="slide2" id="slide2">
                <div class="container spacing">
                    <h3 class="heading">PILARES Y POLÍTICAS</h3>
                    <p class="text">
                        <br>
                        Creemos en la <strong>preparación constante</strong> como dinámica, en la <strong>ética y la honestidad</strong> como <strong>valores fundamentales</strong>, y en el profesionalismo, a través de un servicio personalizado como la fórmula.
                        <br><br>
                        <strong>Nos definen los resultados y nos motiva</strong> atender las inquietudes de nuestros clientes como si fueran propias.
                        <br><br>
                        Desde luego, <strong>estamos comprometidos con la responsabilidad social</strong>, por eso brindamos servicios PROBONO a diversas Organizaciones de la Sociedad Civil.

                    </p>
                </div>
            </div>
            <div class="slide" data-anchor="slide3" id="slide3">
                <div class="container spacing">
                    <h3 class="heading">Participamos activamente en:</h3>
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
                    <h3 class="heading">SOCIOS</h3>
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
                                    Abogado egresado con Mención
                                    Honorífica de la Universidad 
                                    Autónoma de Chihuahua,
                                    Máster en Propiedad Intelectual e 
                                    Industrial por la Universidad de 
                                    Barcelona, España.
                                    Miembro de la Internet Society 
                                    Capítulo México (ISOC), contando 
                                    en su acervo con amplia 
                                    experiencia en Marcas, Diseños 
                                    Industriales, Derechos de Autor 
                                    con enfoque en el entorno digital, 
                                    Licencias, Contratos, Derechos a la 
                                    Imagen, Industrias culturales,
                                    Datos Personales, Sociedades 
                                    Mercantiles, Negociaciones, 
                                    Políticas Públicas y Gobierno.
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
                                    Abogado egresado de la Universidad 
                                    Autónoma de Chihuahua, Máster en 
                                    Propiedad Intelectual e Industrial por 
                                    la Universidad de Alicante, España. 
                                    Miembro de AMPPI y AAAML, 
                                    Contando en su acervo con amplia 
                                    experiencia en marcas, patentes, 
                                    diseños industriales, obras artísticas, 
                                    literarias y programas de cómputo. 
                                    Ha asesorado a empresas en 
                                    contratación nacional e internacional 
                                    sobre: transferencia de tecnología,
                                    transmisión y licenciamiento de 
                                    marcas, know how y derechos de autor, 
                                    producción cinematográfica, 
                                    confidencialidad y protección de 
                                    datos personales.
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
                                    Ingeniero Biotecnólogo por el 
                                    Instituto Politécnico Nacional, 
                                    contando en su acervo con amplia 
                                    experiencia en búsquedas de 
                                    información tecnológica, dictámenes 
                                    de patentabilidad, redacción de 
                                    patentes en áreas biotecnológicas, 
                                    farmacéuticas, biológicas, químicas, 
                                    nanociencias, mecánica, robótica y 
                                    tecnologías verdes, así como de 
                                    valiosas intervenciones en oficinas 
                                    de trasnferencias de tecnología, 
                                    promoviendo el desarrollo y 
                                    negociación de patentes mexicanas 
                                    y extranjeras.
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
                                    Abogado por la Universidad Autónoma 
                                    de Chihuahua, con especialización 
                                    en Comercio Internacional y Calidad 
                                    por la Universidad Complutense de 
                                    Madrid. Contando en su acervo con 
                                    amplia experiencia en franquicias, 
                                    documentación de procesos, implementación 
                                    y certificaciones de normas ISO, 
                                    fungiendo en su trayectoria como 
                                    consultor, auditor y capacitador en 
                                    diversos proyectos relacionados con 
                                    la calidad de cientos de organismos 
                                    públicos y privados a nivel nacional 
                                    e internacional.
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
                <h1 class="heading text-center">ÁREAS DE PRÁCTICA</h1>
                <h5 class="sub-heading text-center italic">Nos gusta lo que hacemos y lo hacemos con pasión.</h5>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="row no-margin">
                        <div class="col-md-6">
                            <div class="panel panel-default slide-left">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h3 class="heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            PROPIEDAD INTELECTUAL
                                            <img src="<?php echo bloginfo('template_url').'/';?>img/practica/1.png" alt="Propiedad Intelectual">
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p class="text white">
                                            Tratamos a sus creaciones como si 
                                            fueran propias, ya que con ética 
                                            y profesionalismo, diseñamos 
                                            estrategias personalizadas de 
                                            protección y defensa de Marcas, 
                                            Patentes, Modelos de Utilidad, 
                                            Derechos de Autor,  Diseños 
                                            Industriales y Variedades Vegetales.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default slide-right">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h3 class="heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            REALIDAD DIGITAL
                                            <img src="<?php echo bloginfo('template_url').'/';?>img/practica/2.png" alt="Realidad Digital">
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p class="text white">
                                            Nos especializamos en la redacción y 
                                            correcta implementación de términos y 
                                            condiciones de “apps”, políticas de 
                                            privacidad, licencias de software y 
                                            contratos electrónicos, así mismo 
                                            atendemos controversias suscitadas en 
                                            el uso de nombres de dominio (www).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-margin">
                        <div class="col-md-6">
                            <div class="panel panel-default slide-left">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h3 class="heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            ENTRETENIMIENTO
                                            <img src="<?php echo bloginfo('template_url').'/';?>img/practica/3.png" alt="Entretenimiento">
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p class="text white">
                                            Protegemos y representamos a artistas,
                                            músicos, actores y deportistas en la 
                                            correcta explotación de sus derechos, 
                                            principalmente en el ejercicio de su 
                                            derecho a la imagen.<br>
                                            Igualmente asesoramos a empresas y 
                                            negocios basados en la industria 
                                            creativa o aquellas que tengan la 
                                            necesidad de explotar música y software 
                                            en sus instalaciones.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default slide-right">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h3 class="heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            DATOS PERSONALES
                                            <img src="<?php echo bloginfo('template_url').'/';?>img/practica/4.png" alt="Datos Personales">
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <p class="text white">
                                            Apoyamos a regularizar el tratamiento 
                                            de datos personales por particulares, 
                                            por medio del establecimiento de buenas 
                                            prácticas y políticas adecuadas para el 
                                            manejo de los mismos, con capacitación 
                                            al personal y redacción de documentos 
                                            personalizados como contratos, cláusulas, 
                                            avisos de privacidad y videovigilancia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-margin">
                        <div class="col-md-6">
                            <div class="panel panel-default slide-left">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h3 class="heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            CONFIDENCIALIDAD
                                            <img src="<?php echo bloginfo('template_url').'/';?>img/practica/5.png" alt="Confidencialidad">
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p class="text white">
                                            De manera innovadora combinamos la 
                                            experiencia de abogados, expertos en 
                                            calidad e ingenieros en software, para 
                                            realizar auditorías en el uso de la 
                                            información comercialmente relevante para 
                                            una empresa con el apoyo de la leyes 
                                            nacionales y normas internacionales de 
                                            seguridad digital, así como confeccionamos 
                                            en virtud de ellas estrategias y documentos 
                                            que le permitan a las empresas resguardar sus 
                                            secretos industriales de manera segura y eficaz.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default slide-right">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h3 class="heading">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            PUBLICIDAD Y COMPETENCIA DESLEAL
                                            <img src="<?php echo bloginfo('template_url').'/';?>img/practica/6.png" alt="Publicidad y Competencia Desleal">
                                        </a>
                                    </h3>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <p class="text white">
                                            Asesoramos a empresas sobre los 
                                            diversos caminos posibles para defender 
                                            su prestigio comercial.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* PRESENCIA  */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section class="section" id="section3">
            <div class="container spacing">
                <h1 class="heading text-center">PRESENCIA</h1>
                <h5 class="sub-heading text-center">Contamos con presencia constante para atenderle en estos estados:</h5>
                <div class="row no-margin">
                    <div class="col-sm-5">
                        <ul class="slide-left">
                            <li class="red-decoration">DURANGO</li>
                            <li class="red-decoration">CHIHUAHUA</li>
                            <li class="red-decoration">SINALOA</li>
                            <li class="red-decoration">COAHUILA</li>
                            <li class="red-decoration">CIUDAD DE MÉXICO</li>
                        </ul>
                    </div>
                    <div class="col-sm-7">
                        <img src="<?php echo bloginfo('template_url').'/';?>img/presencia/mapa.jpg" alt="Mapa" class="img-responsive center-block slide-right">
                    </div>
                </div>
                <div class="foot-note col-sm-7">
                    <div class="slide-left">
                        *Y a nivel internacional contamos con agentes corresponsales en 
                        La Unión Europea, Estados Unidos, Asia y Latinoamérica.
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
                            <h1 class="white">¿Y TÚ     ?</h1>
                            <h4 class="white">
                                Ofrecemos soluciones personalizadas para la protección legal de su portafolio de ideas.
                                Estrategias que permiten detonar y potenciar su crecimiento nacional e internacional.
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="container text-center">
                    <h1 class="heading">NUESTROS CLIENTES</h1>
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
                <h3 class="heading">CONTACTO</h3>
                <div class="col-sm-5">
                    <div class="address slide-left">
                        Lázaro de Baigorri 1400<br>
                        Col. San Felipe, Chihuahua, Chih<br>
                        C.P. 31203
                    </div>
                    <div class="phone slide-left">
                        Tel (614) 415 94 79
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
                    <?php echo do_shortcode('[contact-form-7 id="29" title="Forma de Contacto"]') ?>
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
                                $args = array(
                                    'echo'           => true,
                                    'remember'       => true,
                                    'form_id'        => 'loginform',
                                    'id_username'    => 'user_login',
                                    'id_password'    => 'user_pass',
                                    'id_remember'    => 'rememberme',
                                    'id_submit'      => 'wp-submit',
                                    'label_username' => __( 'Usuario' ),
                                    'label_password' => __( 'Contraseña' ),
                                    'label_remember' => __( 'Recuerdame' ),
                                    'label_log_in'   => __( 'Acceder' ),
                                    'value_username' => '',
                                    'value_remember' => false
                                );
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