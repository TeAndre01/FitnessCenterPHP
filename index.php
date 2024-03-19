<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./index.css" rel="stylesheet">

    <style>
         footer {
            background-color: #008080;
            color: #fff;
            padding: 10px;
            text-align: center;
            
        }
    </style>
</head>
<body>

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
        <li style="position: absolute; right: 35px; top: 63px;">
        <h4>Welcome, <?php echo $username; ?>!</h4>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="services-carousel mt-0">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://21614986.fs1.hubspotusercontent-na1.net/hubfs/21614986/2024%20BFT%20Website%20Images%20Resized/bft-2.webp" style="height: 85vh; object-fit: cover;" class="d-block w-100" alt="Personal Training" ">
            </div>
            <div class="carousel-item">
                <img src="https://www.polar.com/blog/wp-content/uploads/2017/01/What-is-group-fitness_hero.jpg" style="height: 85vh; object-fit: cover;" class="d-block w-100" alt="Group Fitness Classes">
            </div>
            <div class="carousel-item">
                <img src="https://media.self.com/photos/63bc657a779fe34b7ec803e1/1:1/w_3000,h_3000,c_limit/1-09%20cardio%20machines%20v2.png" style="height: 85vh; object-fit: cover;" class="d-block w-100 " alt="Cardio Equipment">
            </div>
            <div class="carousel-item">
                <img src="https://hips.hearstapps.com/hmg-prod/images/man-lifting-dumbells-at-cross-training-gym-royalty-free-image-1625601682.jpg?crop=0.612xw:0.918xh;0.252xw,0.0816xh&resize=640:*" style="height: 85vh; object-fit: cover; object-position: 70% 10%;" class="d-block w-100" alt="Strength Training">
            </div>
            <div class="carousel-item">
                <img src="https://www.starmedicalassociates.com/wp-content/uploads/sites/539/2020/09/iStock-1129664861.jpg" style="height: 85vh; object-fit: cover;" class="d-block w-100" alt="Nutritional Counseling">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="header text-center mt-2">
    <h1>Welcome to Revitalize Fitness Centre</h1>
    <h5>Your Ultimate Fitness Destination</h5>

</div>

<div class="container" style="margin-bottom: 90px;">
    <!--<img src="https://p.turbosquid.com/ts-thumb/bC/eqDLdW/CX/gym1/png/1626180632/600x600/fit_q87/f92c2643c008ad3ff5e65e80700d1e0975200641/gym1.jpg" alt="Fitness Center" class="hero-img">-->
    
    <h2>About Us</h2>

        <p>
            Welcome to Revitalize Fitness, where your journey to a healthier, happier you begins!
        </p>

        <p>
            At Revitalize Fitness, we believe that fitness is not just a physical activity; it's a way of life that can transform your mind, body, and spirit.
            Our mission is to provide a dynamic and inclusive environment where individuals of all fitness levels can discover their true potential and embark on a path to wellness.
        </p>

        <h3>Our Commitment</h3>

        <p>
            Revitalize Fitness is more than just a gym; it's a community committed to your well-being.
            Our team of certified trainers and fitness enthusiasts is dedicated to guiding and supporting you throughout your fitness journey.
            Whether you're taking your first steps into a healthier lifestyle or seeking to push your limits, we're here for you every step of the way.
        </p>

        <h3>State-of-the-Art Facilities</h3>

        <img src="https://p.turbosquid.com/ts-thumb/bC/eqDLdW/CX/gym1/png/1626180632/600x600/fit_q87/f92c2643c008ad3ff5e65e80700d1e0975200641/gym1.jpg" style="display: block; margin-left: auto; margin-right: auto;" alt="Fitness Center Image">

        <p>
            Our cutting-edge facilities are designed to inspire and motivate.
            From a well-equipped gym with the latest fitness machines to specialized areas for group classes, yoga, and personal training,
            we provide the tools and space you need to achieve your fitness goals.
        </p>

        <h3>Diverse Fitness Programs</h3>

        <p>
            Discover the joy of movement with our diverse range of fitness programs.
            From high-energy group classes to personalized training sessions, we offer a variety of options to suit your preferences and schedule.
            Our experienced instructors are passionate about helping you stay engaged and motivated.
        </p>

        <h3>Inclusive Community</h3>

        <p>
            At Revitalize Fitness, diversity and inclusivity are at the core of our community.
            We welcome individuals of all ages, backgrounds, and fitness levels.
            Whether you're a seasoned athlete or a beginner, you'll find a supportive environment that encourages growth and celebrates achievements.
        </p>

</div>

<footer class="fixed-bottom">
    <p>&copy; 2024 Revitalize Fitness. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>