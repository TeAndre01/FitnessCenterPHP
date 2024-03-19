<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    // Simple validation (you can add more complex validation here)
    if (empty($username) || empty($password) || strlen($password) < 8) {
        header("Location: login.html?error=InvalidCredentials");
        exit();
    }

    // Simulate authentication (replace this with actual database check)
    // For simplicity, using a hardcoded username and password
    $validUsername = "Halle Francis";
    $validPassword = "password123";

    if ($username == $validUsername && $password == $validPassword) {
        // Store username in session variable
        $_SESSION["username"] = $username;

        // Redirect to the welcome/home page
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: login.html?error=InvalidCredentials");
        exit();
    }
}
?>