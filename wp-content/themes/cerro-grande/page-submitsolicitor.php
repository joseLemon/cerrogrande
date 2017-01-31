<?php
$date = date('Y-m-d',strtotime($_POST['date']));
$array = [];
foreach( $_POST as $key => $P) {
    $array[$key] = $_POST[$key];
}
if(isset($_POST['create'])) {$query = "INSERT INTO `follow_ups` (`follow_up_id`, `user_id`, `status_id`,
    `subject`, `solicitor_name`, `last_name`, `m_last_name`, `social_reason`, `birthday`, `phone`,
    `email`, `street`, `exterior_num`, `interior_num`, `postal_code`, `colony`, `town`, `locality`,
    `state`, `country`, `comments`)
    VALUES (NULL, '".$array['user_id']."', '1', '".$array['subject']."', '".$array['solicitor_name']."',
    '".$array['last_name']."', '".$array['m_last_name']."', '".$array['social']."', '".$date."', '".$array['phone']."',
    '".$array['email']."', '".$array['street']."', '".$array['exterior']."', '".$array['interior']."',
    '".$array['postal']."', '".$array['colony']."', '".$array['town']."', '".$array['locality']."',
    '".$array['state']."', '".$array['country']."', '".$array['text']."');";

    $follow_up_id = $wpdb->get_results("SELECT follow_up_id FROM follow_ups WHERE user_id =".$array['user_id']." AND created_at = (select MAX(created_at) FROM follow_ups WHERE user_id =".$array['user_id'].")");
    $follow_up_id = $follow_up_id[0]->follow_up_id;
}

if(isset($_POST['update'])) {
    if(count($array) <= 4) {
        $query = "UPDATE follow_ups SET status_id = '".$_POST['status']."'WHERE  follow_ups.follow_up_id =".$_POST['follow_up_id'].";";
    } else {
        $query = "UPDATE follow_ups
    SET solicitor_name = '".$_POST['solicitor_name']."', last_name = '".$_POST['last_name']."', m_last_name = '".$_POST['m_last_name']."',
    status_id = '".$_POST['status']."', subject = '".$array['subject']."', social_reason = '".$array['social']."',
    birthday = '".$date."', phone = '".$array['phone']."', email = '".$array['email']."', street = '".$array['street']."',
    exterior_num = '".$array['exterior']."', interior_num ='".$array['interior']."', postal_code = '".$array['postal']."',
    colony = '".$array['colony']."', town = '".$array['town']."', locality = '".$array['locality']."', state = '".$array['state']."',
    country = '".$array['country']."', comments = '".$array['text']."' WHERE  follow_ups.follow_up_id =".$_POST['follow_up_id'].";";
    }

    $follow_up_id = $_GET['id'];
}

if(isset($_POST['delete'])) {
    $query = "UPDATE follow_ups SET deleted_at = '".date('Y-m-d H:i:s')."'WHERE  follow_ups.follow_up_id = ".$_GET['id'].";";
    $follow_up_id = $_GET['id'];
}

if(isset($_POST['file_delete'])) {

    $file_path = dirname(__FILE__).'/file_uploads/';

    unlink($file_path.$_POST['file_delete']);

    echo $file_path.$_POST['file_delete'];
    return $_POST['file_delete'];
}

$wpdb->query( $query );

if(isset($_POST['update']) || isset($_POST['create'])) {

    // Count # of uploaded files in array
    $total = count($_FILES['pdf_file']['name']);

    if ($total > 3) {
        $total = 3;
    }

    $counter = 0;

    for ($i = 0; $i < $total; $i++) {
        $target_dir = dirname(__FILE__) . '/file_uploads/';
        $target_file = $target_dir . basename($_FILES["pdf_file"]["name"][$i]);
        $uploadOk = 1;

        if ($counter == 3) {
            return true;
        }

        if ($_FILES["pdf_file"]["size"][$i] > 25000000) {
            $uploadOk = 0;
            //echo "Lo sentimos, el pdf tiene un peso mayor a 25Mb.";
            continue;
        }

        if (!pdf_exists(get_template_directory_uri().'/file_uploads/' . $follow_up_id . '-' . $i . '.pdf')) {
            if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"][$i], $target_dir . $follow_up_id . '-' . $i . '.pdf')) {
                //echo "The file " . basename($_FILES["design"]["name"][$i]) . " has been uploaded.";
            } else {
                //echo "Sorry, there was an error uploading your file Design.";
            }
        } else {
            for ($k = 0; $k < 3; $k++) {
                if (!pdf_exists(get_template_directory_uri().'/file_uploads/' . $follow_up_id . '-' . $k . '.pdf')) {
                    move_uploaded_file($_FILES["pdf_file"]["tmp_name"][$i], $target_dir . $follow_up_id . '-' . $k . '.pdf');
                    continue;
                } else {
                    $counter++;
                }
            }
        }
    }
}

if(isset($_POST['create']) || isset($_POST['delete'])) {
    wp_redirect('lista-seguimientos');
}

if(isset($_POST['update'])) {
    $follow_up = $wpdb->get_results("SELECT * FROM follow_ups WHERE follow_up_id =".$follow_up_id)[0];
    $status = $wpdb->get_results("SELECT statuses.name FROM statuses WHERE status_id = ".$follow_up->status_id)[0]->name;
    sendMail($follow_up,$status);
    wp_redirect('actualizar-solicitud/?id='.$follow_up_id);
}

function sendMail($follow_up,$status) {
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

    $to = $follow_up->email;

    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Additional headers
    $headers .= 'To: <' . $to . '>' . "\r\n";
    $headers .= 'From: Cerro Grande Corporativo <contacto@cerrogrande.law>' . "\r\n";

    // message
    $subject = 'Actualización de Estatus';
    $message = '
           <table style="padding-top: 100px;padding-bottom: 100px;margin: 0 auto;background: #fff;border-radius: 5px;width: 600px; border: 1px solid #e3e3e3; text-align: center;">
               <tbody>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px 5px 30px 5px;">
                       <img src="'.get_bloginfo('template_url').'/img/logo-inverted.png" alt="CERRO GRANDE CORPORATIVO" style="max-width: 320px;">
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                       <h1 style="color: #333;font-family: sans-serif;position: relative;bottom: 0%;margin: 0;font-weight:500;">Hola '.$follow_up->solicitor_name.'</h1>
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;color: #353535;font-family: sans-serif;">
                        Le distraemos de su amable tiempo para <br>
                        informarle de manera ejecutiva lo siguiente:
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;color: #353535;font-family: sans-serif;font-weight:bold;">
                       Asunto: '.$follow_up->subject.'<br>
                       Estatus: '.$status.'<br>
                       Comentarios: '.$follow_up->comments.'
                   </td>
               </tr>
               <tr>
                   <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;color: #353535;font-family: sans-serif;">
                       Para accesar a su pantalla personalizada dé <a href="http://cerrogrande.law/#login">click aquí</a>
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

    if (wp_mail($to, $subject, $message, $headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        //echo "¡Gracias! Su mensaje ha sido envíado.";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        //echo "Oops! Hubo un error no pudimos mandar su mensaje.";
    }
}