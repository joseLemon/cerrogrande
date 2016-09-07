<?php include('header.php'); ?>
<?php 
$current_user = wp_get_current_user();
$ID = $current_user->ID;
$follow_ups = $wpdb->get_results("SELECT follow_up_id, subject, status_id, social_reason, solicitor_name, last_name FROM follow_ups WHERE user_id =".$ID);
$statuses = $wpdb->get_results("SELECT * FROM statuses");
?>
<div class="registro wrapper">
    <div class="container spacing">
        <?php if( empty($follow_ups) ) { ?>
        <div class="form-container active">
            <div class="row no-margin spacing">
                <h2 class="blue text-center">No se ha realizado ninguna solicitud</h2>
            </div>
        </div>
        <?php } else {  ?>
        <div class="form-container active">
            <div class="row no-margin spacing">
                <div class="row no-margin">
                    <div class="col-sm-8">
                        <h2 class="blue text-center">Datos de Solicitud</h2>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <div class="col-sm-12">
                    <table style="width: 100%;">
                        <colgroup>
                            <col style="width: 10%;">
                            <col style="width: 20%;">
                            <col style="width: 20%;">
                            <col style="width: 20%;">
                            <col style="width: 20%;">
                            <col style="width: 10%;">
                        </colgroup>
                        <thead>
                            <tr>
                                <th></th>
                                <th>
                                    <h2>Asunto</h2>
                                </th>
                                <th>
                                    <h2>Razón Social</h2>
                                </th>
                                <th>
                                    <h2>Nombre</h2>
                                </th>
                                <th>
                                    <h2>Estatus</h2>
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
    $counter = 0;
    foreach($follow_ups as $follow_up ) { 
        $counter++;
                            ?>
                            <tr>
                                <td><?php echo $counter; ?></td>
                                <td>
                                    <p class="text no-margin"><?php echo $follow_up->subject ?></p>
                                </td>
                                <td>
                                    <p class="text no-margin"><?php echo $follow_up->social_reason ?></p>
                                </td>
                                <td>
                                    <p class="text no-margin"><?php echo $follow_up->solicitor_name.' '.$follow_up->last_name ?></p>
                                </td>
                                <td>
                                    <p class="text no-margin">
                                        <?php
                                //  something something join to get status name, crap
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <a class="center-block" href="<?php echo home_url() . '/seguimiento/?id=' . $follow_up->follow_up_id; ?>">Ver Seguimiento</a>
                                </td>
                            </tr>
                            <?php 
    } 
} 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>