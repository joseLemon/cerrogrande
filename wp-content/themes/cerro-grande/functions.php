<?php
add_theme_support( 'post-thumbnails' );
register_sidebar(array( 'name' => 'Blog','id' => 'blog','description' => "Blog sidebar", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));

function login_redirect( $redirect_to, $request, $user  ) {
	return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? 'admin' : 'user';
}
add_filter( 'login_redirect', 'login_redirect', 10, 3 );

?>