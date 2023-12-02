<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../css/layout_styles.css">
    <link rel="stylesheet" href="../css/finance.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/73320f1c27.js" crossorigin="anonymous"></script>
    <title>Financial Givers Form</title>
</head>

<body>
<div class="container-fluid no-padding">

<div class="menu nav flex-column">
    <div class="header">
        <div class="logo">
            <img src="../assets/AgroAllies.svg" alt="AgroAllies Logo">
        </div>
        <a class="btn hidemenu-btn" href="#" role="button">
            <img class="hidemenu-icon" src="../assets/buttons/hidemenu button.svg" alt="Hidemenu Button">
        </a>
    </div>

    <div class="menu-items">
        <ul class="nav-pills custom-pills nav-fill justify-content-end">
            <li class="nav-item menu-names">
                <a class="nav-link" aria-current="page" href="">
                    <i class="fas fa-info-circle fa-lg menu-icons"></i>
                    General Info
                </a>
            </li>
            <li class="nav-item menu-names">
                <a class="nav-link" aria-current="page" href="../weather/weather.html">
                    <i class="fas fa-cloud fa-lg menu-icons"></i>
                    Weather
                </a>
            </li>
            <li class="nav-item menu-names">
                <a class="nav-link active" href="../finance/finance.html">
                    <i class="far fa-money-bill-alt fa-lg menu-icons active"></i>
                    Financial Services
                </a>
            </li>
            <li class="nav-item menu-names">
                <a class="nav-link" href="../veterinary/index.php">
                    <i class="fas fa-clinic-medical fa-lg menu-icons"></i>
                    Veterinary Services
                </a>
            </li>
            <li class="nav-item dropdown menu-names">
                <a class="nav-link dropdown-toggle" href="../encyclopedia/index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-book fa-lg menu-icons"></i>
                    Encyclopedia
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../encyclopedia/index.php">Animal Diseases</a></li>
                  <li><a class="dropdown-item" href="../encyclopedia/outbreaks.html">Recent Outbreaks</a></li>
                </ul>
              </li>
              <li class="nav-item menu-names">
                <a class="nav-link" aria-current="page" href="">
                    <i class="fas fa-person-booth fa-lg menu-icons"></i>
                    Farmer's Market
                </a>
            </li>
            <li class="nav-item menu-names">
                <a class="nav-link" aria-current="page" href="">
                    <i class="fas fa-seedling fa-lg menu-icons"></i>
                    Make Your Own Feed
                </a>
            </li>
          </ul>
        
    </div>
    


</div>

<div class="content">
            <div class="main">
    
        <h2>Financial Givers Registration</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database connection details
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "login";

            // Create a connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Process Financial Givers Form
            if (
                isset($_POST['name']) && isset($_POST['business']) && isset($_POST['amount'])
                && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['address'])
            ) {
                $name = $conn->real_escape_string($_POST['name']);
                $business = $conn->real_escape_string($_POST['business']);
                $amount = $conn->real_escape_string($_POST['amount']);
                $email = $conn->real_escape_string($_POST['email']);
                $phone = $conn->real_escape_string($_POST['phone']);
                $address = $conn->real_escape_string($_POST['address']);

                // Insert data into the givers table
                $sql = "INSERT INTO givers (name, business, amount, email, phone, address) 
                        VALUES ('$name', '$business', '$amount', '$email', '$phone', '$address')";
// Inside the financial_givers_form.html PHP block after successful registration
if ($conn->query($sql) === TRUE) {
    echo "Registration successful. You will be contacted soon.";

    // Redirect to the farms list page
    header("Location: farms.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

            // Close the database connection
            $conn->close();
        }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <!-- Add your registration form fields here -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="business">Business name:</label>
            <input type="text" id="business" name="business" required>

            <label for="amount">Amount willing to loan(naira):</label>
            <input type="text" id="amount" name="amount" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>

    </div>
    </div>
    </div>
    </div>
</body>

</html>
