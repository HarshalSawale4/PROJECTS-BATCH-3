<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["role"] = $user["role"];
        header("Location: dashboard.php");
    } else {
        echo "Invalid email or password!";
    }
}
?>
