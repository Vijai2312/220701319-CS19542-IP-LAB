<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

$bloodType = $_POST['bloodType'];
$date = $_POST['date'];

// Database logic for saving the booking (not implemented here)

// Success message
echo "<script>alert('Booking submitted successfully!'); window.location.href='booking_form.php';</script>";
?>
