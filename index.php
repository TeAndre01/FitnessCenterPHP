<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #D3D3D3;
        }
        .header {
            background-color: #008080;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .hero-img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            border-radius: 20px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .dropdown-menu {
            background-color: #007bff; /* Blue background color */
        }
        .services-carousel img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Welcome to FitZone</h1>
    <p>Your Ultimate Fitness Destination</p>
</div>

<div class="container">
    <img src="fitness_center_image.jpg" alt="Fitness Center" class="hero-img">
    
    <div class="intro">
        <h2>About Us</h2>
        <p>At FitZone, we're committed to helping you achieve your fitness goals and lead a healthier lifestyle. With state-of-the-art facilities, expert trainers, and a wide range of classes and programs, we provide everything you need to reach your full potential.</p>
    </div>
    
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Choose a Service
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Personal Training</a>
            <a class="dropdown-item" href="#">Group Fitness Classes</a>
            <a class="dropdown-item" href="#">Cardio Equipment</a>
            <a class="dropdown-item" href="#">Strength Training</a>
            <a class="dropdown-item" href="#">Nutritional Counseling</a>
        </div>
    </div>
</div>

<div class="container services-carousel mt-5">
    <h2 class="text-center">Our Services</h2>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/personalTraining.jpeg" class="d-block w-100" alt="Personal Training">
            </div>
            <div class="carousel-item">
                <img src="images/fitnessTraining.jpg" class="d-block w-100" alt="Group Fitness Classes">
            </div>
            <div class="carousel-item">
                <img src="images/cardioEquipment.jpg" class="d-block w-100" alt="Cardio Equipment">
            </div>
            <div class="carousel-item">
                <img src="images/strengthTraining.jpg" class="d-block w-100" alt="Strength Training">
            </div>
            <div class="carousel-item">
                <img src="images/nutritionalTraining.jpg" class="d-block w-100" alt="Nutritional Counseling">
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>