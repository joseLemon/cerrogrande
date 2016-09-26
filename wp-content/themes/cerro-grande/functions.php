<?php
add_theme_support( 'post-thumbnails' );
register_sidebar(array( 'name' => 'Blog','id' => 'blog','description' => "Blog sidebar", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));

function login_redirect( $redirect_to, $request, $user  ) {
    return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? 'lista-seguimientos' : 'mi-cuenta';
}
add_filter( 'login_redirect', 'login_redirect', 10, 3 );

function redirect_to_page() {
    if ( is_page('mi-cuenta') && ! is_user_logged_in() ) {
        wp_redirect( home_url().'/inicio#login', 301 );
        exit;
    }
    if ( (is_page('lista-seguimientos') || is_page('actualizar-solicitud') || is_page('registro') || is_page('submitsolicitor')) && !current_user_can('administrator')) {
        wp_redirect( home_url() );
        exit;
    }
}
add_action( 'template_redirect', 'redirect_to_page' );

function pdf_exists($url){
    $headers=get_headers($url);
    return stripos($headers[0],"200 OK")?true:false;
}
?>