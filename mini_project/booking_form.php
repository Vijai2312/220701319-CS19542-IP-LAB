<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bloodType = $_POST['bloodType'];
    $date = $_POST['date'];

    // Assuming you have a database connection here
    // Example: Insert booking data into the database
    // $sql = "INSERT INTO bookings (username, bloodType, date) VALUES ('$_SESSION['username']', '$bloodType', '$date')";
    // Execute your database query here...

    // Redirect to blood bank management page after successful booking
    header("Location: blood_bank_management.html");
    exit();
} else {
    // If form is not submitted correctly, redirect back to the booking form
    header("Location: login.html");
    exit();
}
?>
