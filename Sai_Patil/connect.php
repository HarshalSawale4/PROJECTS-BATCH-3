<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "job_provider"; // make sure this matches

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
