<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cnic = $_POST['cnic'];

    // Connect to MySQL database
    $host = 'localhost';
    $user = 'root';
    $password = '123456789';
    $database = 'railway_management_system';

    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare and execute SQL statement to insert user data into the database
    $sql = "INSERT INTO users (name, email, password, cnic) VALUES ('$name', '$email', '$password', '$cnic')";

    if (mysqli_query($conn, $sql)) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Railway Reservation System - Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Railway Reservation System</h1>
</header>
<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>
<main>
    <h2>Sign Up</h2>
    <form method="post" action="register.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="cnic">CNIC:</label>
        <input type="text" id="cnic" name="cnic" required>
        <input type="submit" value="Sign Up">
    </form>
</main>
<footer>
    <p>&copy; 2023 Railway Reservation System</p>
</footer>
</body>
</html>
