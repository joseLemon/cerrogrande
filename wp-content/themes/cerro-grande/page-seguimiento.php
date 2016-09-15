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
$folder = get_bloginfo('template_url').'/img/seguimiento/';

switch( $follow_ups->status_id ) {
    case 1:
        $solicitud = $folder.'proceso-active.png';
        $proceso = $folder.'pausa.png';
        $registro = $folder.'concluido.png';
        break;
    case 2:
        $solicitud = $folder.'proceso.png';
        $proceso = $folder.'pausa-active.png';
        $registro = $folder.'concluido.png';
        break;
    case 3:
        $solicitud = $folder.'proceso.png';
        $proceso = $folder.'pausa.png';
        $registro = $folder.'concluido-active.png';
        break;
}
?>
<div class="wrapper registro seguimiento spacing">
    <div class="container">
        <div class="form-container active light-spacing">
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
                <h3>Asunto</h3>
                <p>
                    <?php echo $follow_ups->subject; ?>
                </p>
                <h3>Información del Solicitante</h3>
                <table style="width: 100%">
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
                            <td><?php echo $follow_ups->solicitor_name." ".$follow_ups->last_name." ".$follow_ups->m_last_name; ?></td>
                            <td><?php echo $follow_ups->social_reason; ?></td>
                            <td><?php echo $follow_ups->birthday; ?></td>
                            <td><?php echo $follow_ups->phone; ?></td>
                            <td><?php echo $follow_ups->email; ?></td>
                        </tr>
                    </tbody>
                </table>
                <div style="margin: 10px 0;" class="center-block"></div>
                <h3>Domicilio del Solicitante</h3>
                <table style="width: 100%">
                    <thead>
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
                            <td><?php echo $follow_ups->exterior_num; ?></td>
                            <td><?php echo $follow_ups->interior_num; ?></td>
                            <td><?php echo $follow_ups->postal_code; ?></td>
                        </tr>
                    </tbody>
                </table>
                <table style="width: 100%">
                    <thead>
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
                <h3>Información Adicional</h3>
                <div class="row no-margin">
                    <div class="col-sm-6">
                        <p><?php echo $follow_ups->comments; ?></p>
                    </div>
                    <div class="col-sm-6">
                        <?php
                        $pdf_file = get_template_directory_uri().'/file_uploads/'.$follow_up_id.'.pdf';
                        if(pdf_exists($pdf_file)) {
                            echo '<a href="'.$pdf_file.'" target="_blank">Ver PDF</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>