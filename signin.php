<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Railway Reservation System - Sign In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include('header.php'); ?>
<main>
    <h2>Sign In</h2>
    <form action="login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Sign In">
    </form>
</main>
<?php include('footer.php'); ?>
</body>
</html>