<?php
    $name = $_POST['name'];

    $stmt = $pdo->prepare("SELECT * FROM table_name WHERE name=?");
    $stmt->execute([$name]);
    $item = $stmt->fetch();

    if (!$item) {
       # found 
    } 
?>
