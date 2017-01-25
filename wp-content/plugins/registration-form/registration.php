<?php
/*
  Plugin Name: Registro de Usuarios
  Plugin URI: http://lemonthree.mx
  Description: Forma de registro para usuarios.
  Version: 1.1
  Author: José Angel Lujan
  Author URI: http://lemonthree.mx
 */

function registration_form( $username, $password, $email, $first_name, $last_name ) {

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
    <label for="firstname">Nombres*</label>
    <input type="text" name="fname" value="' . ( isset( $_POST['fname']) ? $first_name : null ) . '">
    </div>
     
    <div class="col-sm-6">
    <label for="website">Apellidos*</label>
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

function registration_validation( $username, $password, $email, $first_name, $last_name )  {
    global $reg_errors;
    $reg_errors = new WP_Error;

    if ( empty( $username ) ) {
        $reg_errors->add('field', 'El nombre de usuario es obligatorio.');
    }

    if ( empty( $password ) ) {
        $reg_errors->add('field', 'La contraseña es obligatoria.');
    }

    if ( empty( $email ) ) {
        $reg_errors->add('field', 'El correo electrónico es obligatorio.');
    }

    if ( empty( $first_name ) ) {
        $reg_errors->add('field', 'El nombre es obligatorio.');
    }

    if ( empty( $last_name ) ) {
        $reg_errors->add('field', 'Los apellidos son obligatorios.');
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
    global $reg_errors, $username, $password, $email, $first_name, $last_name;
    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $userdata = array(
            'user_login'    =>   $username,
            'user_email'    =>   $email,
            'user_pass'     =>   $password,
            'first_name'    =>   $first_name,
            'last_name'     =>   $last_name
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
            $_POST['fname'],
            $_POST['lname']
        );

        // sanitize user form input
        global $username, $password, $email, $first_name, $last_name;
        $username   =   sanitize_user( $_POST['username'] );
        $password   =   esc_attr( $_POST['password'] );
        $email      =   sanitize_email( $_POST['email'] );
        $first_name =   sanitize_text_field( $_POST['fname'] );
        $last_name  =   sanitize_text_field( $_POST['lname'] );

        // call @function complete_registration to create the user
        // only when no WP_error is found
        complete_registration(
            $username,
            $password,
            $email,
            $first_name,
            $last_name
        );
        send_welcome_email($email, $username, $password, $first_name);
    }

    registration_form(
        $username,
        $password,
        $email,
        $first_name,
        $last_name
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

function send_welcome_email($email, $user, $password, $firstname) {

    /*if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ) {
        $subject = "Welcome to Cerro Grande Corporativo's website.";

        $mssg = "To facilitate the follow-up process of your applications ";
        $mssg .= "we've have attached your profile data for you to login ";
        $mssg .= "and inspect your account information.";
        $mssg .= "Username: ".$user."<br>";
        $mssg .= "Password: ".$password;
    } else {
        $subject = 'Bienvenido al sitio web de Cerro Grande Corporativo';

        $mssg = "¡Hola ".$firstname."!<br><br>";
        $mssg .= "Esperando que el éxito en sus actividades sea un factor constante<br>";
        $mssg .= "distraemos de su tiempo para reiterarle lo importante que es para<br>";
        $mssg .= "nosotros atender a nuestro clientes de manera personalizada<br>";
        $mssg .= "y con información al día.<br><br>";
        $mssg .= "Para ello agradecemos de su confianza y le damos la bienvenida al<br>";
        $mssg .= "sistema de notificaciones digitales, donde a través de nuestro sitio web<br>";
        $mssg .= "podrá conocer y recibir el estatus de los temas que nos ha confiado.<br><br>";
        $mssg .= "Para accesar a su pantalla personalizada de <a href='http://www.cerrogrande.law/#login'>click aquí</a><br><br>";
        $mssg .= "Su usuario: ".$user."<br>";
        $mssg .= "Su contraseña: ".$password."<br><br>";
        $mssg .= "Sin más por el momento, nos reiteramos a la orden agradeciendo su preferencia.<br><br>";
        $mssg .= "¿Quiéres saber más?<br>";
        $mssg .= "<a href='http://cerrogrande.law/#contacto'>Contáctenos</a>";*/

    if (!function_exists('http_response_code')) {
        function http_response_code($code = NULL) {

            if ($code !== NULL) {

                switch ($code) {
                    case 100: $text = 'Continue'; break;
                    case 101: $text = 'Switching Protocols'; break;
                    case 200: $text = 'OK'; break;
                    case 201: $text = 'Created'; break;
                    case 202: $text = 'Accepted'; break;
                    case 203: $text = 'Non-Authoritative Information'; break;
                    case 204: $text = 'No Content'; break;
                    case 205: $text = 'Reset Content'; break;
                    case 206: $text = 'Partial Content'; break;
                    case 300: $text = 'Multiple Choices'; break;
                    case 301: $text = 'Moved Permanently'; break;
                    case 302: $text = 'Moved Temporarily'; break;
                    case 303: $text = 'See Other'; break;
                    case 304: $text = 'Not Modified'; break;
                    case 305: $text = 'Use Proxy'; break;
                    case 400: $text = 'Bad Request'; break;
                    case 401: $text = 'Unauthorized'; break;
                    case 402: $text = 'Payment Required'; break;
                    case 403: $text = 'Forbidden'; break;
                    case 404: $text = 'Not Found'; break;
                    case 405: $text = 'Method Not Allowed'; break;
                    case 406: $text = 'Not Acceptable'; break;
                    case 407: $text = 'Proxy Authentication Required'; break;
                    case 408: $text = 'Request Time-out'; break;
                    case 409: $text = 'Conflict'; break;
                    case 410: $text = 'Gone'; break;
                    case 411: $text = 'Length Required'; break;
                    case 412: $text = 'Precondition Failed'; break;
                    case 413: $text = 'Request Entity Too Large'; break;
                    case 414: $text = 'Request-URI Too Large'; break;
                    case 415: $text = 'Unsupported Media Type'; break;
                    case 500: $text = 'Internal Server Error'; break;
                    case 501: $text = 'Not Implemented'; break;
                    case 502: $text = 'Bad Gateway'; break;
                    case 503: $text = 'Service Unavailable'; break;
                    case 504: $text = 'Gateway Time-out'; break;
                    case 505: $text = 'HTTP Version not supported'; break;
                    default:
                        exit('Unknown http status code "' . htmlentities($code) . '"');
                        break;
                }

                $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

                header($protocol . ' ' . $code . ' ' . $text);

                $GLOBALS['http_response_code'] = $code;

            } else {

                $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);

            }

            return $code;

        }
    }

    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Additional headers
    $headers .= 'To: <' . $email . '>' . "\r\n";
    $headers .= 'From: Cerro Grande Corporativo <contacto@cerrogrande.law>' . "\r\n";

    // message
    $subject = 'Actualización de Estatus';
    $message = '
           <table style="padding-top: 100px;padding-bottom: 100px;margin: 0 auto;background: #fff;border-radius: 5px;width: 600px; border: 1px solid #e3e3e3; text-align: center;">
               <tbody>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                       <h1 style="color: #333;font-family: sans-serif;position: relative;bottom: 0%;margin: 0;font-weight:500;">¡Hola '.$firstname.'!</h1>
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;color: #353535;font-family: sans-serif;">
                        Esperando que el éxito en sus actividades sea un factor constante, <br>
                        distraemos de su tiempo para reiterarle lo importante que es para <br>
                        nosotros atender a nuestros clientes de manera personalizada <br>
                        y con información al día.
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;color: #353535;font-family: sans-serif;">
                        Por ello agradecemos de su confianza y le damos  la bienvenida a <br>
                        al sistema de notificaciones digitales, donde a través de nuestro sitio web <br>
                        podrá conocer y recibir el estatus de los temas que nos ha confiado.
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;color: #353535;font-family: sans-serif;">
                        Para accesar a su pantalla personalizada dé <a href="http://cerrogrande.law/#login">click aquí</a>
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;color: #353535;font-family: sans-serif;font-weight:bold;">
                       Su usuario: '.$user.' <br>
                       Su contraseña: '.$password.' 
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;color: #353535;font-family: sans-serif;">
                       Sin más por el momento, nos reiteramos a la orden agradeciendo su preferencia.
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;color: #353535;font-family: sans-serif;">
                       ¿Quiere saber más? <br>
                       <a href="http://cerrogrande.law/#contacto">Contáctenos</a>
                   </td>
               </tr>
               </tbody>
           </table>
       ';

    //  Message preview
    //return $message;

    if (wp_mail($email, $subject, $message, $headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        //echo "¡Gracias! Su mensaje ha sido envíado.";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        //echo "Oops! Hubo un error no pudimos mandar su mensaje.";
    }

}