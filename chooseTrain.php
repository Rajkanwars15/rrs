<?php
// Include the config.php file to get the database connection details
include 'config.php';

// Get the user's selected journey details from the form submission
$from_station = $_POST['from_station'];
$to_station = $_POST['to_station'];
$journey_date = $_POST['journey_date'];
$class = $_POST['class'];

// Query the database for trains that match the user's selected journey details
$stmt = $con->prepare("SELECT * FROM trains WHERE from_station = ? AND to_station = ? AND journey_date = ? AND class = ?");
$stmt->bind_param("ssss", $from_station, $to_station, $journey_date, $class);
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Railway Reservation System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'header.php'; ?>
<main>
    <h2>Choose a Train</h2>
    <table>
        <tr>
            <th>Train Number</th>
            <th>From Station</th>
            <th>To Station</th>
            <th>Journey Date</th>
            <th>Class</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['train_number']; ?></td>
            <td><?php echo $row['from_station']; ?></td>
            <td><?php echo $row['to_station']; ?></td>
            <td><?php echo $row['journey_date']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><a href="bookTrain.php?train_number=<?php echo $row['train_number']; ?>">Book Now</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</main>

<?php include 'footer.php'; ?>
</body>
</html>
