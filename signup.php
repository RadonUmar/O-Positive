<?php
session_start();
$print_err = "";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  header('location: home');
} else {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password_1 = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $blood_group = $_POST['blood_group'];

    // Validate the form inputs here if needed

    $errors = 0;

    $con = mysqli_connect('localhost', 'root', '', 'db');

    // Escape special characters to prevent SQL injection
    $full_name = mysqli_real_escape_string($con, $full_name);
    $phone_number = mysqli_real_escape_string($con, $phone_number);
    $email = mysqli_real_escape_string($con, $email);
    $password_1 = mysqli_real_escape_string($con, $password_1);
    $confirm_password = mysqli_real_escape_string($con, $confirm_password);
    $blood_group = mysqli_real_escape_string($con, $blood_group);

    if ($password_1 != $confirm_password) {
      $errors++;
    }

    if ($errors == 0) {
      $password_insert = md5($password_1);
      $sql = "INSERT INTO user_info (full_name, phone_number, email, password, blood_group)
              VALUES ('$full_name', '$phone_number', '$email', '$password_insert', '$blood_group')";
      mysqli_query($con, $sql);

      $_SESSION['full_name'] = $full_name;
      $_SESSION['loggedin'] = true;

      $sql2 = "SELECT id FROM user_info WHERE full_name = '$full_name' AND password = '$password_insert'";
      $result2 = mysqli_query($con, $sql2);

      if (mysqli_num_rows($result2) > 0) {
        $row = mysqli_fetch_assoc($result2);
        $_SESSION['uid'] = $row['id'];
      }

      header('location: login');
    } else {
      $print_err = "Passwords do not match";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="logo.png">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
    <style>
    body {
        background-color: #ffdddd; /* This is a very light shade of red */
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
        <h1 class="h3 mb-3 font-weight-normal">Signup to O Positive</h1>
        <?php echo "<h style='font-size: 17px'><center>$print_err</center></h>"; ?>
      </div>

      <div class="form-label-group">
        <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Email address"  autofocus>
        <label for="full_name">Full Name (First and Last)</label>
      </div>

      <div class="form-label-group">
    <select name="blood_group" id="inputBloodGroup" class="form-control" required autofocus>
        <option value="" disabled selected>Select your blood group</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>
    <label for="inputBloodGroup"></label>
</div>


      <div class="form-label-group">
        <input type="tel" name="phone_number" id="inputNumber" class="form-control" placeholder="Phone Number" required autofocus>
        <label for="inputNumber">Phone Number</label>
      </div>

      <div class="form-label-group">
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email (Optional)</label>
      </div>


      <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="confirm_password" id="inputPassword" class="form-control" placeholder="Confirm Password" required autofocus>
        <label for="inputPassword">Confirm Password</label>
      </div>

      <button class="btn btn-lg bg-danger btn-primary btn-block" type="submit">Sign up</button>
      <br>
      <center><p>Already a member?<a href="login"> Login now.</a></p></center>
      <p class="mt-5 mb-3 text-muted text-center">&copy; O Positive</p>
    </form>

</body>
</html>
