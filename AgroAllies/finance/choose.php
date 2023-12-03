
<?php

if (isset($_GET['id'])) {
    $farm_id = $_GET['id'];

   


} else {

    header("Location: farms.php");
    exit();
}
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/finance.css">
    <title>Choose Farm</title>
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
                    <a class="nav-link" href="../encyclopedia/outbreaks.php" >
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
                    <a class="nav-link" aria-current="page" href="#">
                        <i class="fas fa-sign-out-alt fa-lg menu-icons"></i>
                        Logout
                    </a>
                </li>
              </ul>
            
        </div>
    


</div>

<div class="content">
            <div class="main">
    <h2>You have chosen to help this farm. You will be contacted later.</h2>
    <div class="buttons">
            <button><a href= "../finance/farms.php">Go back</a></button>
    </div>
    </div>
    </div>
</body>

</html>
