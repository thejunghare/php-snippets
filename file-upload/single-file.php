<?php
$filename = basename($_FILES['file']['name']);
    $tempFileName = $_FILES['file']['tmp_name'];
    $upload_dir = '../pdf/navbar-attachment/';
    $error = null;

    if ($error == UPLOAD_ERR_OK) {
        if (move_uploaded_file($tempFileName, "$upload_dir/$filename")) {
            echo "<script>alert('Moved :)')</script>";
            /*
        $sql = "INSERT INTO users (name, surname, sex) VALUES (?,?,?)";
        $pdo->prepare($sql)->execute([$name, $surname, $sex]);
        */

        }
    }
?>
