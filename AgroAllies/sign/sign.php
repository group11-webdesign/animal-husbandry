<?php
session_start();

if (isset($_SESSION["user"])) {
   header("Location: log.php");
   exit(); // Make sure to exit after sending the header to prevent further execution
}

require_once "database.php"; // Assuming database.php includes your database connection

// Function to create the "users" table if it doesn't exist
function createTableIfNotExists($con) {
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(255) NOT NULL,
        last_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    )";

    // Execute the query
    mysqli_query($con, $sql);
}

createTableIfNotExists($con); // Call the function

if (isset($_POST["submit"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();

    if (empty($first_name) OR empty($last_name) OR empty($email) OR empty($password)) {
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if (strlen($password) < 5) {
        array_push($errors, "Password must be at least 5 characters long");
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount > 0) {
        array_push($errors, "Email already exists!");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($con);
        $prepareStmt = mysqli_stmt_prepare($stmt, $sql);

        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $first_name, $last_name, $email, $passwordHash);
            mysqli_stmt_execute($stmt);

            // Redirect to index.html on successful registration
            header("Location: log.php");
            exit(); // Make sure to exit after sending the header to prevent further execution
        } else {
            die("Something went wrong");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up page</title>
    <link rel="stylesheet" href="../css/sign.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container2">
        <div class="image-container">
            <img src="../assets/images/vector2.png" alt="Welcome Image">
            <div class="text-overlay">Providing Animal Health Solution</div>
        </div>
    </div>

    <div class="container">
        <?php
        // Output any previous registration errors
        if (isset($errors) && count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
        }
        ?>
        <div class="title">Create Account</div>
        <form action="log.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">First name</span>
                    <input type="text" name="first_name">
                </div>
                <div class="input-box">
                    <span class="details">Last name</span>
                    <input type="text" name="last_name">
                </div>
            </div>
            <div class="user-details2">
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password">
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Create Account">
            </div>
            <div class="register-link">
                <p>Already have an account?<a href="../sign/login.html">Login</a></p>
            </div>
            <div class="line"></div>
        </form>
    </div>
</body>

</html>
