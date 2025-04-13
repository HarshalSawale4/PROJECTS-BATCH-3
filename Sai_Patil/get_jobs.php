<?php
include 'db.php'; // Include the database connection file

$sql = "SELECT * FROM jobs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Title: " . $row["title"]. " - Company: " . $row["company"]. " - Location: " . $row["location"]. " - Salary: " . $row["salary"]. " - Description: " . $row["description"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>