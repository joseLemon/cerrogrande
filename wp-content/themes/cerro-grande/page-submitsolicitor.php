<?php
$date = date('Y-m-d',strtotime($_POST['date']));
$array = [];
foreach( $_POST as $key => $P) {
    $array[$key] = $_POST[$key];
}
if(isset($_POST['create'])) {$query = "INSERT INTO `follow_ups` (`follow_up_id`, `user_id`, `status_id`,
    `subject`, `solicitor_name`, `last_name`, `m_last_name`, `social_reason`, `birthday`, `phone`,
    `email`, `street`, `exterior_num`, `interior_num`, `postal_code`, `colony`, `town`, `locality`,
    `state`, `country`, `comments`)
    VALUES (NULL, '".$array['user_id']."', '1', '".$array['subject']."', '".$array['solicitor_name']."',
    '".$array['last_name']."', '".$array['m_last_name']."', '".$array['social']."', '".$date."', '".$array['phone']."',
    '".$array['email']."', '".$array['street']."', '".$array['exterior']."', '".$array['interior']."',
    '".$array['postal']."', '".$array['colony']."', '".$array['town']."', '".$array['locality']."',
    '".$array['state']."', '".$array['country']."', '".$array['text']."');";

    $follow_up_id = $wpdb->get_results("SELECT follow_up_id FROM follow_ups WHERE user_id =".$array['user_id']." AND created_at = (select MAX(created_at) FROM follow_ups WHERE user_id =".$array['user_id'].")");
    $follow_up_id = $follow_up_id[0]->follow_up_id;
}

if(isset($_POST['update'])) {
    //$wpdb->query("UPDATE follow_ups SET  status_id =  '".$_POST['status']."', comments = '".$_POST['comments']."'  WHERE  follow_ups.follow_up_id =".$_POST['follow_up_id'].";");
    if(count($array) <= 4) {
        $query = "UPDATE follow_ups
    SET status_id = '".$_POST['status']."'WHERE  follow_ups.follow_up_id =".$_POST['follow_up_id'].";";
    } else {
        $query = "UPDATE follow_ups
    SET solicitor_name = '".$_POST['solicitor_name']."', last_name = '".$_POST['last_name']."', m_last_name = '".$_POST['m_last_name']."',
    status_id = '".$_POST['status']."', subject = '".$array['subject']."', social_reason = '".$array['social']."',
    birthday = '".$date."', phone = '".$array['phone']."', email = '".$array['email']."', street = '".$array['street']."',
    exterior_num = '".$array['exterior']."', interior_num ='".$array['interior']."', postal_code = '".$array['postal']."',
    colony = '".$array['colony']."', town = '".$array['town']."', locality = '".$array['locality']."', state = '".$array['state']."',
    country = '".$array['country']."', comments = '".$array['text']."' WHERE  follow_ups.follow_up_id =".$_POST['follow_up_id'].";";
    }
    $follow_up_id = $_GET['id'];
}

if(isset($_POST['delete'])) {
    $query = "UPDATE follow_ups SET deleted_at = '".date('Y-m-d H:i:s')."'WHERE  follow_ups.follow_up_id = ".$_GET['id'].";";
    $follow_up_id = $_GET['id'];
}

if(isset($_POST['file_delete'])) {

    $file_path = dirname(__FILE__).'/file_uploads/';

    unlink($file_path.$_POST['file_delete']);

    echo $file_path.$_POST['file_delete'];
    return $_POST['file_delete'];
}

$wpdb->query( $query );

if(isset($_POST['update']) || isset($_POST['create'])) {

// Count # of uploaded files in array
    $total = count($_FILES['pdf_file']['name']);

    if ($total > 3) {
        $total = 3;
    }

    $counter = 0;

    for ($i = 0; $i < $total; $i++) {
        $target_dir = dirname(__FILE__) . '/file_uploads/';
        $target_file = $target_dir . basename($_FILES["pdf_file"]["name"][$i]);
        $uploadOk = 1;

        if ($counter == 3) {
            return true;
        }

        if (!pdf_exists(get_template_directory_uri().'/file_uploads/' . $follow_up_id . '-' . $i . '.pdf')) {
            if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"][$i], $target_dir . $follow_up_id . '-' . $i . '.pdf')) {
                echo "The file " . basename($_FILES["design"]["name"][$i]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file Design.";
            }
        } else {
            for ($k = 0; $k < 3; $k++) {
                if (!pdf_exists(get_template_directory_uri().'/file_uploads/' . $follow_up_id . '-' . $k . '.pdf')) {
                    move_uploaded_file($_FILES["pdf_file"]["tmp_name"][$i], $target_dir . $follow_up_id . '-' . $k . '.pdf');
                } else {
                    $counter++;
                }
            }
        }
    }
    if ($_FILES["pdf_file"]["size"] > 25000000) {
        $uploadOk = 0;
        echo "Lo sentimos, el pdf tiene un peso mayor a 25Mb.";
    }
}

if(isset($_POST['create']) || isset($_POST['delete'])) {
    wp_redirect('lista-seguimientos');
}

if(isset($_POST['update'])) {
    wp_redirect('actualizar-solicitud/?id='.$follow_up_id);
}
?>