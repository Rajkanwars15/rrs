<?php
// Include the config.php file to get the database connection details
include 'config.php';

// Get the user's input and the type of field (from/to)
$q = $_GET['q'];
$type = $_GET['type'];

// Connect to your database using the connection details from config.php
$stmt = $con->prepare("SELECT NAME FROM stations WHERE station_name LIKE CONCAT('%', ?, '%')");
$stmt->bind_param("s", $q);
$stmt->execute();
$result = $stmt->get_result();

// Output the suggestions as HTML
while ($row = $result->fetch_assoc()) {
    echo "<div onclick=\"selectSuggestion('" . $row['station_name'] . "', '" . $type . "')\">" . $row['station_name'] . "</div>";
}