<?php
# INSERT query with positional placeholders

$stmt = "INSERT INTO users (name, username) VALUES (?,?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $username]);

# chain execute and prepare/short hand
$pdo->prepare($sql)->execute([$name, $username]);


# INSERT query with named placeholders
$data = [
        'name' => $name,
        'username' => $username,
    ];

$sql = "INSERT INTO users (name, username) VALUES (:name, :username)";
$stmt=$pdo->prepare($sql);
$stmt->execute($data);

# chain execute and prepare/short hand
$pdo->prepare($sql)->execute($data);
?>