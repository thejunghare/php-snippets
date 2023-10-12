<?php
$sql = "DELETE FROM users WHERE id=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$id]);

#or you can chain execute() to prepare():

$pdo->prepare("DELETE FROM users WHERE id=?")->execute([$id]);

?>
