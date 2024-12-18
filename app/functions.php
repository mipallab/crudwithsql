<?php



/**
 * move all flles
 */
function move(array $file_name, string $path, array $support_files = ['jpg', 'png'])
{
    $name = $file_name['name'];   // get file name
    $tmp = $file_name['tmp_name'];  // get file tmp_name

    $file_exe = explode(".", $name);
    $file_exe_lower = strtolower(end($file_exe));

    if (in_array($file_exe_lower, $support_files)) {
        $unique_name = time() . "_" . rand() . "_" . str_shuffle("1234567890") . "." . $file_exe_lower;
        move_uploaded_file($tmp, $path . $unique_name);
        return [
            'status' => "success",
            "message" => "File uploaded successfully.",
            "return" => true,
            "file_name" => $unique_name
        ];
    } else {

        return [
            'status' => "error",
            "message" =>  "Unsupported file type: {$file_exe_lower}. Allowed types are " . implode(', ', $support_files) . ".",
            'return'  => false
        ];
    }
}
