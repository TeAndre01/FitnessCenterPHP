<?php
session_start();

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

// Retrieve the username from the session
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
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
            max-width: 600px;
            margin: 0 auto;
        }

        img {
            max-width: 100%;
            border-radius: 8px;
            margin-top: 20px;
        }

        a {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #4caf50;
            font-weight: bold;
        }

        a:hover {
            color: #45a049;
        }

       
         footer {
            background-color: #008080;
            color: white;
            padding: 10px;
            text-align: center;
            
        }
    
    </style>
</head>
<body>

<h2>Welcome, <?php echo $username; ?>!</h2>

<p>
    Thank you for choosing Revitalize fitness center. We are dedicated to helping you achieve your fitness goals through our state-of-the-art equipment,
    personalized training sessions, and a variety of fitness classes. Whether you are a beginner or an experienced fitness enthusiast, we have
    something for everyone.
</p>

<img src="https://p.turbosquid.com/ts-thumb/bC/eqDLdW/CX/gym1/png/1626180632/600x600/fit_q87/f92c2643c008ad3ff5e65e80700d1e0975200641/gym1.jpg" alt="Fitness Center Image">

<a href="productPage.php">View Our Products and Services</a>

<footer class="fixed-bottom">
    <p>&copy; 2024 Revitalize Fitness. All rights reserved.</p>
</footer>

</body>
</html>
