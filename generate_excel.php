<?php

session_start();

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
    $currentTime = time();
    $conn = require_once 'database_connection.php';

    $output = fopen('php://memory', 'w');
    fputcsv($output, array('ID','FirstName', 'LastName','Title', 'Email', 'Gender', 'Designation', 'Organization','PCFMC', 'Country'));

    $query = "SELECT id,first_name,last_name,title,email,gender,position,organization,pcfmc,country FROM registrants";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }
    fseek($output, 0);
    header('Content-Type: text/csv; charset=utf-8');
    header("Content-Disposition: attachment; filename=$currentTime.csv");
    fpassthru($output);
} else {
    header("Location: login.php");
    exit();
}
