<?php
include 'db.php'; // Include your database connection

$sql = "SELECT * FROM jobs";
$result = $conn->query($sql);

$jobs = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $jobs[] = $row;
    }
}
echo json_encode($jobs);
$conn->close();
?>