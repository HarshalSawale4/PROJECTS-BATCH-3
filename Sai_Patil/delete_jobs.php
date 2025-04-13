<?php
include 'db.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $id = $_DELETE['id'];

    $sql = "DELETE FROM jobs WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Job deleted successfully";
    } else {
        echo "Error deleting job: " . $conn->error;
    }
}

$conn->close();
?>