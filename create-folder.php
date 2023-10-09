<?php
    # check whether a folder exists if not create one
    $dir = './pdf/';

    if (!file_exists($dir)) {
        mkdir('./pdf/', 0777, true);
    }else {
      # found
    }
?>
