<?php include('header.php'); ?>
<?php
$flag = false;

if ( isset( $_POST['search'] ) ) {
    $flag=true;
    $term=$_POST['search'];
}

$page = $_GET['page'];
$page = substr($page, 1);
$tab = $_GET['tab'];

if ( $tab==NULL ) {
    $tab = 'all';
}

if ( $page==NULL ) {
    $page = 0;
}

$pageAll = 0;
$pageR = 0;
$pageP = 0;
$pagePa = 0;
$pageC = 0;

switch($tab){
    case 'all': $pageAll=$page;break;
    case 'process': $pageP=$page;break;
    case 'paused': $pagePa=$page;break;
    case 'concluded': $pageC=$page;break;
}

?>
    <div class="wrapper">
        <div class="container request-list spacing">
            <form action="<?php echo home_url()?>/lista-seguimientos" method="POST" class="pull-right search-form">
                <div class="input-group">
                    <input class="form-control" type="text" onchange="fillTables" name="search" id="search">
                    <span class="input-group-btn">
                        <input class="btn btn-secondary" type="submit" value="">
                    </span>
                </div>
            </form>
            <ul class="nav nav-tabs" role="tablist">
                <li<?php if($tab=='all'){echo (" class='active'");} ?>><a href = "#all" aria-controls="all" role="tab" data-toggle="tab">Todas</a></li>
                <li<?php if($tab=='process'){echo (" class='active'");} ?>><a class="blue" href = "#process" aria-controls="process" role="tab" data-toggle="tab">En Proceso</a></li>
                <li<?php if($tab=='paused'){echo (" class='active'");} ?>><a class="blue" href = "#paused" aria-controls="paused" role="tab" data-toggle="tab">En Pausa</a></li>
                <li<?php if($tab=='concluded'){echo (" class='active'");} ?>><a class="blue" href = "#concluded" aria-controls="concluded" role="tab" data-toggle="tab">Concluido</a></li>
            </ul>
            <?php
            if ( $flag ) {
                $byAll = $wpdb->get_results("SELECT follow_up_id, user_id, subject, solicitor_name, last_name, m_last_name, social_reason, statuses.name as status_name FROM follow_ups INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE (last_name LIKE '%".$term."%' OR m_last_name LIKE '%".$term."%' OR social_reason LIKE '%".$term."%' OR statuses.name LIKE '%".$term."%' OR solicitor_name LIKE '%".$term."%' OR subject LIKE '%".$term."%') AND deleted_at IS NULL LIMIT ".$pageAll.", 15");
                $byAllCount = $wpdb->get_results("SELECT COUNT(follow_up_id) as cont FROM follow_ups INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE (last_name LIKE '%".$term."%' OR m_last_name LIKE '%".$term."%' OR social_reason LIKE '%".$term."%' OR statuses.name LIKE '%".$term."%' solicitor_name LIKE '%".$term."%' OR subject LIKE '%".$term."%' AND deleted_at IS NULL)");
                $inProcess = $wpdb->get_results("SELECT follow_up_id, user_id, subject, solicitor_name, last_name, m_last_name, social_reason, statuses.name as status_name FROM follow_ups INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE follow_ups.status_id = 1 AND (last_name LIKE '%".$term."%' OR m_last_name LIKE '%".$term."%' OR social_reason LIKE '%".$term."%' OR statuses.name LIKE '%".$term."%' OR solicitor_name LIKE '%".$term."%' OR subject LIKE '%".$term."%') AND deleted_at IS NULL LIMIT ".$pageR.", 15");
                $inProcessCount = $wpdb->get_results("SELECT COUNT(follow_up_id)as cont FROM follow_ups WHERE follow_ups.status_id = 1 INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE (last_name LIKE '%".$term."%' OR m_last_name LIKE '%".$term."%' OR social_reason LIKE '%".$term."%' OR statuses.name LIKE '%".$term."%' solicitor_name LIKE '%".$term."%' OR subject LIKE '%".$term."%' AND deleted_at IS NULL)");
                $paused = $wpdb->get_results("SELECT follow_up_id, user_id, subject, solicitor_name, last_name, m_last_name, social_reason, statuses.name as status_name FROM follow_ups INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE follow_ups.status_id = 2 AND (last_name LIKE '%".$term."%' OR m_last_name LIKE '%".$term."%' OR social_reason LIKE '%".$term."%' OR statuses.name LIKE '%".$term."%' OR solicitor_name LIKE '%".$term."%' OR subject LIKE '%".$term."%') AND deleted_at IS NULL LIMIT ".$pagePa.", 15");
                $pausedCount = $wpdb->get_results("SELECT COUNT(follow_up_id)as cont FROM follow_ups WHERE follow_ups.status_id = 2 INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE (last_name LIKE '%".$term."%' OR m_last_name LIKE '%".$term."%' OR social_reason LIKE '%".$term."%' OR statuses.name LIKE '%".$term."%' solicitor_name LIKE '%".$term."%' OR subject LIKE '%".$term."%' AND deleted_at IS NULL)");
                $concluded = $wpdb->get_results("SELECT follow_up_id, user_id, subject, solicitor_name, last_name, m_last_name, social_reason, statuses.name as status_name FROM follow_ups INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE follow_ups.status_id = 3 AND (last_name LIKE '%".$term."%' OR m_last_name LIKE '%".$term."%' OR social_reason LIKE '%".$term."%' OR statuses.name LIKE '%".$term."%' OR solicitor_name LIKE '%".$term."%' OR subject LIKE '%".$term."%') AND deleted_at IS NULL LIMIT ".$pageC.", 15");
                $concludedCount = $wpdb->get_results("SELECT COUNT(follow_up_id)as cont FROM follow_ups WHERE follow_ups.status_id = 3 INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE (last_name LIKE '%".$term."%' OR m_last_name LIKE '%".$term."%' OR social_reason LIKE '%".$term."%' OR statuses.name LIKE '%".$term."%' solicitor_name LIKE '%".$term."%' OR subject LIKE '%".$term."%' AND deleted_at IS NULL)");
            } else {
                $byAll = $wpdb->get_results("SELECT follow_up_id, user_id, subject, solicitor_name, last_name, m_last_name, social_reason, statuses.name as status_name FROM follow_ups INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE deleted_at IS NULL LIMIT ".$pageAll.", 15");
                $byAllCount = $wpdb->get_results("SELECT COUNT(follow_up_id) as cont FROM follow_ups WHERE deleted_at IS NULL");
                $inProcess = $wpdb->get_results("SELECT follow_up_id, user_id, subject, solicitor_name, last_name, m_last_name, social_reason, statuses.name as status_name FROM follow_ups INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE follow_ups.status_id = 1 AND deleted_at IS NULL LIMIT ".$pageR.", 15");
                $inProcessCount = $wpdb->get_results("SELECT COUNT(follow_up_id)as cont FROM follow_ups WHERE follow_ups.status_id = 1 AND deleted_at IS NULL");
                $paused = $wpdb->get_results("SELECT follow_up_id, user_id, subject, solicitor_name, last_name, m_last_name, social_reason, statuses.name as status_name FROM follow_ups INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE follow_ups.status_id = 2 AND deleted_at IS NULL LIMIT ".$pagePa.", 15");
                $pausedCount = $wpdb->get_results("SELECT COUNT(follow_up_id)as cont FROM follow_ups WHERE follow_ups.status_id = 2 AND deleted_at IS NULL");
                $concluded = $wpdb->get_results("SELECT follow_up_id, user_id, subject, solicitor_name, last_name, m_last_name, social_reason, statuses.name as status_name FROM follow_ups INNER JOIN statuses on follow_ups.status_id = statuses.status_id WHERE follow_ups.status_id = 3 AND deleted_at IS NULL LIMIT ".$pageC.", 15");
                $concludedCount = $wpdb->get_results("SELECT COUNT(follow_up_id)as cont FROM follow_ups WHERE follow_ups.status_id = 3 AND deleted_at IS NULL");
            }
            ?>
            <div class="tab-content">
                <div role="tabpanel" id="all" class="tab-pane fade <?php if($tab=='all'){echo ("in active");} ?>">
                    <table class="followUp-table" style="width: 100%;">
                        <colgroup>
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Asunto</th>
                            <th>Razón Social</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($byAll as $follow_up){ ?>
                            <tr>
                                <td><?php echo ($follow_up->solicitor_name." ".$follow_up->last_name) ?></td>
                                <td><?php echo ($follow_up->subject) ?></td>
                                <td><?php echo ($follow_up->social_reason) ?></td>
                                <td><a href="<?php echo home_url().'/actualizar-solicitud?id='.$follow_up->follow_up_id?>"><?php echo ($follow_up->status_name) ?></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <?php if ( $byAllCount[0]->cont > 15 ) { ?>
                        <ul class="pagination">
                            <?php
                            $pages = (int)( $byAllCount[0]->cont/15 )+1;
                            for ( $i = 0; $i < $pages; $i++ ) {
                                if( $i == $pageAll/15 ) {
                                    echo '
                                        <li class="active">
                                            <a href="'.(get_permalink().'?page=p'.($i*15).'&tab=all').'">'.$i.'<span class="sr-only"></span></a>
                                        </li>';
                                } else {
                                    echo '
                                        <li>
                                            <a href="'.(get_permalink().'?page=p'.($i*15).'&tab=all').'">'.$i.'<span class="sr-only">(página actual)</span></a>
                                        </li>';
                                }
                            }
                            ?>
                        </ul>
                    <?php } ?>
                </div>
                <div role="tabpanel" id="process" class="tab-pane fade <?php if($tab=='process'){echo ("in active");} ?>">
                    <table class="followUp-table" style="width: 100%;">
                        <colgroup>
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Asunto</th>
                            <th>Razón Social</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($inProcess as $follow_up){ ?>
                            <tr>
                                <td><?php echo ($follow_up->solicitor_name." ".$follow_up->last_name) ?></td>
                                <td><?php echo ($follow_up->subject) ?></td>
                                <td><?php echo ($follow_up->social_reason) ?></td>
                                <td><a href="<?php echo home_url().'/actualizar-solicitud?id='.$follow_up->follow_up_id?>"><?php echo ($follow_up->status_name) ?></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <?php if ( $inProcessCount[0]->cont > 15 ) { ?>
                        <ul class="pagination">
                            <?php
                            $pages = (int)( $inProcessCount[0]->cont/15 )+1;
                            for ( $i = 0; $i < $pages; $i++ ) {
                                if( $i == $pageP/15 ) {
                                    echo '
                                        <li class="active">
                                            <a href="'.(get_permalink().'?page=p'.($i*15).'&tab=process').'">'.$i.'<span class="sr-only"></span></a>
                                        </li>';
                                } else {
                                    echo '
                                        <li>
                                            <a href="'.(get_permalink().'?page=p'.($i*15).'&tab=process').'">'.$i.'<span class="sr-only">(página actual)</span></a>
                                        </li>';
                                }
                            }
                            ?>
                        </ul>
                    <?php } ?>
                </div>
                <div role="tabpanel" id="paused" class="tab-pane fade <?php if($tab=='paused'){echo ("in active");} ?>">
                    <table class="followUp-table" style="width: 100%;">
                        <colgroup>
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Asunto</th>
                            <th>Razón Social</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($paused as $follow_up){ ?>
                            <tr>
                                <td><?php echo ($follow_up->solicitor_name." ".$follow_up->last_name) ?></td>
                                <td><?php echo ($follow_up->subject) ?></td>
                                <td><?php echo ($follow_up->social_reason) ?></td>
                                <td><a href="<?php echo home_url().'/actualizar-solicitud?id='.$follow_up->follow_up_id?>"><?php echo ($follow_up->status_name) ?></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <?php if ( $pausedCount[0]->cont > 15 ) { ?>
                        <ul class="pagination">
                            <?php
                            $pages = (int)( $pausedCount[0]->cont/15 )+1;
                            for ( $i = 0; $i < $pages; $i++ ) {
                                if( $i == $pagePa/15 ) {
                                    echo '
                                        <li class="active">
                                            <a href="'.(get_permalink().'?page=p'.($i*15).'&tab=paused').'">'.$i.'<span class="sr-only"></span></a>
                                        </li>';
                                } else {
                                    echo '
                                        <li>
                                            <a href="'.(get_permalink().'?page=p'.($i*15).'&tab=paused').'">'.$i.'<span class="sr-only">(página actual)</span></a>
                                        </li>';
                                }
                            }
                            ?>
                        </ul>
                    <?php } ?>
                </div>
                <div role="tabpanel" id="concluded" class="tab-pane fade <?php if($tab=='concluded'){echo ("in active");} ?>">
                    <table class="followUp-table" style="width: 100%;">
                        <colgroup>
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                            <col style="width: 25%;">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Asunto</th>
                            <th>Razón Social</th>
                            <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($concluded as $follow_up){ ?>
                            <tr>
                                <td><?php echo ($follow_up->solicitor_name." ".$follow_up->last_name) ?></td>
                                <td><?php echo ($follow_up->subject) ?></td>
                                <td><?php echo ($follow_up->social_reason) ?></td>
                                <td><a href="<?php echo home_url().'/actualizar-solicitud?id='.$follow_up->follow_up_id?>"><?php echo ($follow_up->status_name) ?></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <?php if ( $concludedCount[0]->cont > 15 ) { ?>
                        <ul class="pagination">
                            <?php
                            $pages = (int)( $concludedCount[0]->cont/15 )+1;
                            for ( $i = 0; $i < $pages; $i++ ) {
                                if( $i == $pagePa/15 ) {
                                    echo '
                                        <li class="active">
                                            <a href="'.(get_permalink().'?page=p'.($i*15).'&tab=concluded').'">'.$i.'<span class="sr-only"></span></a>
                                        </li>';
                                } else {
                                    echo '
                                        <li>
                                            <a href="'.(get_permalink().'?page=p'.($i*15).'&tab=concluded').'">'.$i.'<span class="sr-only">(página actual)</span></a>
                                        </li>';
                                }
                            }
                            ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>