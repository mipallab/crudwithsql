<?php
// autoload

if (file_exists("../autoload.php")) {
    require_once "../autoload.php";
} else {
    echo "<b> autoload.php </b> not found!";
}


$show_dev_data = showAllData("devs", $dbconnect, 0, 'trash');



$dev_data = "";

if ($show_dev_data['status'] === "success") {
    if (count($show_dev_data['data']) > 0) {
        $dev_data = "
         <table class=\"table table-striped table-hover align-middle \">
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Name</th>
                <th>email</th>
                <th>Skill</th>
                <th>Location</th>
                <th class=\"text-center\">Status</th>
                <th class=\"text-center\">Action</th>
            </tr>
        ";
        $i = 1;
        foreach ($show_dev_data['data'] as  $item) {

            $status = ($item->status) ? 'checked' : '';

            $dev_data .= "
               
                    <tr>
                        <td>$i</td>
                        <td>
                            <img class=\"tbl-img\" src=\"./assect/media/user-photo/{$item->photo}\" alt=\"\">
                        </td>
                        <td>{$item->dev_name}</td>
                        <td>{$item->dev_email}</td>
                        <td>{$item->Skill}</td>
                        <td>{$item->Location}</td>
                        <td class=\"text-center\">
                            
                            <label class=\"switch\">
                                <input class=\"status\" type=\"checkbox\" {$status} user-id = {$item->id}>
                                <span class=\"slider round\"></span>
                            </label>
                        </td>
                        <td class=\"text-center\">
                            <button data-bs-toggle=\"modal\" data-bs-target=\"#editData\" user-id = {$item->id} class=\"btn btn-sm btn-warning dev_edit\" >
                                <i class=\"fa fa-edit\"></i>
                            </button>
                            <button data-bs-toggle=\"modal\" data-bs-target=\"#viewData\" user-id = {$item->id} class=\"btn btn-sm btn-info dev_view\">
                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                            </button>
                            <button user-id = {$item->id} class=\"btn btn-sm btn-danger trash_Dev_Data\" >
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
        echo "<h2> Data Not Found! </h2>";
    }
} elseif ($show_dev_data['status'] === "error") {
    echo $show_dev_data['message'];
}
