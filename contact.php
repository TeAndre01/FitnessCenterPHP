<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Us</h2>

<form action="process_form.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <input type="submit" value="Submit">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // You can add additional validation and sanitization here

    // Send email (for demonstration purposes, you may want to use a proper email library)
    $to = "your@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";

    // Create the email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Send email
    mail($to, $subject, $email_body, $headers);

    // Redirect after submission (you may customize this)
    header("Location: thank_you.html");
    exit();
}
?>


</body>
</html>
