<?php include('header.php'); ?>
<?php
$current_user = wp_get_current_user();
$ID = $current_user->ID;
$follow_ups = $wpdb->get_results("SELECT follow_up_id, subject, social_reason, solicitor_name, last_name, name AS status_name FROM follow_ups JOIN statuses ON statuses.status_id = follow_ups.status_id WHERE user_id =".$ID);
$statuses = $wpdb->get_results("SELECT * FROM statuses");
if($current_user->user_firstname != '') {
    $name = $current_user->user_firstname;
} else {
    $name = $current_user->user_login;
}
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
                        <h1 class="text-center">Bienvenido(a) <?php echo $name; ?></h1>
                        <h2 class="blue text-center">Datos de tus Solicitudes</h2>
                        <div class="col-sm-4"></div>
                    </div>
                    <div class="col-sm-12">
                        <table class="followUp-table" style="width: 100%;">
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
                                <th>Asunto</th>
                                <th>Razón Social</th>
                                <th>Nombre</th>
                                <th>Estatus</th>
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
                                    <td class="text-center" style="padding-left: 5px;"><?php echo $counter; ?></td>
                                    <td><?php echo $follow_up->subject ?></td>
                                    <td><?php echo $follow_up->social_reason ?></td>
                                    <td><?php echo $follow_up->solicitor_name.' '.$follow_up->last_name ?></td>
                                    <td><?php echo $follow_up->status_name ?></td>
                                    <td>
                                        <a class="center-block" href="<?php echo home_url() . '/seguimiento/?id=' . $follow_up->follow_up_id; ?>">Ver Seguimiento</a>
                                    </td>
                                </tr>
                            <?php }
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