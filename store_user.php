<?php
$conn = require_once 'database_connection.php';
require_once "./sendEmail.php";
$secretKey  = '6LeODwcnAAAAADK1qwi1gVRPXZeqtcPPoGEbQRPe';

// Check if the form data exists and assign it to variables
$first_name =  $_POST['first_name'];
$last_name = $_POST['last_name'];
$title = $_POST['title'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$country =  $_POST['country'];
$position =  $_POST['position'];
$organization = $_POST['organization'];
$pcfmc = $_POST['pcfmc'] ?: NULL;
$recaptcha_response = $_POST['recaptcha_response'];
// Verify the reCAPTCHA API response 
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $recaptcha_response);

// Decode JSON data of API response 
$responseData = json_decode($verifyResponse);

if ($responseData->score > 0.5) {
    session_start();
    try {
        // Prepare the SQL query with placeholders
        $sql = "INSERT INTO registrants (first_name, last_name,title, email, gender, country, organization,pcfmc,position) VALUES (?, ?, ?, ?, ?, ?,?,?,?)";

        // Create a prepared statement
        $stmt = $conn->prepare($sql);

        // Bind the parameters to the statement
        $stmt->bind_param("sssssssss", $first_name, $last_name,$title, $email, $gender, $country, $organization, $pcfmc, $position);

        // Execute the statement
        $stmt->execute();

        $_SESSION['registration_success'] = true;

        $response = sendEmailWithSendGrid($email, $first_name, $last_name, 'HelloSabahna');

        echo "success";
    } catch (mysqli_sql_exception $e) {
        // Log or handle the exception as needed
        if ($e->getCode() === 1062) {
             echo "exist";
        } else {
            echo "error";
        }
    }
    // Close the statement and connection
    $stmt->close();
    // Close the connection
    $conn->close();
} else {
    echo "Robot verification failed, please try again.";
}
