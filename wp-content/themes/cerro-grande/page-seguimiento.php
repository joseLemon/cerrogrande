<?php include('header.php'); ?>
<?php
$follow_up_id = $_GET['id'];
$current_user = wp_get_current_user();
$ID = $current_user->ID;
$follow_ups = $wpdb->get_results("SELECT * FROM follow_ups WHERE follow_up_id =".$follow_up_id." LIMIT 1");
$follow_ups = $follow_ups[0];
if($follow_ups->user_id != $ID) {
    $follow_ups = [];
}
$payment_status = $wpdb->get_results("SELECT post_status FROM wp_posts JOIN follow_ups ON wp_posts.ID = follow_ups.wp_post_id WHERE wp_posts.ID =  '".$follow_ups->wp_post_id."'");
$payment_status = $payment_status[0];
$solicitud = get_bloginfo('template_url').'/img/seguimiento/';
$proceso = get_bloginfo('template_url').'/img/seguimiento/';
$registro = get_bloginfo('template_url').'/img/seguimiento/';

switch( $follow_ups->status_id ) {
    case 1:
        $solicitud = $solicitud.'proceso-active.png';
        $proceso = $proceso.'pausa.png';
        $registro = $registro.'concluido.png';
        break;
    case 2:
        $solicitud = $solicitud.'proceso.png';
        $proceso = $proceso.'pausa-active.png';
        $registro = $registro.'concluido.png';
        break;
    case 3:
        $solicitud = $solicitud.'proceso.png';
        $proceso = $proceso.'pausa.png';
        $registro = $registro.'concluido-active.png';
        break;
}
?>
<div class="wrapper registro seguimiento">
    <div class="container">
        <div class="form-container active spacing">
            <div class="info">
                <a href=""><img src="<?php echo bloginfo('template_url'); ?>/img/icons/info.png" alt=""></a>
            </div>
            <h1 class="header blue text-center">Seguimiento</h1>
            <div class="row text-center margin-bottom">
                <div class="col-sm-4 margin-top">
                    <p class="gray text-center">Solicitud</p>
                    <input type="text" class="hidden" value="">

                    <img src="<?php echo $solicitud; ?>" alt="Solicitud">
                    <hr class="right">
                </div>
                <div class="col-sm-4 margin-top">
                    <p class="gray text-center">Proceso</p>
                    <img src="<?php echo $proceso; ?>" alt="Proceso">
                </div>
                <div class="col-sm-4 margin-top">
                    <p class="gray text-center">Registro</p>
                    <img src="<?php echo $registro; ?>"  alt="Registro">
                    <hr class="left">
                </div>
            </div>
            <div class="row light-spacing">
                <h3 class="blue text-center">Información del Solicitante</h3>
                <table>
                    <thead class="white">
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
                            <td><?php echo $follow_ups->solicitor_name." ".$follow_ups->last_name." ".$follow_ups->m_last_name; ?></td>
                            <td><?php echo $follow_ups->social_reason; ?></td>
                            <td><?php echo $follow_ups->birthday; ?></td>
                            <td><?php echo $follow_ups->phone; ?></td>
                            <td><?php echo $follow_ups->email; ?></td>
                        </tr>
                    </tbody>
                </table>
                <div style="margin: 10px 0;" class="center-block"></div>
                <h3 class="blue text-center">Domicilio del Solicitante</h3>
                <table>
                    <thead class="white">
                        <tr>
                            <th>Calle</th>
                            <th>Número Exterior</th>
                            <th>Número Interior</th>
                            <th>Código Postal</th>
                        </tr>
                    </thead>
                    <tbody class="text">
                        <tr>
                            <td><?php echo $follow_ups->street; ?></td>
                            <td><?php echo $follow_ups->ext_num; ?></td>
                            <td><?php echo $follow_ups->int_num; ?></td>
                            <td><?php echo $follow_ups->postal_code; ?></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead class="white">
                        <tr>
                            <th>Colonia</th>
                            <th>Municipio</th>
                            <th>Localidad</th>
                            <th>Estado</th>
                            <th>País</th>
                        </tr>
                    </thead>
                    <tbody class="text">
                        <tr>
                            <td><?php echo $follow_ups->colony; ?></td>
                            <td><?php echo $follow_ups->town; ?></td>
                            <td><?php echo $follow_ups->locality; ?></td>
                            <td><?php echo $follow_ups->state; ?></td>
                            <td><?php echo $follow_ups->country; ?></td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="blue text-center">Comentarios</h3>
                <textarea name="" id="" cols="30" rows="10" readonly><?php echo $follow_ups->comments; ?></textarea>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>