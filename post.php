<?php
$conn = require_once 'database_connection.php';

// Process the login form submission
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user from the database based on the provided username
    $query = "SELECT * FROM admins WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verify the password
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['auth'] = true;
            //success
            echo 1 ;
        } else {
            // Password is incorrect
            echo "pswincorrect";
        }
    } else {
        // User not found
        echo "usernotfound";
    }

    // Close the database connection
    $conn->close();

