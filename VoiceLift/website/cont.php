<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('connection.php');

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Perform SQL query to insert data into your database table
    $query = "INSERT INTO voicelift.contact ( name, email, subject, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $email, $subject, $message]);

    // Check if data is inserted successfully
    if ($stmt->rowCount() > 0) {
        // Data inserted successfully
        $_SESSION['success_message'] = "Form submitted successfully";
        header('Location: index.php'); // Redirect to success page
        exit();
    } else {
        // Error handling
        echo "Error: Unable to insert data into the database.";
    }

    // Close database connection
    $conn=null;
}
?>