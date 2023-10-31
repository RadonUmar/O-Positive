<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $bloodGroup = $_POST['bloodGroup'];

    // Assuming you have a database connection established
    $con = mysqli_connect('localhost', 'root', '', 'db');

    $fullName = mysqli_real_escape_string($con, $fullName);
    $phoneNumber = mysqli_real_escape_string($con, $phoneNumber);
    $email = mysqli_real_escape_string($con, $email);
    $bloodGroup = mysqli_real_escape_string($con, $bloodGroup);

    $userId = $_SESSION['user_id']; // Assuming you have stored the user's ID in a session variable

    $sql = "UPDATE user_info SET full_name='$fullName', phone_number='$phoneNumber', email='$email', blood_group='$bloodGroup' WHERE id=$userId";

    mysqli_query($con, $sql);

    // Redirect back to the home page after the update
    header('Location: home.php');
    exit(); // Ensure that no further code is executed after the redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Details</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #ffdddd;">
    <div class="container mt-5">
        <h1 class="mb-4">Edit Details</h1>
        <form action="process_edit_details.php" method="post">
            <?php
            // Assuming you have a database connection established
            $con = mysqli_connect('localhost', 'root', '', 'db');
            
            // Assuming you have a session variable named user_id set when the user logs in
            $userId = $_SESSION['uid'];
            $result = mysqli_query($con, "SELECT * FROM user_info WHERE id=$userId");
            $row = mysqli_fetch_assoc($result);
            ?>

            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" value="<?php echo $row['full_name']; ?>">
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" value="<?php echo $row['phone_number']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="bloodGroup">Blood Group</label>
                <select class="form-control" id="bloodGroup" name="bloodGroup">
                    <!-- Assuming $row['blood_group'] contains the user's current blood group -->
                    <option value="A+" <?php if ($row['blood_group'] == 'A+') echo 'selected'; ?>>A+</option>
        <option value="A-" <?php if ($row['blood_group'] == 'A-') echo 'selected'; ?>>A-</option>
        <option value="B+" <?php if ($row['blood_group'] == 'B+') echo 'selected'; ?>>B+</option>
        <option value="B-" <?php if ($row['blood_group'] == 'B-') echo 'selected'; ?>>B-</option>
        <option value="AB+" <?php if ($row['blood_group'] == 'AB+') echo 'selected'; ?>>AB+</option>
        <option value="AB-" <?php if ($row['blood_group'] == 'AB-') echo 'selected'; ?>>AB-</option>
        <option value="O+" <?php if ($row['blood_group'] == 'O+') echo 'selected'; ?>>O+</option>
        <option value="O-" <?php if ($row['blood_group'] == 'O-') echo 'selected'; ?>>O-</option>                </select>
            </div>
            <button type="submit" class="btn btn-primary"><a style="text-decoration:none; color:white;"href="home.php">Save Changes</a></button>
            <a href="home.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
