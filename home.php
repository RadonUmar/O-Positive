<?php
    session_start();
    $db = mysqli_connect("localhost", "root", "", "db"); 

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $clicked = $_POST['submit'];
        }

        if(isset($clicked)){
            // Your existing code for adding websites
        }
    }
    else {
        header('location: login');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>O Positive</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="icon" href="favicon.png">
    <link href="style.css" rel="stylesheet">
</head>
<body style="background-color: rgb(220, 220, 228);">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">O Positive</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

            </div>
        </nav>
    </header>

    <main role="main" class="container">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <button class="btn btn-success btn-block mb-3">Donate</button>
                <a href="donationrequest.php" class="btn btn-danger btn-block mb-3">Request</a>
                <button class="btn btn-info btn-block"><a style="text-decoration:none; color:white;" href="editinfo.php">Edit Personal Information</a></button>
            </div>
        </div>
		<br>
		<table class="table table-striped table-bordered">
		<?php

$con = mysqli_connect('localhost', 'root', '', 'db');

// Fetch records from the database
$result = mysqli_query($con, "SELECT * FROM blood_requests");

// Check if there are any records
if (mysqli_num_rows($result) > 0) {
    echo '<table class="table table-striped table-bordered">';
    echo '<thead>
            <tr>
                <th scope="col">Blood Type</th>
                <th scope="col">Hospital</th>
                <th scope="col">Urgency</th>
            </tr>
          </thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['blood_type'] . '</td>';
        echo '<td>' . $row['hospital'] . '</td>';
        echo '<td>' . $row['urgency'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No records found';
}
?>

<div class="row mt-4">
    <div class="col-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d428598.2969198161!2d-117.50164578478454!3d32.93980822563205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sblood%20banks%20near%20me!5e0!3m2!1sen!2sus!4v1698100529447!5m2!1sen!2sus" 
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- 
<form action="send_sms.php" method="post">
    <a href="send_sms.php"><button type="submit" class="btn btn-primary">Send SMS</button>
</form> -->


<main role="main" class="container">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4">
                <a href="logout.php" class="btn btn-danger btn-block mb-3">Logout</a>
            </div>
        </div>
		<br>

<br><br>

<footer class="py-4 bg-light">
        <div class="container text-center">
            <p class="mb-0">© 2023 O Positive. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function GDrive() {
            alert("Save your Google Drive files as a link, store it here, then access it from anywhere!")
        }
        function AppInt() {
            alert("Store the link to your favourite apps, and open the app from here")
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>

    <style>
        @media only screen and (max-width: 600px) {
            .btn-group-vertical {
                max-width: 250px;
            }
            .btn-primary {
                max-width: 200px;
            }
        }

        #img {
            width: 25px;
            height: 25px;
            position: absolute;
            right: 25px;
            object-fit: cover;
            border-radius: 50%;
        }

        .btn-outline-dark:hover {
            background-color: white;
        }
    </style>
</body>
</html>
