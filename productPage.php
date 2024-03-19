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
    <title>Products and Services</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
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
            color: #fff;
            padding: 10px;
            text-align: center;
            
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


<h2 class="mt-5">Welcome, <?php echo $username; ?>!</h2>

<table>
    <thead>
        <tr>
            <th>Product/Service</th>
            <th>Price/Cost</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Gym Membership</td>
            <td>$50 per month</td>
        </tr>
        <tr>
            <td>Personal Training Session</td>
            <td>$30 per session</td>
        </tr>
        <tr>
            <td>Group Fitness Class</td>
            <td>$20 per class</td>
        </tr>
        <tr>
            <td>Nutritional Counseling</td>
            <td>$40 per session</td>
        </tr>
        <tr>
            <td>Massage Therapy</td>
            <td>$60 per session</td>
        </tr>
      
    </tbody>
</table>


<a href="welcome.php">Go back to Welcome Page</a>

<footer class="fixed-bottom">
    <p>&copy; 2024 Revitalize Fitness. All rights reserved.</p>
</footer>
</body>
</html>
