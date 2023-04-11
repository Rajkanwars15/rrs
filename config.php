<?php

define('DB_HOST', 'sql301.epizy.com');
define('DB_NAME', 'epiz_33802660_rrsdata');
define('DB_USER', 'epiz_33802660');
define('DB_PASSWORD', 'mzJ8oZKpg8sNPe');

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