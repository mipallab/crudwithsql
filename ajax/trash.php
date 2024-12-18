<?php

// autoload
if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo json_encode(['status' => 'error', 'message' => "<b> autoload.php </b> not found!"]);
}


// Check if the POST data is received]
// $dev_id = ($_POST['dev_trash_id']);
// print_r($dev_id);
if (isset($_POST['dev_trash_id'])) {
    $dev_id = ($_POST['dev_trash_id']);

    $dev_trash = updateRecord(
        $dbconnect,
        'devs',

        // update data
        ['trash' => 1],

        // check id
        ['id' => $dev_id]
    );

    if ($dev_trash['status'] === 'success') {
        echo json_encode(['status' => 'success', 'message' => 'Data move to trash']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Dev id not found']);
}
