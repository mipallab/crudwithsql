<?php
// autoload

if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo "<b> autoload.php </b> not found!";
}


$show_all_trash_data = showAllData("devs", $dbconnect, 1, 'trash');



$dev_data = "";

if ($show_all_trash_data['status'] === "success") {
    if (count($show_all_trash_data['data']) > 0) {
        $dev_data = "
         <table class=\"table table-striped table-hover align-middle \">
            <tr>
                <th>#</th>
                <th>id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>email</th>
                <th>Skill</th>
                <th>Location</th>
                <th class=\"text-center\">Action</th>
            </tr>
        ";
        $i = 1;
        foreach ($show_all_trash_data['data'] as  $item) {

            $status = ($item->status) ? 'checked' : '';

            $dev_data .= "
               
                    <tr>
                        <td>$i</td>
                        <td>{$item->id}</td>
                        <td>
                            <img class=\"tbl-img\" src=\"./assect/media/user-photo/{$item->photo}\" alt=\"\">
                        </td>
                        <td>{$item->dev_name}</td>
                        <td>{$item->dev_email}</td>
                        <td>{$item->Skill}</td>
                        <td>{$item->Location}</td>
                        
                        <td class=\"text-center\">
                            
                            <button user-id = {$item->id} class=\"btn btn-sm btn-success reset_Dev_Data\" >
                                <i class=\"fa fa-undo\"></i>
                            </button>
                            
                            <button user-id = {$item->id} class=\"btn btn-sm btn-danger delete_Dev_Data\" >
                                <i class=\"fa fa-trash\"></i>
                            </button>
                        </td>
                    </tr>
            
            ";

            $i++;
        }
        $dev_data .= "</table>";

        echo $dev_data;
    } else {
        echo "<h3 class=\"my-5 text-center text-warning fw-lighter\"> Trash table clean </h3>";
    }
} elseif ($show_all_trash_data['status'] === "error") {
    echo $show_all_trash_data['message'];
}