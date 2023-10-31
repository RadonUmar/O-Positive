<?php
session_start();
$print_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood_type = $_POST['blood_type'];
    $hospital = $_POST['hospital'];
    $urgency = $_POST['urgency'];

    $errors = 0;

    $con = mysqli_connect('localhost', 'root', '', 'db');

    $blood_type = mysqli_real_escape_string($con, $blood_type);
    $hospital = mysqli_real_escape_string($con, $hospital);
    $urgency = mysqli_real_escape_string($con, $urgency);


    if ($errors == 0) {
        $sql = "INSERT INTO blood_requests (blood_type, hospital, urgency)
                VALUES ('$blood_type', '$hospital', '$urgency')";
        mysqli_query($con, $sql);

        // Handle session or redirection if needed after submission
        header('Location: home.php');
        exit(); // Ensure that no further code is executed after the redirection
    }

}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Blood Request Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="logo.png">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffdddd;
        }
    </style>
</head>
<body>
<form class="form-signin" action="" method="post">
    <div class="text-center mb-4">
        <a href="index"><img class="mb-4" href="index" src="logo.png" alt="" width="210" height="190" style="width:200px;
  height:150px;
  object-fit:cover;
  "></a>
        <h1 class="h3 mb-3 font-weight-normal">Blood Request Form</h1>
        <?php echo "<h style='font-size: 17px'><center>$print_err</center></h>"; ?>
    </div>

    <div class="form-label-group">
        <select name="blood_type" id="inputBloodType" class="form-control" required autofocus>
            <option value="" disabled selected>Select blood type</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <label for="inputBloodType"></label>
    </div>

    <div class="form-label-group">
        <input type="text" name="hospital" id="inputHospital" class="form-control" placeholder="Hospital" required autofocus>
        <label for="inputHospital">Hospital</label>
    </div>

    <div class="form-label-group">
        <select name="urgency" id="inputUrgency" class="form-control" required autofocus>
            <option value="" disabled selected>Select urgency</option>
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select>
        <label for="inputUrgency"></label>
    </div>

    <button class="btn btn-lg bg-danger btn-primary btn-block" type="submit">Submit</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; O Positive</p>
</form>
</body>
</html>
