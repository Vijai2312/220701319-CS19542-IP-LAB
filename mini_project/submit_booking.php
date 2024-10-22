<?php
// Database connection settings
$servername = "localhost"; // Change this if your DB server is different
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "blood_donation"; // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (full_name, email, phone_number, blood_type, preferred_date, preferred_time) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $phone, $bloodType, $date, $time);

// Get form values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$bloodType = $_POST['bloodType'];
$date = $_POST['date'];
$time = $_POST['time'];

// Execute the statement
if ($stmt->execute()) {
    echo "New booking created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
