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

function my_show_extra_profile_fields( $user ) {
?>
	<h3>Información de Idioma</h3>
	<table class="form-table">
		<tr>
			<th><label for="twitter">Inglés</label></th>
			<td>
				<input type="checkbox" <?php if(get_the_author_meta( 'activate_en', $user->ID ) == '1') echo 'checked'; ?> name="activate_en" id="activate_en"/><br />
				<span class="description">Activar lenguaje Inglés.</span>
			</td>
		</tr>
	</table>
<?php }
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;
	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'activate_en', $_POST['activate_en'] ? "1" : "0" );
}
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
?>