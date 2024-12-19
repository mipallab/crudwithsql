<?php

// autoload
if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo json_encode(['status' => 'error', 'message' => "<b> autoload.php </b> not found!"]);
}


// Check if the POST data is received]
if (isset($_POST['dev_reset_trash_id'])) {
    $dev_id = ($_POST['dev_reset_trash_id']);

    $dev_reset_data = updateRecord(
        $dbconnect,
        'devs',

        // update data
        ['trash' => 0],

        // check id
        ['id' => $dev_id]
    );

    if ($dev_reset_data['status'] === 'success') {
        echo json_encode(['status' => 'success', 'message' => 'Data Reset Successfully']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Dev id not found']);
}