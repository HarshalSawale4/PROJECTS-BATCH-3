<?php
include 'config.php';
session_start();

if ($_SESSION["role"] != "job_seeker") {
    die("Access Denied!");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_id = $_POST["job_id"];
    $user_id = $_SESSION["user_id"];

    $query = "INSERT INTO applications (job_id, user_id) VALUES ('$job_id', '$user_id')";
    mysqli_query($conn, $query);
    echo "Application submitted!";
}
?>
<form action="apply.php" method="POST">
    <input type="hidden" name="job_id" value="JOB_ID_HERE">
    <button type="submit">Apply Now</button>
</form>