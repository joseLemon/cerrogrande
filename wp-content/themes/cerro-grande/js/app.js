// INITIALIZE FULLSCREEN.JS //
$(document).ready(function() {
    createFullpage();
    $isTouchDevice = ("ontouchend" in document);
    if($isTouchDevice) {
        $('.parallax').css({'background-attachment':'initial'});
    }
    /*adjustSectionHeight();
    $hash = getHash();
    adjustSectionHeight($hash);*/
});

$(document).ready(function() {
    $('#date').datepicker({
        closeText: 'Cerrar',
        prevText: 'Ant',
        nextText: 'Sig',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    });
    $.datepicker.regional[ "es" ];
});

$(window).scroll(function () {
    $screen_height = $(window).height();
    if ($(window).scrollTop() >= $screen_height) {
        $('.navbar').addClass('show');
    } else if ($(window).scrollTop() < $screen_height) {
        $('.navbar').removeClass('show');
    }
});

$(window).on('hashchange', function() {
    /*$hash = getHash();
    $hash = $hash.substr($hash.indexOf('/')+1);
    console.log($hash);
    adjustSectionHeight($hash);*/
});

function getHash() {
    /*$hash = window.location.hash;
    if($hash.substr(0,6) != '#firma') {
        $hash = '';
    }
    //console.log($hash);
    return $hash;*/
}

function adjustSectionHeight($hash) {
    /*$('#section1 .slide .container').fadeOut();
    if($hash == '#firma') {
        $('#section1 #slide1 .container').fadeIn();
    } else {
        if($hash != '') {
            $hash = '#'+$hash;
            $('#section1').find($hash).find('.container').fadeIn();
        }
    }*/
}

function createFullpage() {
    if (document.documentElement.clientWidth >= 768) {
        $scrolloverflow = true;
    }
    if (document.documentElement.clientWidth <= 767) {
        $scrolloverflow = false;
    }
    $('#fullpage').fullpage({
        anchors: ['banner', 'firma', 'practica', 'presencia', 'y-tu', 'blog', 'contacto', 'login', 'legal', 'footer'],
        menu: '#menu',
        verticalCentered: true,
        slidesNavigation: true,
        controlArrows: true,
        keyboardScrolling: true,
        touchSensitivity: 100,
        responsiveWidth: 768,
        /*responsiveHeight: 900,*/
        scrollOverflow: $scrolloverflow,
        scrollOverflowOptions: {
            scrollbars: true,
            mouseWheel: true,
            hideScrollbars: false,
            fadeScrollbars: false,
            disableMouse: true
        },
        afterLoad: function(anchorLink, index){
            if (document.documentElement.clientWidth >= 768) {
                //section 1
                if(anchorLink == 'firma'){
                    $('#section1').find('#slide1 .heading, #slide1 p').fadeIn(1500, function(){
                        $('#section1').find('#slide1 .heading, #slide1 p').fadeIn(1500);
                    });

                    $('#section1').find('.heading, p').not('#slide1 .heading, #slide1 p').delay(500).fadeIn(1500, function(){
                        $('#section1').find('.heading, p').not('#slide1 .heading, #slide1 p').delay(500).fadeIn(1500);
                    });

                    $('#section1 #slide3 img').delay(500).each(function (index){
                        $(this).delay(200*index).fadeIn(1500);
                    });

                    $('#section1 #slide4 img').delay(500).each(function (index){
                        $(this).delay(200*index).fadeIn(1500);
                    });

                    $.fn.fullpage.reBuild();
                }

                //section 2
                if(anchorLink == 'practica'){
                    $('#section2').find('.heading, .sub-heading').fadeIn(1500, function(){
                        $('#section2').find('.heading, .sub-heading').fadeIn(1500);
                    });

                    $("#section2 .slide-left").each(function(index) {
                        $(this).delay(200*index).animate({
                            right: '0%'
                        }, 1000, 'easeOutQuart');
                    });

                    $("#section2 .slide-right").each(function(index) {
                        $(this).delay(200*index).animate({
                            left: '0%'
                        }, 1000, 'easeOutQuart');
                    });

                    $.fn.fullpage.reBuild();
                }

                //section 3
                if(anchorLink == 'presencia'){
                    $('#section3').find('.heading, .sub-heading').fadeIn(1500, function(){
                        $('#section3').find('.heading, .sub-heading').fadeIn(1500);
                    });

                    $("#section3 .slide-left").each(function(index) {
                        $(this).delay(200*index).animate({
                            right: '0%'
                        }, 1000, 'easeOutQuart');
                    });

                    $("#section3 .slide-right").each(function(index) {
                        $(this).delay(200*index).animate({
                            left: '0%'
                        }, 1000, 'easeOutQuart');
                    });

                    $.fn.fullpage.reBuild();
                }

                //section 4
                if(anchorLink == 'y-tu'){

                    $('#section4 .parallax h1, #section4 .parallax h4, #section4 .heading').delay(500).fadeIn(1500);

                    $('#section4 img').delay(500).each(function (index){
                        $(this).delay(200*index).fadeIn(1500);
                    });

                    $.fn.fullpage.reBuild();
                }

                //section 5
                if(anchorLink == 'blog'){

                    $('#section5').find('.main.heading').fadeIn(1500, function(){
                        $('#section5').find('.main.heading').fadeIn(1500);
                    });

                    $("#section5 .slide-left").each(function(index) {
                        $(this).delay(200*index).animate({
                            right: '0%',
                            left: '0%'
                        }, 1000, 'easeOutQuart');
                    });

                    $("#section5 .slide-top").each(function(index) {
                        $(this).delay(200*index).animate({
                            top: '50%',
                        }, 1000, 'easeOutQuart').find('.heading').delay(300*index).fadeIn(1500);
                    });

                    $.fn.fullpage.reBuild();
                }

                //section 7
                if(anchorLink == 'contacto'){

                    $('#section7').find('.heading').fadeIn(1500, function(){
                        $('#section7').find('.heading').fadeIn(1500);
                    });

                    $("#section7 .slide-left").each(function(index) {
                        $(this).delay(200*index).animate({
                            right: '0%',
                        }, 1000, 'easeOutQuart');
                    });

                    $("#section7 .slide-right").each(function(index) {
                        $(this).delay(200*index).animate({
                            left: '0%',
                        }, 1000, 'easeOutQuart').find('.heading').delay(300*index).fadeIn(1500);
                    });

                    $.fn.fullpage.reBuild();
                }
            }
        },
        css3: false
    });
}

// NAVBAR FADE EFFECT FUNCTIONALITY //
$(document).ready(function() {
    setTimeout(function() {
        navFading();
    }, 200);
});

// IF URL HASH CHANGES ON FULLSCREEN.JS, CALL navFading() //
$(window).on('hashchange', function() {
    navFading();
});

// IF CLICKED ON NAVBAR LINK, CHECK WICH SECTION IS ACTIVE TO EITHER SHOW OR HIDE NAVBAR //
$('.navbar-nav li a').click(function() {
    setTimeout(function() {
        navFading()
    }, 50);
});

// CHECK IF IS ON FIRST SECTION AND HIDE NAVBAR IF IT IS, OTHERWISE SHOW NAVBAR //
function navFading() {
    if( $('#section0').hasClass('active') ) {
        $('.navbar').fadeOut();
    } else {
        setTimeout(function() {
            $('.navbar').fadeIn();
        }, 800);
    }
}

// ADD SLIDEDOWN ANIMATION TO DROPDOWN //
$('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    $(this).find('.img-hover').css({'opacity':'1'})
});


// ADD SLIDEUP ANIMATION TO DROPDOWN //
$('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(100);
    $(this).find('.img-hover').css({'opacity':'0'})
});

// COLLAPSE ACCORDION WHILE OPENING NEW ONE //
$accordion = $('#accordion');
$accordion.on('show.bs.collapse','.collapse', function() {
    $accordion.find('.collapse.in').collapse('hide');
});

$accordion.on('hide.bs.collapse','.collapse', function() {
});

$accordion.on('shown.bs.collapse','.collapse', function() {
    $accordion.find('div[aria-expanded=true]').closest('.panel').animate({'background-color':'#861717'});
    if(!$isTouchDevice) {
        $.fn.fullpage.reBuild();
    }
});

$accordion.on('hidden.bs.collapse','.collapse', function() {
    $accordion.find('div[aria-expanded=false]').closest('.panel').animate({'background-color':'transparent'});
    $('#section2 .container').animate({'height':'auto'});
    if(!$isTouchDevice) {
        $.fn.fullpage.reBuild();
    }
});

$('.panel').on("mouseover", function () {

});

$('.panel').on("mouseout", function () {

});

$(document).ready(function () {
    $('.panel').hover(function () {
        if(!$isTouchDevice) {
            $(this).find('.collapse').collapse('show');
            $.fn.fullpage.reBuild();
        }
    }, 
                      function () {
        if(!$isTouchDevice) {
            $(this).find('.collapse').collapse('hide');
            $.fn.fullpage.reBuild();
        }
    });
});

$('#section0 .arrow-container').click(function() {
    $.fn.fullpage.moveSectionDown();
});

$(document).ready(function () {
    $(".navbar-nav li a").not('.dropdown-toggle').click(function(event) {
        $(".navbar-collapse").collapse('hide');
    });
});

$('#country').change(function () {
    if($(this).val() == 'USA') {
        $('#state-usa').removeClass('hidden').prop('disabled', false);
        $('#state').addClass('hidden').prop('disabled', true);
    } else {
        $('#state-usa').addClass('hidden').prop('disabled', true);
        $('#state').removeClass('hidden').prop('disabled', false);
    }
});