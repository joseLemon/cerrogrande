<?php include('header.php'); ?>
<?php
$follow_up_id = $_GET['id'];
$current_user = wp_get_current_user();
$ID = $current_user->ID;
$follow_ups = $wpdb->get_results("SELECT * FROM follow_ups WHERE follow_up_id =".$follow_up_id." AND user_id = ".$ID." LIMIT 1");
$follow_ups = $follow_ups[0];
if($follow_ups->user_id != $ID) {
    $follow_ups = [];
}
$folder = get_bloginfo('template_url').'/img/seguimiento/';

switch( $follow_ups->status_id ) {
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
<div class="wrapper registro seguimiento user-view spacing">
    <div class="container">
        <div class="form-container active spacing">
            <h1 class="header blue text-center">
                <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Application Status'
                    : 'Seguimiento';?>
            </h1>
            <div class="row text-center margin-bottom followUp-status">
                <div class="col-sm-4 margin-top">
                    <p class="gray text-center <?php echo $proceso; ?>">
                        <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'In Process'
                            : 'En Proceso';?>
                    </p>
                    <input type="text" class="hidden" value="">
                    <hr class="right">
                </div>
                <div class="col-sm-4 margin-top">
                    <p class="gray text-center <?php echo $pausa; ?>">
                        <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Paused'
                            : 'En Pausa';?>
                    </p>
                </div>
                <div class="col-sm-4 margin-top">
                    <p class="gray text-center <?php echo $concluido; ?>">
                        <?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Concluded'
                            : 'Concluido';?>
                    </p>
                    <hr class="left">
                </div>
            </div>
            <div class="row">
                <h3 class="table-header"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Subject' : 'Asunto';?></h3>
                <table class="followUp-table-view" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td><?php echo $follow_ups->subject; ?></td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="table-header"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Solicitor\'s Information' : 'Información del Solicitante';?></h3>
                <table class="followUp-table-view" style="width: 100%">
                    <thead>
                        <tr>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Name' : 'Nombre';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Business Name' : 'Razón Social';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Birth Date' : 'Fecha de Nacimiento';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Phone' : 'Teléfono';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'E-mail' : 'Correo Electrónico';?></th>
                        </tr>
                    </thead>
                    <tbody class="text">
                        <tr>
                            <td><?php echo $follow_ups->solicitor_name." ".$follow_ups->last_name." ".$follow_ups->m_last_name; ?></td>
                            <td><?php echo $follow_ups->social_reason; ?></td>
                            <td><?php echo $follow_ups->birthday; ?></td>
                            <td><?php echo $follow_ups->phone; ?></td>
                            <td class="email"><?php echo $follow_ups->email; ?></td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="table-header"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Solicitor\'s Adress' : 'Domicilio del Solicitante';?></h3>
                <table class="followUp-table-view" style="width: 100%">
                    <thead>
                        <tr>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Street' : 'Calle';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Exterior Number' : 'Número Exterior';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Interior Number' : 'Número Interior';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Postal Code' : 'Código Postal';?></th>
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
                <table class="followUp-table-view" style="width: 100%">
                    <thead>
                        <tr>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Suburb' : 'Colonia';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Town' : 'Municipio';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Locality' : 'Localidad';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'State' : 'Estado';?></th>
                            <th><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Country' : 'País';?></th>
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
                <h3 class="table-header"><?php echo isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en' ? 'Additional Information' : 'Información Adicional';?></h3>
                <table class="followUp-table-view" style="width: 100%;">
                    <colgroup>
                        <col style="width: 50%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td><?php echo $follow_ups->comments; ?></td>
                            <td>
                                PDF:<br>
                                <?php
                                $pdf_file = get_template_directory_uri().'/file_uploads/'.$follow_up_id.'.pdf';
                                if(pdf_exists($pdf_file)) {
                                    echo '<a href="'.$pdf_file.'" target="_blank">Ver PDF</a>';
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>