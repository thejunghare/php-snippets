<?php
// select a particular user by id
$stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([$id]); 
$user = $stmt->fetch();
?>
