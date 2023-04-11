<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Railway Reservation System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include('header.php'); ?>
<main>
    <h2>Welcome to the Railway Reservation System</h2>
    <?php if (isset($_SESSION['user_id'])): ?>
        <p>You are currently logged in.</p>
    <?php else: ?>
        <p>Please sign up or sign in to get started.</p>
    <?php endif; ?>
</main>
<?php include('footer.php'); ?>
</body>
</html>