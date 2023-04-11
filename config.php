<?php

define('DB_HOST', 'enter_your_host');
define('DB_NAME', 'enter_your_DBname');
define('DB_USER', 'enter_your_DBuser');
define('DB_PASSWORD', 'enter_your_DBpass');

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";

$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$con) {
    die(mysqli_error($con));
}

/*try {
    $pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    die("Error connecting to the database: " . $e->getMessage());
}*/

?>
