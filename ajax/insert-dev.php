<?php

if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo json_encode(['status' => 'error', 'message' => "<b> autoload.php</b> not found!"]);
}

/**
 * Create data process
 */
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['form_submit'])) {

    // get data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $skill = $_POST['skill'];
    $location = $_POST['location'];
    $dev_photo = $_FILES['dev_photo'];

    // echo "<pre>";
    // print_r($_POST);
    // print_r($_FILES);
    // print_r($dev_photo);
    // echo "</pre>";



    if (!empty($fullname) && !empty($email) && !empty($skill) && !empty($location) && !empty($dev_photo['name'])) {

        $dev_photo_file_name = move([
            "name"    => $dev_photo['name'],
            "tmp_name"    => $dev_photo['tmp_name']
        ], '../assect/media/user-photo/');

        // upload dev photo format check 
        if (!$dev_photo_file_name['return']) {
            //if the file type is not supported
            echo json_encode(["status" => "error", "message" => $dev_photo_file_name['message']]);
        } else {
            // Proceed with inserting data into the database
            $createData = insertData(
                $dbconnect,
                "devs",
                [
                    'dev_name' => $fullname,
                    'dev_email' => $email,
                    'Skill' => $skill,
                    'Location'  => $location,
                    'photo' => $dev_photo_file_name['file_name']
                ]
            );

            // return appropriate JSON response
            echo json_encode(["status" => $createData['status'], "message" => $createData['message']]);
        }
    } else {

        // Missing required field
        echo json_encode(['status' => 'error', "message" => "<h2>All Fields Are Required!</h2>"]);
    }
} else {

    // if from request not POST OR form not submitted
    echo json_encode("Submit Type <b>POST or submit value not found!</b>");
}