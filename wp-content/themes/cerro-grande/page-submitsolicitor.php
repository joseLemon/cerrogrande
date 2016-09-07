<?php

$date = date('Y-m-d',strtotime($_POST['date']));
$current_user = wp_get_current_user();
$ID = $current_user->ID;
$array = [];
foreach( $_POST as $key => $P) {
    $array[$key] = $_POST[$key];
}

$wpdb->query(
    "INSERT INTO `wp_cerro_grande`.`follow_ups` (`follow_up_id`, `user_id`, `status_id`, `subject` `solicitor_name`, `last_name`, `m_last_name`, `social_reason`, `birthday`, `phone`, `email`, `street`, `exterior_num`, `interior_num`, `postal_code`,
     `colony`, `town`, `locality`, `state`, `country`, `comments`, `created_at` ) VALUES (NULL, ".$array['user_id'].", '1', '".$array['subject']."', '".$array['solicitor_name']."', '".$array['last_name']."', '".$array['m_last_name']."', '".$array['social']."', '".$array['date'].
    "', '".$array['phone']."', '".$array['email']."', '".$array['street']."', '".$array['exterior']."', ".$array['interior'].", '".$array['postal']."', '".$array['colony']."', '".$array['town']."', ".$array['locality'].
    ", '".$array['state']."', '".$array['country']."', '".$array['text']."', '".date('Y-m-d H:i:s')."');"
);

print_r($array);

return true;

if( isset($_POST['submit_cambiar']) ) {
    $target_dir = dirname(__FILE__).'/uploads/';
    $target_file = $target_dir . basename($_FILES["design"]["name"]);
    $uploadOk = 1;
    if (move_uploaded_file($_FILES["design"]["tmp_name"], $target_dir . $brand_id . '_design' . '.png')) {
        //echo "The file ". basename( $_FILES["design"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file Design.";
        unlink($target_dir . $brand_id . '_design' . '.png');
    }

    if ($_FILES["upload-file"]["size"] > 25000000) {
        $uploadOk = 0;
        echo "Lo sentimos, esa imagen tiene un peso mayor a 25Mb.";
    }

    if (move_uploaded_file($_FILES["three_dimensional"]["tmp_name"], $target_dir . $brand_id . '_three_dimensional' . '.png')) {
        //echo "The file ". basename( $_FILES["three_dimensional"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file 3D.";
        unlink($target_dir . $brand_id . '_three_dimensional' . '.png');
    }
} else {
    $brand_id = $wpdb->get_results("SELECT brand_id FROM brands WHERE user_id =".$ID." AND created_at = (select MAX(created_at) FROM brands WHERE user_id =".$ID.")");

    $target_dir = dirname(__FILE__).'/uploads/';
    $target_file = $target_dir . basename($_FILES["design"]["name"]);
    $uploadOk = 1;
    if (move_uploaded_file($_FILES["design"]["tmp_name"], $target_dir . $brand_id[0]->brand_id . '_design' . '.png')) {
        //echo "The file ". basename( $_FILES["design"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file Design.";
    }

    if ($_FILES["upload-file"]["size"] > 25000000) {
        $uploadOk = 0;
        echo "Lo sentimos, esa imagen tiene un peso mayor a 25Mb.";
    }

    if (move_uploaded_file($_FILES["three_dimensional"]["tmp_name"], $target_dir . $brand_id[0]->brand_id . '_three_dimensional' . '.png')) {
        //echo "The file ". basename( $_FILES["three_dimensional"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file 3D.";
    }
}

wp_redirect('solicitudes');
?>