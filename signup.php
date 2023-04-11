<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Railway Reservation System - Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('header.php'); ?>
<main>
    <h2>Sign Up</h2>
    <form method="post" action="register.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Sign Up">
    </form>
</main>
<?php include('footer.php'); ?>
</body>
</html>