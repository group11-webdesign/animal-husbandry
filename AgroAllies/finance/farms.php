<!-- farms_list.php -->
<?php
// Database connection details
$server = "sql11.freemysqlhosting.net";
$database = "sql11666984";
$username = "sql11666984";
$password = "ZJeX9tpVXc";


// Create a connection

$con = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Retrieve farms data from the database
$sql = "SELECT * FROM farmers";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../css/layout_styles.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/73320f1c27.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Farms List</title>
    <style>
        .color{
            background-color:transparent;
        }
        
        .farm-item {
            max-width: 600px;
            margin: 10px auto;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: white;
           
        }

        .farm-item img {
            width: 100%;
            height: 30%; 
            object-fit: cover; 
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .farm-item-content {
            padding: 15px;
        }

        .farm-item h3 {
            margin-bottom: 10px;
        }

        .farm-item p {
            margin-bottom: 5px;
        }

        .farm-item a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #22651d;
            font-weight: bold;
        
        }
    </style>
</head>

<body>
        <!-- Your content goes here -->
    <div class="container-fluid no-padding">

    <div class="menu nav flex-column">
        <div class="header">
            <div class="logo">
                <img src="../assets/AgroAllies.svg" alt="AgroAllies Logo">
            </div>
            
        </div>

        <div class="menu-items">
            <ul class="nav-pills custom-pills nav-fill justify-content-end">
                <li class="nav-item menu-names">
                    <a class="nav-link" aria-current="page" href="../index.html">
                        <i class="fas fa-home fa-lg menu-icons"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item menu-names">
                    <a class="nav-link" aria-current="page" href="../general/general.html">
                        <i class="fas fa-info-circle fa-lg menu-icons"></i>
                        General Info
                    </a>
                </li>
                <li class="nav-item menu-names">
                    <a class="nav-link" aria-current="page" href="../weather/index.php">
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
                <li class="nav-item menu-names">
                    <a class="nav-link" href="../encyclopedia/index.php" >
                        <i class="fas fa-book fa-lg menu-icons"></i>
                        Animal Diseases
                    </a>
                </li>
                <li class="nav-item menu-names">
                    <a class="nav-link" href="../encyclopedia/outbreaks.html" >
                        <i class="fas fa-book fa-lg menu-icons"></i>
                        Recent Outbreaks
                    </a>
                </li>
                <li class="nav-item menu-names">
                    <a class="nav-link" aria-current="page" href="../market/index.html">
                        <i class="fas fa-person-booth fa-lg menu-icons"></i>
                        Farmer's Market
                    </a>
                </li>
                <li class="nav-item menu-names">
                    <a class="nav-link" aria-current="page" href="../mkyfd/myof.html">
                        <i class="fas fa-seedling fa-lg menu-icons"></i>
                        Make Your Own Feed
                    </a>
                </li>
                <li class="nav-item menu-names">
                    <a class="nav-link" aria-current="page" href="../sign/log.php">
                        <i class="fas fa-sign-out-alt fa-lg menu-icons"></i>
                        Logout
                    </a>
                </li>
            </ul>
            
        </div>

    </div>

    <div class="content">
    
        <div class="main">
            <div class="color">
                <h2>List of Farms</h2>

                <?php
            
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='farm-item'>";
                        if (!empty($row['image_url'])) {
                            echo "<img src='" . $row['image_url'] . "' alt='Farm Picture'>";
                        }
                        echo "<div class='farm-item-content'>";
                        echo "<h3>" . $row['farmer_name'] . "</h3>";
                        echo "<p>" . $row['description'] . "</p>";
                        echo "<p>Contact: " . $row['contact'] . "</p>";
                        echo "<p>Location: " . $row['location'] . "</p>";
                        echo "<p>Amount Needed: ₦" . $row['amount_needed'] . "</p>";

                        echo "<a href='choose.php?id=" . $row['id'] . "'>Choose this farm</a>";
                        echo "</div>"; 
                        echo "</div>"; 
                    }
                } else {
                    echo "No farms available.";
                }


                $con->close();
                ?>
            </div>

        </div>

    </div>

    </div>

    </div>
</body>

</html>

