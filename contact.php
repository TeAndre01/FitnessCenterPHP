<?php
// Define variables for form fields and error messages
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }

    // If all fields are valid, you can process the form data as needed
    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        // Process the form data, send emails, etc.
        // For demonstration purposes, we'll just display a success message
        $successMessage = "Thank you for your message! We will get back to you soon.";
    }
}

// Function to sanitize and validate input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        form {
            width: 300px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            text-align: left;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" style="margin-bottom: -8px;">
  <div class="container-fluid" style="background-color: #008080; opacity: 90%;">
    <img src="./images/logo.jpg" style="height: 15vh;" class="navbar-brand" alt="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" style=" color: white;">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="color: white; font-size: 22px;" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productPage.php" style="color: white; font-size: 22px;">Product Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" style="color: white; font-size: 22px;">Contact</a>
        </li>&nbsp;&nbsp;&nbsp;
        <li>
        <a class="logout" href="logout.php" style="color: white; font-size: 22px;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<h2 cl>Contact Us</h2>

<p>
    For any inquiries or assistance, please contact us using the form below or visit our Centre at 12 Molyne's Road Kingston.
</p>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
    <span class="error"><?php echo $nameErr; ?></span>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
    <span class="error"><?php echo $emailErr; ?></span>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required><?php echo $message; ?></textarea>
    <span class="error"><?php echo $messageErr; ?></span>

    <button type="submit">Submit</button>
</form>

<?php
// Display success message if the form is successfully submitted
if (isset($successMessage)) {
    echo '<p class="success">' . $successMessage . '</p>';
}
?>

</body>
</html>
