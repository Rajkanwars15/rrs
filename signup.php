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
        <input type="submit" value="Sign Up">
    </form>
</main>
<footer>
    <p>&copy; 2023 Railway Reservation System</p>
</footer>
</body>
</html>
