<?php include('header.php'); ?>
<?php
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
if( isset($_POST['status']) ) {
    $wpdb->query("UPDATE follow_ups SET  status_id =  '".$_POST['status']."', comments = '".$_POST['comments']."'  WHERE  follow_ups.follow_up_id =".$_POST['follow_up_id'].";");

    $ID = $_GET['id'];
    $follow_up = $wpdb->get_results("SELECT * FROM follow_ups WHERE follow_up_id =".$ID." LIMIT 1");
    $follow_up = $follow_up[0];

    $target_dir = dirname(__FILE__).'/file_uploads/';
    $target_file = $target_dir . basename($_FILES["design"]["name"]);
    $uploadOk = 1;
    if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_dir .$ID.'.pdf')) {
        //echo "The file ". basename( $_FILES["design"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file Design.";
    }

    if ($_FILES["upload-file"]["size"] > 25000000) {
        $uploadOk = 0;
        echo "Lo sentimos, esa imagen tiene un peso mayor a 25Mb.";
    }

    // multiple recipients
    $to  = $follow_up->email;

    $solicitud = 'http://registralow.com/site/seguimiento/?id='.$ID;

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

    // Additional headers
    $headers .= 'To: <'.$to.'>' . "\r\n";
    $headers .= 'From: Registralow <pepe.lujan@gmail.com>' . "\r\n";

    // message
    /*switch( $_POST['status'] ) {
        case 0:
            break;
        case 1:
            $subject = '¡Tu marca es registrable!';
            $message = '
                <table style="padding-top: 100px;padding-bottom: 100px;margin: 0 auto;background: #fff;border-radius: 5px;width: 600px; border: 1px solid #e3e3e3;">
                    <tbody>
                        <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                            <h1 style="color: #00a8e7;font-family: sans-serif;position: relative;bottom: 0%;margin: 0;">¡Buenas noticias!</h1>
                        </td>
                        <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                            <h2 style="color: #979797;font-family: sans-serif;margin: 0;padding-bottom: 20px;">tu marca es registrable.</h2>
                        </td>
                        <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                            <a href="'.$solicitud.'" style="display: block;margin: 0 auto;height: 62px;width: 128px;border-radius: 10px;font-size: 21px;line-height: 62px;background-color: #10cc45;font-family: sans-serif;color: #fff;text-decoration: none;font-size: 18px;">Ver Solicitud</a>
                        </td>
                    </tbody>
                </table>
            ';
            break;
        case 2:
            $subject = 'Tu marca pudiera no ser registrable';
            $message = '
                <table style="padding-top: 100px;padding-bottom: 100px;padding-left:15px;padding-right:15px;margin: 0 auto;background: #fff;border-radius: 5px;width: 600px; border: 1px solid #e3e3e3;">
                    <tbody>
                        <td style="width:100%;margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                            <h1 style="color:#00a8e7; font-family: sans-serif;margin-bottom:0;">Nuestros abogados consideran que<br></h1>
                            <h2 style="color:#00a8e7; font-family: sans-serif;margin-top:0;">tu marca pudiera no ser registrable.</h2>  
                        </td>
                        <td style="width:100%;margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                            <h1 style="color: #979797; font-family: sans-serif;margin-bottom:0;">Te recomendamos modificar tu<br></h1>
                            <h2 style="color: #979797; font-family: sans-serif;margin-top:0;">marca y realizar, de manera gratuita, una segunda búsqueda.</h2>            
                        </td>
                        <td style="width:100%;margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                            <a href="'.$solicitud.'" style="display: block;margin: 0 auto;height: 62px;width: 128px;border-radius: 10px;font-size: 21px;line-height: 62px;background-color: #10cc45;font-family: sans-serif;color: #fff;text-decoration: none;font-size: 18px;">Ver Solicitud</a>
                        </td>            
                    </tbody>
                </table>
            ';
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            break;
        case 6:
            break;
        case 7:
            $subject = '¡Tu marca ha sido registrada!';
            $message = '
                <table style="padding-top: 100px;padding-bottom: 100px;padding-left:15px;padding-right:15px;margin: 0 auto;background: #fff;border-radius: 5px;width: 600px; border: 1px solid #e3e3e3;">
                    <tbody>
                        <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                            <h1 style="color:#00a8e7; font-family: sans-serif;">¡Felicidades tu marca ha sido registrada!<br></h1>                
                        </td>
                        <td style="margin: 0 auto;text-align: center;height: auto;display: block;padding: 5px;">
                            <h2 style="color: #979797;font-family: sans-serif;margin: 0;padding-bottom: 20px;">En breve recibirás en tu domicilio el título original y nuestro paquete <span style="color: #10cc45;">REGISTRALOW</span>.</h2>
                        </td>
                    </tbody>
                </table>
            ';
            break;
    }*/


    if (wp_mail( $to, $subject, $message, $headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        //echo "¡Gracias! Su mensaje ha sido envíado.";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        //echo "Oops! Hubo un error no pudimos mandar su mensaje.";
    }
}
$ID = $_GET['id'];
$follow_up = $wpdb->get_results("SELECT * FROM follow_ups WHERE follow_up_id =".$ID." LIMIT 1");
$follow_up = $follow_up[0];
$folder = get_bloginfo('template_url').'/img/seguimiento/';

switch( $follow_up->status_id ) {
    case 1:
        $proceso = 'active';
        $pausa = '';
        $concluido = '';
        break;
    case 2:
        $proceso = '';
        $pausa = 'active';
        $concluido = '';
        break;
    case 3:
        $proceso = '';
        $pausa = '';
        $concluido = 'active';
        break;
}
?>
<form action="<?php echo (the_permalink().'?id='.$ID); ?>" method="post">
    <input type="hidden" value="<?php echo($ID)?>" name="follow_up_id" id="follow_up_id">
    <div class="wrapper registro seguimiento spacing">
        <div class="container">
            <div class="form-container active">
                <div class="light-spacing">
                    <h1 class="header blue text-center">Seguimiento</h1>
                    <div class="row no-margin">
                        <h3 class="table-header">Información del Solicitante</h3>
                        <table class="followUp-table-view" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Razón Social</th>
                                    <th>Fecha de Nacimiento</th>
                                    <th>Teléfono</th>
                                    <th>Correo Electrónico</th>
                                </tr>
                            </thead>
                            <tbody class="text">
                                <tr>
                                    <td><?php echo $follow_up->name." ".$follow_up->last_name." ".$follow_up->m_last_name; ?></td>
                                    <td><?php echo $follow_up->social_reason; ?></td>
                                    <td><?php echo $follow_up->birthday; ?></td>
                                    <td><?php echo $follow_up->phone; ?></td>
                                    <td><?php echo $follow_up->email; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <h3 class="table-header">Domicilio del Solicitante</h3>
                        <table class="followUp-table-view" style="width: 100%;">
                            <colgroup>
                                <col style="width: 20%">
                                <col style="width: 20%">
                                <col style="width: 20%">
                                <col style="width: 20%">
                                <col style="width: 20%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>Calle</th>
                                    <th>Número Exterior</th>
                                    <th>Número Interior</th>
                                    <th>Código Postal</th>
                                    <th>Colonia</th>
                                </tr>
                            </thead>
                            <tbody class="text">
                                <tr>
                                    <td><?php echo $follow_up->street; ?></td>
                                    <td><?php echo $follow_up->exterior_num; ?></td>
                                    <td><?php echo $follow_up->interior_num; ?></td>
                                    <td><?php echo $follow_up->postal_code; ?></td>
                                    <td><?php echo $follow_up->colony; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="followUp-table-view" style="width: 100%;">
                            <colgroup>
                                <col style="width: 20%">
                                <col style="width: 20%">
                                <col style="width: 20%">
                                <col style="width: 20%">
                                <col style="width: 20%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>Municipio</th>
                                    <th>Localidad</th>
                                    <th>Estado</th>
                                    <th>País</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="text">
                                <tr>
                                    <td><?php echo $follow_up->town; ?></td>
                                    <td><?php echo $follow_up->locality; ?></td>
                                    <td><?php echo $follow_up->state; ?></td>
                                    <td><?php echo $follow_up->country; ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row no-margin">
                            <div class="col-sm-6" style="padding: 0;">
                                <h3 class="table-header">Comentarios</h3>
                                <textarea class="table-textarea" name="comments" id="comments" cols="30" rows="5" placeholder="Comentarios" maxlength="254"><?php echo $follow_up->comments; ?></textarea>
                            </div>
                            <div class="col-sm-6" style="padding: 0;">
                                <h3 class="table-header">PDF</h3>
                                <?php
                                $pdf_file = get_template_directory_uri().'/file_uploads/'.$ID.'.pdf';
                                if(pdf_exists($pdf_file)) {
                                    echo '<a href="'.$pdf_file.'" class="center-block" target="_blank">Ver PDF</a>';
                                }
                                ?>
                                <div class="table-cell">
                                    <label for="pdf_file">Cambiar PDF</label>
                                    <input type="file" name="pdf_file" id="pdf_file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="row text-center margin-bottom followUp-status">
                            <div class="col-sm-4 margin-top">
                                <p class="gray text-center <?php echo $proceso; ?>">En Proceso</p>
                                <input type="text" class="hidden" value="">
                                <hr class="right">
                            </div>
                            <div class="col-sm-4 margin-top">
                                <p class="gray text-center <?php echo $pausa; ?>">En Pausa</p>
                            </div>
                            <div class="col-sm-4 margin-top">
                                <p class="gray text-center <?php echo $concluido; ?>">Concluido</p>
                                <hr class="left">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3" style="padding-left: 0; padding-right: 0;">
                        <select name="status" id="status">
                            <?php
                            $statuses = $wpdb->get_results("SELECT status_id, name FROM statuses");
                            foreach( $statuses as $status ) {
                                if( $status->status_id==$follow_up->status_id ) {
                            ?>
                            <option value="<?php echo $status->status_id ?>" selected><?php echo $status->name ?></option>
                            <?php   }else{ ?>
                            <option value="<?php echo $status->status_id ?>"><?php echo $status->name ?></option>
                            <?php   }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center actualizar-solicitud">
                        <input class="green-btn white" type="submit" value="Actualizar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include('footer.php'); ?>