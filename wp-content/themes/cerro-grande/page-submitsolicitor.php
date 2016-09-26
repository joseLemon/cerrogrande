<?php
if(isset($_POST['create'])) {
    $date = date('Y-m-d',strtotime($_POST['date']));
    $current_user = wp_get_current_user();
    $ID = $current_user->ID;
    $array = [];
    foreach( $_POST as $key => $P) {
        $array[$key] = $_POST[$key];
    }

    $query = "INSERT INTO `wp_cerro_grande`.`follow_ups` (`follow_up_id`, `user_id`, `status_id`, `subject`, `solicitor_name`, `last_name`, `m_last_name`, `social_reason`, `birthday`, `phone`, `email`, `street`, `exterior_num`, `interior_num`, `postal_code`,
`colony`, `town`, `locality`, `state`, `country`, `comments`) VALUES (NULL, '".$array['user_id']."', '1', '".$array['subject']."', '".$array['solicitor_name']."', '".$array['last_name']."', '".$array['m_last_name']."', '".$array['social']."', '".$date.
        "', '".$array['phone']."', '".$array['email']."', '".$array['street']."', '".$array['exterior']."', '".$array['interior']."', '".$array['postal']."', '".$array['colony']."', '".$array['town']."', '".$array['locality'].
        "', '".$array['state']."', '".$array['country']."', '".$array['text']."');";

    $wpdb->query( $query );

    $follow_up_id = $wpdb->get_results("SELECT follow_up_id FROM follow_ups WHERE user_id =".$array['user_id']." AND created_at = (select MAX(created_at) FROM follow_ups WHERE user_id =".$array['user_id'].")");
    $follow_up_id = $follow_up_id[0]->follow_up_id;
}

if(isset($_POST['update'])) {
    $wpdb->query("UPDATE follow_ups SET  status_id =  '".$_POST['status']."', comments = '".$_POST['comments']."'  WHERE  follow_ups.follow_up_id =".$_POST['follow_up_id'].";");
    $follow_up_id = $_GET['id'];
}

$target_dir = dirname(__FILE__).'/file_uploads/';
$target_file = $target_dir . basename($_FILES["pdf_file"]["name"]);
$uploadOk = 1;
if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_dir . $follow_up_id.'.pdf')) {
    //echo "The file ". basename( $_FILES["design"]["name"]). " has been uploaded.";
} else {
    //echo "Sorry, there was an error uploading your file Design.";
}

if ($_FILES["pdf_file"]["size"] > 25000000) {
    $uploadOk = 0;
    echo "Lo sentimos, el pdf tiene un peso mayor a 25Mb.";
}

if(isset($_POST['create'])) {
    wp_redirect('lista-seguimientos');
}

if(isset($_POST['update'])) {
    wp_redirect('actualizar-solicitud/?id='.$follow_up_id);
}
?>