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
/*if( isset($_POST['update']) ) {
    multiple recipients
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


/*if (wp_mail( $to, $subject, $message, $headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        //echo "¡Gracias! Su mensaje ha sido envíado.";
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        //echo "Oops! Hubo un error no pudimos mandar su mensaje.";
    }
}*/
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
    <div class="spacing">
        <form action="<?php echo home_url().'/submitsolicitor/?id='.$ID;?>" method="post" enctype="multipart/form-data" id="updateForm">
            <input type="hidden" value="<?php echo($ID)?>" name="follow_up_id" id="follow_up_id">
            <div class="wrapper seguimiento">
                <div class="container light-spacing" style="padding-bottom: 0px;">
                    <div class="nav-btns" style="padding: 0 50px;">
                        <a class="btn btn-primary" href="<?php echo home_url().'/';?>lista-seguimientos">&larr; ATRÁS</a>
                        <button class="btn btn-warning pull-right" id="edit-form">EDITAR</button>
                    </div>
                    <div class="clearfix"></div>
                    <div name="error" id="error" class="alert alert-danger hidden"></div>
                    <div class="form-container active">
                        <div class="light-spacing" style="padding-top: 0; padding-bottom: 0;">
                            <h1 class="header blue text-center">Seguimiento</h1>
                            <div class="row no-margin">
                                <h3 class="table-header">Información del Solicitante</h3>
                                <table class="followUp-table-view" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Asunto</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text">
                                    <tr>
                                        <td><input type="text" name="solicitor_name" id="solicitor_name" value="<?php echo $follow_up->solicitor_name; ?>" disabled></td>
                                        <td><input type="text" name="last_name" id="last_name" value="<?php echo $follow_up->last_name; ?>" disabled></td>
                                        <td><input type="text" name="m_last_name" id="m_last_name" value="<?php echo $follow_up->m_last_name; ?>" disabled></td>
                                        <td><input type="text" name="subject" id="subject" value="<?php echo $follow_up->subject; ?>" disabled></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="followUp-table-view" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Razón Social</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Teléfono</th>
                                        <th>Correo Electrónico</th>
                                    </tr>
                                    </thead>
                                    <tbody class="text">
                                    <tr>
                                        <td><input type="text" name="social" id="social" value="<?php echo $follow_up->social_reason; ?>" disabled disabled></td>
                                        <td><input type="text" name="date" id="date" value="<?php echo date('d/m/Y',strtotime($follow_up->birthday)); ?>" disabled disabled></td>
                                        <td><input type="text" name="phone" id="phone" value="<?php echo $follow_up->phone; ?>" disabled disabled></td>
                                        <td><input type="text" name="email" id="email" value="<?php echo $follow_up->email; ?>" disabled disabled></td>
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
                                        <td><input type="text" name="street" id="street" value="<?php echo $follow_up->street; ?>" disabled></td>
                                        <td><input type="text" name="exterior" id="exterior" value="<?php echo $follow_up->exterior_num; ?>" disabled></td>
                                        <td><input type="text" name="interior" id="interior" value="<?php echo $follow_up->interior_num; ?>" disabled></td>
                                        <td><input type="text" name="postal" id="postal" value="<?php echo $follow_up->postal_code; ?>" disabled></td>
                                        <td><input type="text" name="colony" id="colony" value="<?php echo $follow_up->colony; ?>" disabled></td>
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
                                        <td><input type="text" name="town" id="town" value="<?php echo $follow_up->town; ?>" disabled></td>
                                        <td><input type="text" name="locality" id="country" value="<?php echo $follow_up->locality; ?>" disabled></td>
                                        <td><input type="text" name="state" id="state" value="<?php echo $follow_up->state; ?>" disabled></td>
                                        <td><input type="text" name="country" value="<?php echo $follow_up->country; ?>" disabled></td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row no-margin">
                                    <div class="col-sm-6" style="padding: 0;">
                                        <h3 class="table-header">Comentarios</h3>
                                        <textarea class="table-textarea" name="text" id="text" cols="30" rows="5" placeholder="Comentarios" maxlength="254" disabled><?php echo $follow_up->comments; ?></textarea>
                                    </div>
                                    <div class="col-sm-6" style="padding: 0;">
                                        <h3 class="table-header">PDF</h3>
                                        <div class="table-cell pdf-container">
                                            <?php
                                            $pdf_file_template = get_template_directory_uri().'/file_uploads/'.$ID;
                                            for ($i = 0; $i < 3; $i++) {
                                                if(pdf_exists($pdf_file_template.'-'.$i.'.pdf')) {
                                                    echo '<a style="display: inline-block;" href="'.$pdf_file_template.'-'.$i.'.pdf'.'" class="center-block" target="_blank">Ver PDF #'.($i+1).'</a>
                                        <div style="display: inline-block; cursor: pointer;" class="delete-file" data-file="'.$ID.'-'.$i.'.pdf'.'"><span class="glyphicon glyphicon-remove"></span></div><br>';
                                                }
                                            }
                                            ?>
                                            <label for="pdf_file">Cambiar PDF</label>
                                            <input type="file" class="inputfile" name="pdf_file[]" id="pdf_file" multiple>
                                            <label for="pdf_file"></label>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="25000000"/>
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
                                <input class="green-btn white" type="submit" name="update" id="update" value="Actualizar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form action="<?php echo home_url().'/submitsolicitor/?id='.$ID;?>" method="post"" id="deleteForm">
        <div class="text-center form-container" style="display: block; min-height: 0;">
            <input class="btn btn-danger" style="font-size: 21px;" type="submit" name="delete" id="delete" value="Eliminar">
        </div>
        </form>
    </div>

    <script>
        $('#edit-form').click(function (e) {
            e.preventDefault();
            $('input textarea').removeAttr('disabled');
        });


        $('.delete-file').click(function() {
            console.log('click');
            $.ajax({
                type: "POST",
                url: "<?php echo home_url().'/submitsolicitor/?id='.$ID ?>",
                data: { file_delete: $(this).data('file') }
            }).done(function( msg ) {
                alert( "Eliminado Exitosamente");
                location.reload();
            });

        });
    </script>

<?php include('footer.php'); ?>