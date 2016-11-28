<?php
/*
  Plugin Name: Registro de Usuarios
  Plugin URI: http://lemonthree.mx
  Description: Forma de registro para usuarios.
  Version: 1.0
  Author: José Angel Lujan
  Author URI: http://lemonthree.mx
 */

function registration_form( $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio ) {

    echo '
    <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
    <div class="row no-margin">
    <div class="col-sm-6">
    <label for="username">Nombre de Usuario <strong>*</strong></label>
    <input type="text" name="username" value="' . ( isset( $_POST['username'] ) ? $username : null ) . '">
    </div>
     
    <div class="col-sm-6">
    <label for="password">Contraseña <strong>*</strong></label>
    <input type="password" name="password" value="' . ( isset( $_POST['password'] ) ? $password : null ) . '">
    </div>
     
    <div class="col-sm-12">
    <label for="email">Correo Electrónico <strong>*</strong></label>
    <input type="text" name="email" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
    </div>
     
    <!--<div class="col-sm-6">
    <label for="website">Website</label>
    <input type="text" name="website" value="' . ( isset( $_POST['website']) ? $website : null ) . '">
    </div>-->
     
    <div class="col-sm-6">
    <label for="firstname">Nombres</label>
    <input type="text" name="fname" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
    </div>
     
    <div class="col-sm-6">
    <label for="website">Apellidos</label>
    <input type="text" name="lname" value="' . ( isset( $_POST['lname']) ? $last_name : null ) . '">
    </div>
     
    <!--<div class="col-sm-6">
    <label for="nickname">Nickname</label>
    <input type="text" name="nickname" value="' . ( isset( $_POST['nickname']) ? $nickname : null ) . '">
    </div>-->
     
    <!--<div class="col-sm-6">
    <label for="bio">About / Bio</label>
    <textarea name="bio">' . ( isset( $_POST['bio']) ? $bio : null ) . '</textarea>
    </div>-->
    
    <div class="col-sm-12 text-center">
    <input type="submit" name="submit" value="Registrar"/>
    </div>
    </div>
    </form>
    ';
}

function registration_validation( $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio )  {
    global $reg_errors;
    $reg_errors = new WP_Error;

    if ( empty( $username ) ) {
        $reg_errors->add('field', 'El nombre de usuario debe ser ingresado.');
    }

    if ( empty( $password ) ) {
        $reg_errors->add('field', 'La contraseña debe ser ingresada.');
    }

    if ( empty( $email ) ) {
        $reg_errors->add('field', 'Un correo electrónico debe ser ingresado.');
    }

    if ( 4 > strlen( $username ) ) {
        $reg_errors->add( 'username_length', 'Nombre de usuario demasiado corto. Se requiere un mínimo de 4 caracteres.' );
    }

    if ( username_exists( $username ) )
        $reg_errors->add('user_name', 'Lo sentimos, este usuario ya existe.');

    if ( ! validate_username( $username ) ) {
        $reg_errors->add( 'username_invalid', 'Lo sentimos, el nombre de usuario no tiene un formato válido.' );
    }

    if ( 5 > strlen( $password ) ) {
        $reg_errors->add( 'password', 'La longitud mínima del password es de 5 caracteres.' );
    }

    if ( !is_email( $email ) ) {
        $reg_errors->add( 'email_invalid', 'Lo sentimos, el correo ingresado no tiene un formato válido' );
    }

    if ( email_exists( $email ) ) {
        $reg_errors->add( 'email', 'Este correo electrónico ya se encuentra en uso.' );
    }

    if ( ! empty( $website ) ) {
        if ( ! filter_var( $website, FILTER_VALIDATE_URL ) ) {
            $reg_errors->add( 'website', 'El sitio web ingresado no es un URL válido.' );
        }
    }

    if ( is_wp_error( $reg_errors ) && ! empty( $reg_errors->errors ) ) {

        echo 'conteno: '.count($reg_errors);
        print_r($reg_errors);
        echo '<div class="alert alert-danger">';
        echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';

        foreach ( $reg_errors->get_error_messages() as $error ) {
            echo '<strong>ERROR</strong>:';
            echo $error . '<br/>';
        }

        echo '</div>';

    }
}

function complete_registration() {
    global $reg_errors, $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio;
    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $userdata = array(
            'user_login'    =>   $username,
            'user_email'    =>   $email,
            'user_pass'     =>   $password,
            'user_url'      =>   $website,
            'first_name'    =>   $first_name,
            'last_name'     =>   $last_name,
            'nickname'      =>   $nickname,
            'description'   =>   $bio,
        );
        $user = wp_insert_user( $userdata );

        echo '<div class="alert alert-success">';
        echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
        echo 'Usuario registrado exitosamente.';
        echo '</div>';
    }
}

function custom_registration_function() {
    if ( isset($_POST['submit'] ) ) {
        registration_validation(
            $_POST['username'],
            $_POST['password'],
            $_POST['email'],
            $_POST['website'],
            $_POST['fname'],
            $_POST['lname'],
            $_POST['nickname'],
            $_POST['bio']
        );

        // sanitize user form input
        global $username, $password, $email, $website, $first_name, $last_name, $nickname, $bio;
        $username   =   sanitize_user( $_POST['username'] );
        $password   =   esc_attr( $_POST['password'] );
        $email      =   sanitize_email( $_POST['email'] );
        $website    =   esc_url( $_POST['website'] );
        $first_name =   sanitize_text_field( $_POST['fname'] );
        $last_name  =   sanitize_text_field( $_POST['lname'] );
        $nickname   =   sanitize_text_field( $_POST['nickname'] );
        $bio        =   esc_textarea( $_POST['bio'] );

        // call @function complete_registration to create the user
        // only when no WP_error is found
        complete_registration(
            $username,
            $password,
            $email,
            $website,
            $first_name,
            $last_name,
            $nickname,
            $bio
        );
        send_welcome_email($email, $username, $password);
    }

    registration_form(
        $username,
        $password,
        $email,
        $website,
        $first_name,
        $last_name,
        $nickname,
        $bio
    );
}

// Register a new shortcode: [cr_custom_registration]
add_shortcode( 'registration_form', 'custom_registration_shortcode' );

// The callback function that will replace [book]
function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}

function send_welcome_email($email, $user, $password) {

    if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ) {
        $subject = "Welcome to Cerro Grande Corporativo's website.";

        $mssg = "To facilitate the follow-up process of your applications ";
        $mssg .= "we've have attached your profile data for you to login ";
        $mssg .= "and inspect your account information.\n";
        $mssg .= "Username: ".$user."\n";
        $mssg .= "Password: ".$password;
    } else {
        $subject = 'Bienvenido al sitio web de Cerro Grande Corporativo';

        $mssg = "Para facilitarte el seguimiento de tus solicitudes ";
        $mssg .= "hemos adjuntado los datos de tu perfil para que puedas iniciar sesión ";
        $mssg .= "y puedas inspeccionar la información de tu cuenta.\n";
        $mssg .= "Usuario: ".$user."\n";
        $mssg .= "Contraseña: ".$password;
    }

    $headers = "From: luis@cerrogrande.law";

    mail($email,$subject,$mssg,$headers);

}