<header>
    <h1>Railway Reservation System</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if (!isset($_SESSION['user_id'])): ?>
                <li><a href="signup.php">Sign Up</a></li>
                <li><a href="signin.php">Sign In</a></li>
            <?php else: ?>
                <li><a href="booking.php">Book a Reservation</a></li>
                <li><a href="view-seats.php">View Available/Booked Seats</a></li>
                <li><a href="cancel.php">Cancel Reservation</a></li>
                <li><a href="refund.php">Apply for Refund</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>