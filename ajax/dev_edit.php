<?php
// autoload

if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo json_encode(['status' => 'error', 'message' => "<b> autoload.php </b> not found!"]);
}

// get dev id
$dev_id = $_POST['dev_ed_id'];

// show single data
$singleDev = fetchSingleData($dbconnect, "devs", 'id', $dev_id);

$singleDevShow = "";

$singleDevShow = "

            <div class=\"modal-header\">
                <h2 class=\"modal-title\" id=\"exampleModalLabel\">Edit <b>{$singleDev->dev_name}</b></h2>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <form id=\"dev_edit_form\" enctype=\"multipart/form-data\">
                    <!-- full name field -->
                    <div class=\"field mb-3\">
                        <label class=\"mb-2\" for=\"fullName\">Full Name</label>
                        <input class=\"form-control\" id=\"fullName\" type=\"text\" name=\"fullname\" value=\"{$singleDev->dev_name}\">
                    </div>
                    <!-- email field -->
                    <div class=\"field mb-3\">
                        <label class=\"mb-2\" for=\"email\">Email</label>
                        <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" value=\"{$singleDev->dev_email}\">
                    </div>
                    <!-- Skill field -->
                    <div class=\"field mb-3\">
                        <label class=\"mb-2\" for=\"skill\">Skill</label>
                        <input class=\"form-control\" id=\"skill\" type=\"text\" name=\"skill\" value=\"{$singleDev->Skill}\">
                    </div>
                    <!-- Location field -->
                    <div class=\"field mb-3\">
                        <label class=\"mb-2\" for=\"Location\">Location</label>
                        <input class=\"form-control\" id=\"Location\" type=\"text\" name=\"location\" value=\"{$singleDev->Location}\">
                    </div>
                    <!-- preview image  -->                    
                    <div class=\"field mb-3\">
                        <div class=\"row\">
                            <div class=\"col\"> 
                                <!-- old photo -->
                                <small class=\"text-sm muted\">old photo</small>
                                <input type=\"hidden\" name=\"old_dev_photo\" value=\"{$singleDev->photo}\">
                                <img class=\"w-100 border\" id=\"editPrevPhoto\"
                                    src=\"./assect/media/user-photo/{$singleDev->photo}\"
                                    alt=\"preview\">
                            </div>
                            <div class=\"col\"> 
                            <!-- new photo -->  
                            <small class=\"text-sm muted\">new photo</small>
                                <img class=\"w-100 border\" name=\"new_dev_photo\" id=\"newPrevPhoto\"
                                    src=\"https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541\"
                                    alt=\"preview\">
                            </div>
                        </div>                    
                    </div>
                    <input type=\"hidden\" name=\"edit_dev_id\" value=\"{$singleDev->id}\">
                    <!-- photo field -->
                    <div class=\"field mb-3\">
                        <label class=\"mb-2\" for=\"devPhoto\">Photo</label>
                        <input class=\"form-control\" id=\"editDevPhoto\" type=\"file\" name=\"new_dev_photo\">
                        <small class=\"text-sm muted\">only support [jpg,png]</small>
                    </div>
                    <div class=\"field-btn\">
                        <input id=\"dev_edit_form_submit\" type=\"submit\" class=\"btn btn-primary\" name=\"edit_dev\"
                            value=\"Update\">
                    </div>
                </form>
            </div>

";

echo $singleDevShow;
