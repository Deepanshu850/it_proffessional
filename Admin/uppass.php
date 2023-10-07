<?php
include "connection.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the current and new passwords from the form
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];

    // Replace the following lines with your own code to validate the current password and update the new password in the database
    $name = $_POST['name']; // Assuming you have a name field in your form

    // Connect to the database
    $mysqli = new mysqli('localhost', 'root', '', 'training_it_professional');

    // Check if the connection was successful
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    // Check if the current password is correct
    $query = "SELECT id, password FROM users WHERE name='$name'";
    $result = $mysqli->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userId = $row['id'];
        $storedPassword = $row['password'];

        if (password_verify($currentPassword, $storedPassword)) {
            // Current password is correct, update the new password
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT); // Hash the new password

            // Update the password in the database
            $updateQuery = "UPDATE users SET password='$hashedPassword' WHERE id='$userId'";
            $updateResult = $mysqli->query($updateQuery);

            if ($updateResult) {
                // Password updated successfully
                echo "Password updated successfully!";
            } else {
                // Error updating password
                echo "Error updating password: " . $mysqli->error;
            }
        } else {
            // Current password is incorrect
            echo "Incorrect current password!";
        }
    } else {
        // User not found
        echo "User not found!";
    }

    // Close the database connection
    $mysqli->close();
}
