<?php
$filename = basename($_FILES["file"]["name"]);
$filename = str_replace(" ", "_", $filename); # replace space with '_'

$tempFileName = $_FILES["file"]["tmp_name"];
$upload_dir = "./pdf/";

$error = $_FILES['file']['error']; # check error status

# check if folder exist
if (!file_exists($upload_dir)) {
    mkdir("./pdf/", 0777, true);
}


if ($error == UPLOAD_ERR_OK) {
    if (move_uploaded_file($tempFileName, "$upload_dir/$filename")) {
        echo "<script>alert('Moved :)')</script>";
    }
}
?>
