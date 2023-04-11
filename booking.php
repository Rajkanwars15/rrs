<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location: signin.php');
    exit;
}
// Calculate the minimum journey date (two days from today)
$min_date = date('Y-m-d', strtotime('+2 days'));
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
    <h2>Book a Reservation</h2>
    <form method="post" action="chooseTrain.php">
        <label for="from_station">From Station:</label>
        <input type="text" id="from_station" name="from_station" onkeyup="showSuggestions(this.value, 'from')" required>
        <div id="from_suggestions"></div><br><br>

        <label for="to_station">To Station:</label>
        <input type="text" id="to_station" name="to_station" onkeyup="showSuggestions(this.value, 'to')" required>
        <div id="to_suggestions"></div><br><br>

        <label for="journey_date">Journey Date:</label>
        <input type="date" id="journey_date" name="journey_date" min="<?php echo $min_date; ?>" required><br><br>

        <label for="class">Class:</label>
        <select id="class" name="class" required>
            <option value="">Select Class</option>
            <option value="AC">AC</option>
            <option value="First">First Class</option>
            <option value="Second">Second Class</option>
        </select><br><br>

        <input type="submit" value="Book Now">
    </form>
</main>

<script>
    function showSuggestions(str, type) {
        if (str.length == 0) {
            document.getElementById(type + "_suggestions").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(type + "_suggestions").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "get_suggestions.php?q=" + str + "&type=" + type, true);
            xmlhttp.send();
        }
    }

    function selectSuggestion(name, type) {
        document.getElementById(type + "_station").value = name;
        document.getElementById(type + "_suggestions").innerHTML = "";
    }
</script>
<?php include 'footer.php'; ?>
</body>
</html>