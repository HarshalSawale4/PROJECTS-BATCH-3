<?php
include 'db.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $company = $_POST['company'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $description = $_POST['description'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO jobs (title, company, location, salary, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $company, $location, $salary, $description);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New job posted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>