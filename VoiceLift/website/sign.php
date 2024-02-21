<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connection.php');

    // Retrieve form data
    $userType = $_POST['userType'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Perform SQL query to insert data into your database table
    $query = "INSERT INTO voicelift.signup (userType, fullname, username, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$userType, $fullname, $username, $password]);

    // Check if data is inserted successfully
    if ($stmt->rowCount() > 0) {
        // Data inserted successfully
        header('Location: login.php'); // Redirect to success page
        exit();
    } else {
        // Error handling
        echo "Error: Unable to insert data into the database.";
    }

    // Close database connection
    $conn = null;
}
?>
