<?php
if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo "<b> autoload.php </b> not found!";
}

// Check if the POST data is received
if (isset($_POST['dev_delete_id'])) {
    $dev_id = ($_POST['dev_delete_id']);

    try {

        $dev_old_photo = fetchSingleData($dbconnect, 'devs', 'id', $dev_id);

        if (deleteRecord($dbconnect, "devs", 'id', $dev_id)) {
            if (file_exists('../assect/media/user-photo/' . $dev_old_photo->photo)) {
                unlink('../assect/media/user-photo/' . $dev_old_photo->photo);
                echo json_encode(['status' => 'success', 'message' => $dev_old_photo->photo . 'File deleted successfully',]);
            } else {
                echo json_encode(['status' => 'error', 'message' => $dev_old_photo->photo . 'File not delete',]);
            }
        }
        echo json_encode(['status' => 'success', 'message' => 'Data Delete successfully', 'dbdata' => $dev_old_photo->photo, 'data' => file_exists('../assect/media/user-photo/' . $dev_old_photo->photo)]);
    } catch (PDOException $error) {
        echo json_encode(['status' => 'error', 'message' => "Connection failed: " . $e->getMessage()]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Delete Id not found']);
}