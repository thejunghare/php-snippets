<?php
# for localhost
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# for production
/*ini_set('display_errors', 0);
ini_set('log_errors', 1);*/

$host = 'localhost';
$db   = 'your_database_name'; 
$user = 'your_database_username'; # root
$pass = 'you_database_password'; # blank
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);
?>


