<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>O Positive - Donate Blood, Save Lives</title>

    <!-- Bootstrap core CSS with custom styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        background-color: #ffdddd; /* This is a very light shade of red */
        #map {
    margin-bottom: -300px; /* Adjust as needed */
}

    }
</style>

    <style>
        #how-it-works .row {
    margin-bottom: 20px;
}

#how-it-works i {
    font-size: 3em;
}

#how-it-works h4 {
    margin: 10px 0;
}

#how-it-works p {
    font-size: 1.1em;
}

#sign-up {
    text-align: center;
    margin-top: 50px;
}

#sign-up h3 {
    margin-bottom: 20px;
}

#sign-up p {
    font-size: 1.1em;
    margin-bottom: 30px;
}


    </style>

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">O Positive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#HowItWorks">How It Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn " href="/opositive/signup.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn " href="/webslib-main/login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    

    <!-- Header Section -->
    <!-- Header Section -->
<!-- Header Section -->
<header class="text-white text-center mt-5" style="position: relative; overflow: hidden;">
    <img src="bloodon.jpg" alt="Blood On" style="width:100%; height: auto;">
    <img src="logo.png" alt="O Positive Logo" class="mb-4" style="max-width: 1500px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
</header>

<div class="container">
    <h1 class="text-center mb-4">How It Works</h1>
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sign Up</h5>
                    <p class="card-text">Create an account to join our blood donation community. You'll have the opportunity to save lives and make a difference.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Receive Notifications</h5>
                    <p class="card-text">Get notified when a hospital requires your blood type. You'll be able to help those in need with your generous donation.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Donate Blood</h5>
                    <p class="card-text">Your blood donation can save lives. It's a simple, yet powerful act of kindness that can make a huge impact on someone's life. Join us in this noble cause.</p>
                    <a href="signup.php" class="card-link btn btn-success">Donate Now ></a>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Main Content -->
    <!-- <div name="HowItWorks" class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>How It Works</h3>
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-user-plus fa-3x text-danger"></i>
                    </div>
                    <div class="col-10">
                        <h4>Sign Up</h4>
                        <p>Create an account on O Positive to get started.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <i class="fas fa-bell fa-3x text-danger"></i>
                    </div>
                    <div class="col-10">
                        <h4>Receive Notifications</h4>
                        <p>Get instant alerts when a hospital needs your blood type.</p>
                    </div>
                </div>
                <!-- Add more steps with icons as needed -->
            </div>
            <div class="col-md-6">
                <div id="map" style="height: 300px;"></div>
            </div>
        </div> 
        <div class="row mt-4">
    <div class="col-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d428598.2969198161!2d-117.50164578478454!3d32.93980822563205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sblood%20banks%20near%20me!5e0!3m2!1sen!2sus!4v1698100529447!5m2!1sen!2sus" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
        <div id="sign-up" class="mt-5">
            <h3>Sign Up Today</h3>
            <p>Join a community of blood donors and help make a positive impact. Sign up now!</p>
            <a href="/opositive/signup.php" class="btn btn-danger">Sign Up</a>
        </div>
    </div>
    <br>
    <footer class="py-4 bg-light" style="position: absolute; bottom: 0; width: 100%;">
    <div class="container text-center">
        <p class="mb-0">© 2023 O Positive. All rights reserved.</p>
    </div>
</footer>


    <!-- Bootstrap core JavaScript and FontAwesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
