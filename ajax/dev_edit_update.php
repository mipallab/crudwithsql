<?php
if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo json_encode(['status' => 'error', "message" => "<b> autoload.php </b> not found!"]);
}


//Check if the POST data is received
if (isset($_POST['edit_dev_id'])) {

    // get update data
    $dev_fullname = ($_POST['fullname']);
    $dev_email = ($_POST['email']);
    $dev_skill = ($_POST['skill']);
    $dev_location = ($_POST['location']);
    $dev_edit_id = ($_POST['edit_dev_id']);


    // get dev files
    $dev_new_photo = $_FILES['new_dev_photo'];
    $dev_old_photo = ($_POST['old_dev_photo']);



    // move updated dev photo
    if (!empty($dev_new_photo['name'])) {
        $file_name = move([

            'name' => $dev_new_photo['name'],
            'tmp_name'  => $dev_new_photo['tmp_name']

        ], '../assect/media/user-photo/');

        // remove old photo
        if (file_exists('../assect/media/user-photo/' . $dev_old_photo)) {
            unlink('../assect/media/user-photo/' . $dev_old_photo);
        }
    }


    $edit_dev_data = updateRecord(
        $dbconnect,
        'devs',
        [
            "dev_name"  => $dev_fullname,
            "dev_email" => $dev_email,
            'Skill'     => $dev_skill,
            'Location'  => $dev_location,
            'photo'     => $file_name['file_name'] ?? $dev_old_photo
        ],
        ['id' => $dev_edit_id]
    );
    if ($edit_dev_data['status'] == 'success') {
        $message = ['status' => 'success', 'message' => $dev_fullname . " data update successfully."];
        echo json_encode($message);
    } else {
        echo json_encode($edit_dev_data);
    }
} else {
    echo ['status' => 'error', 'message' => 'Update Id not found!'];
}
