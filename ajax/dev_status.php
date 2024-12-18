<?php
if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo "<b> autoload.php </b> not found!";
}

// Check if the POST data is received
if (isset($_POST['dev_id']) && isset($_POST['dev_status'])) {
    $dev_id = ($_POST['dev_id']);
    $dev_status = ($_POST['dev_status']);

    $dev_status_update = updateRecord(
        $dbconnect,
        'devs',
        ['status' => $dev_status],
        ['id' => $dev_id]
    );
    echo $dev_status_update;
} else {
    echo "dev_data or dev_status not found";
}
