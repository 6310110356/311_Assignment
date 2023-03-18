<?php

// Define variables for database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "concert";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if signup form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])) {
    
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Insert new user into database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        // Signup successful, display success message
        $success = "Account created successfully. You can now login.";
    } else {
        // Signup unsuccessful, display error message
        $error = "Error: " . mysqli_error($conn);
    }
}

// Check if login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    
    // Get username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Query database for user with matching username and password
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    // Check if user exists
    if (mysqli_num_rows($result) == 1) {
        // Login successful, redirect to home page or dashboard
        $row = mysqli_fetch_assoc($result);
        if ($row['is_admin']) {
            header("Location: ticket.php");
        } else {
            header("Location: ticket.php");
        }
        exit();
    } else {
        // Login unsuccessful, display error message
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login PSU Concert</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h2>Login PSU Concert</h2>

    <?php if (isset($success)) { ?>
        <p><?php echo $success; ?></p>
    <?php } ?>

    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>

    <form method="post">
        <label>Username :</label>
        <input type="text" name="username"><br><br>
        <label>Password :</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Login">
        <input type="submit" name="signup" value="Sign up">
    </form>

</body>
</html>
