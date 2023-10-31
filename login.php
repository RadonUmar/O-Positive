<?php
session_start();
$error = " ";
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('location: home');
}
else {
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    //full_name/Password incorrect error
    $con = mysqli_connect('localhost', 'root', '', 'db');

    //mysql injection prevention
    $full_name = stripcslashes($full_name);
    $password = stripcslashes($password);
    $full_name = mysqli_real_escape_string($con, $full_name);
    $password = mysqli_real_escape_string($con, $password);
    $password = md5($password);

    $sql = "SELECT * FROM user_info WHERE full_name = '$full_name' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count==1){
       session_start();
       $_SESSION['loggedin'] = true;
       $_SESSION['uid'] = $row['id'];
       header('location: home');
}  
    else{
        $error .= "Name or Password is incorrect";
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
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
    <link rel="icon" href="favicon.png">
    <style>
    body {
        background-color: #ffdddd; /* This is a very light shade of red */
    }
</style>
</head>
<body>

<form class="form-signin" action="login.php" method="post">
      <div class="text-center mb-4">
      <a href="index"><img class="mb-4" href="index" src="logo.png" alt="" width="210" height="190" style="width:200px;
  height:150px;
  object-fit:cover;
  "></a>
        <h1 class="h3 mb-3 font-weight-normal">Login to O Positive</h1>
        <?php echo "<p>$error</p>"; ?>
      </div>

      <div class="form-label-group">
        <input type="text" name="full_name" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Full Name</label>
      </div>

      <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <button class="btn btn-danger btn-lg btn-primary btn-block" type="submit">Login</button>
      <br>
      <center><p>Not yet a member?<a href="signup"> Signup now.</a></p></center>
      <p class="mt-5 mb-3 text-muted text-center">&copy; O Positve</p>
    </form>

</body>
</html>
