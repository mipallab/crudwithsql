<?php
// autoload

if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo "<b> autoload.php </b> not found!";
}

// get dev id
$dev_id = $_POST['dev_id'];

// show single data
$singleDev = fetchSingleData($dbconnect, "devs", 'id', $dev_id);

// is status True of False
$isPublish = $singleDev->status == 1 ? "Publish" : "Unpublish";

$singleDevShow = "";

$singleDevShow = "

            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalLabel\"><b>{$singleDev->dev_name}</b></h2>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"view-bg border\"
                    style=\"background-image: url('./assect/media/cover-img/cover.png');background-position: center center;background-size: cover;background-repeat: no-repeat;\">
                    <div class=\"pro-pic\">
                        <img src=\"./assect/media/user-photo/{$singleDev->photo}\" alt=\"\">
                    </div>
                    
                </div>
                <h3 class=\"text-center mt-5\"> {$singleDev->dev_name}</h3>

                <div>
                    <table class=\"table mt-5\">
                        <tr>
                            <th>Name</th>
                            <td>{$singleDev->dev_name}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td><strong><i>{$isPublish}</strong></i></td>
                        </tr>
                        <tr>
                            <th>Skill</th>
                            <td>{$singleDev->Skill}</td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td>{$singleDev->dev_email}</td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>{$singleDev->dev_email}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\" aria-label=\"Close\">Close</button>
            </div>

";

echo $singleDevShow;
