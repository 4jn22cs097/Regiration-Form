<?php
// Connect to your database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$rooms = $_POST['rooms'];

// Insert data into database
$sql = "INSERT INTO hotel (name, email, phone, checkin, checkout, rooms)
VALUES ('$name', '$email', '$phone', '$checkin', '$checkout', '$rooms')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>Booked Details</Details></h1>
        <p><strong>Name:</strong> <?= ($name) ?></p>
        <p><strong>Email:</strong> <?= ($email) ?></p>
        <p><strong>Phone Number:</strong> <?= ($phone) ?></p>
        <p><strong>Check-in Date:</strong> <?= ($checkin) ?></p>
        <p><strong>Check-out Date:</strong> <?= ($checkout) ?></p>
        <p><strong>Number of Seats:</strong> <?= ($rooms) ?></p>
    </div>
</body>
</html>