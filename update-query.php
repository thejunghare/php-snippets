<?php
$sql = "UPDATE users SET name=?, surname=?, sex=? WHERE id=?";
$pdo->prepare($sql)->execute([$name, $surname, $sex, $id]);
?>
