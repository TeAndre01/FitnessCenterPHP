<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $email = htmlspecialchars($_POST["email"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);

    // Simple validation
    if (
        empty($firstName) || empty($lastName) || empty($email) ||
        empty($username) || empty($password) || empty($confirmPassword) ||
        strlen($password) < 8 || $password !== $confirmPassword || !filter_var($email, FILTER_VALIDATE_EMAIL)
    ) {
        header("Location: registration.html?error=InvalidRegistration");
        exit();
    }

    // Store registration information in a text file (append to the file)
    $file = 'register.txt';
    $data = "First Name: $firstName\nLast Name: $lastName\nEmail: $email\nUsername: $username\nPassword: $password\n\n";

    // Open the file in append mode
    $handle = fopen($file, 'a');

    // Write the data to the file
    fwrite($handle, $data);

    // Close the file
    fclose($handle);

    // Redirect to a success page (you can customize this)
    header("Location: register.txt");
    exit();
}
?>