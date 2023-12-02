<!-- animal_rearers_registration.php -->
<?php
// Check if the form is submitted
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

    // Process Animal Rearers Form
    if (
        isset($_POST['farmer_name']) && isset($_POST['location']) && isset($_POST['description'])
        && isset($_POST['image_url']) && isset($_POST['amount_needed'])  && isset($_POST['contact'])
    ) {
        $farmer_name = $conn->real_escape_string($_POST['farmer_name']);
        $location = $conn->real_escape_string($_POST['location']);
        $description = $conn->real_escape_string($_POST['description']);
        $image_url = $conn->real_escape_string($_POST['image_url']);
       
        $amount_needed = $conn->real_escape_string($_POST['amount_needed']);
        $contact = $conn->real_escape_string($_POST['contact']);


        // Insert data into the farmers table
        $sql = "INSERT INTO farmers (farmer_name, location, description, image_url, amount_needed, contact) 
                VALUES ('$farmer_name', '$location', '$description', '$image_url', '$amount_needed', '$contact')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful. You will be contacted soon.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../css/layout_styles.css">
    <link rel="stylesheet" href="../css/finance.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/73320f1c27.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Animal Rearers Financial Aid Registration</title>
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
                    <i class="fas fa-book fa-lg menu-icons "></i>
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
    
        <h2>Apply For Loan</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <label for="farmer_name">Farmer Name:</label>
            <input type="text" id="farmer_name" name="farmer_name" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="image_url">Image URL:</label>
            <input type="text" id="image_url" name="image_url" required>

            <label for="amount_needed">Amount Needed(naira):</label>
            <input type="text" id="amount_needed" name="amount_needed" required>

            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>

            

            <button type="submit">Submit</button>
        </form>
        </div>
    </div>
    </div>
</body>

</html>
