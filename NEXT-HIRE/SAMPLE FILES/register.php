<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $role = $_POST["role"];

    $query = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";
    if (mysqli_query($conn, $query)) {
        echo "Registration Successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
