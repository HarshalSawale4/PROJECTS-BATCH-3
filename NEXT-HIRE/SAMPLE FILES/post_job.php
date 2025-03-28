<?php
include 'config.php';
session_start();

if ($_SESSION["role"] != "employer") {
    die("Access Denied!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $location = $_POST["location"];
    $salary = $_POST["salary"];
    $employer_id = $_SESSION["user_id"];

    $query = "INSERT INTO jobs (employer_id, title, description, location, salary) 
              VALUES ('$employer_id', '$title', '$description', '$location', '$salary')";
    mysqli_query($conn, $query);
    echo "Job Posted Successfully!";
}
?>
