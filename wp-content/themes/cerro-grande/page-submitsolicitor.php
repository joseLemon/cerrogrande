<?php

$date = date('Y-m-d',strtotime($_POST['date']));
$current_user = wp_get_current_user();
$ID = $current_user->ID;
$array = [];

if ( isset($_POST['submit']) ) {
    $wpdb->query("INSERT INTO `registra_wp2016`.`brands` (`brand_id`, `brand_type_id`, `text`, `design`, `three_dimensional`, `business_course`, `product_type`, `bussiness_course_description`, `brand_first_use_date`, `status_id`, `first_time`, `user_id`, `street`, `ext_num`, `int_num`, `postal_code`, `colony`, `town`, `locality`, `state`, `country`, `b_street`, `b_ext_num`, `b_int_num`, `b_postal_code`, `b_colony`, `b_town`, `b_locality`, `b_state`, `b_country`, `name`, `last_name`, `m_last_name`, `social_reason`, `birthday`, `phone`, `email`, `created_at`  ) VALUES (NULL, ".$array['options'].", '".$array['text']."', '".$array['design']."', '".$array['three_dimensional']."', '".$array['business_course']."', '".$array['product_course']."', '".$array['description']."', '$b_date', '3', 1, '".$ID."', '".$array['street']."', '".$array['exterior']."', '".$array['interior']."', ".$array['postal'].", '".$array['colony']."', '".$array['town']."', '".$array['locality']."', '".$array['state']."', '".$array['country']."', '".$array['b_street']."', '".$array['b_exterior']."', '".$array['b_interior']."', ".$array['b_postal'].", '".$array['b_colony']."', '".$array['b_town']."', '".$array['b_locality']."', '".$array['b_state']."', '".$array['b_country']."', '".$array['solicitor_name']."', '".$array['last_name']."', '".$array['m_last_name']."', '".$array['social']."', '$date', '".$array['phone']."', '".$array['email']."', '".date('Y-m-d H:i:s')."');");
} else if( isset($_POST['submit_revision']) ) {
    $wpdb->query("INSERT INTO `registra_wp2016`.`brands` (`brand_id`, `brand_type_id`, `text`, `design`, `three_dimensional`, `business_course`, `product_type`, `bussiness_course_description`, `brand_first_use_date`, `status_id`, `first_time`, `user_id`, `street`, `ext_num`, `int_num`, `postal_code`, `colony`, `town`, `locality`, `state`, `country`, `b_street`, `b_ext_num`, `b_int_num`, `b_postal_code`, `b_colony`, `b_town`, `b_locality`, `b_state`, `b_country`, `name`, `last_name`, `m_last_name`, `social_reason`, `birthday`, `phone`, `email`, `created_at`  ) VALUES (NULL, ".$array['options'].", '".$array['text']."', '".$array['design']."', '".$array['three_dimensional']."', '".$array['business_course']."', '".$array['product_course']."', '".$array['description']."', '$b_date', '0', 1, '".$ID."', '".$array['street']."', '".$array['exterior']."', '".$array['interior']."', ".$array['postal'].", '".$array['colony']."', '".$array['town']."', '".$array['locality']."', '".$array['state']."', '".$array['country']."', '".$array['b_street']."', '".$array['b_exterior']."', '".$array['b_interior']."', ".$array['b_postal'].", '".$array['b_colony']."', '".$array['b_town']."', '".$array['b_locality']."', '".$array['b_state']."', '".$array['b_country']."', '".$array['solicitor_name']."', '".$array['last_name']."', '".$array['m_last_name']."', '".$array['social']."', '$date', '".$array['phone']."', '".$array['email']."', '".date('Y-m-d H:i:s')."');");
} else if( isset($_POST['submit_cambiar']) ) {
    $wpdb->query("UPDATE  `registra_wp2016`.`brands` SET  `text` =  '".$array['text']."', `status_id` = '0', `first_time` =  '2', `created_at` = '".date('Y-m-d H:i:s')."' WHERE  `brands`.`brand_id` =".$brand_id.";");
}

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