<?php
$apiKey = "a3b7478ac01db13f733110a193ce50fc";
$cityId = "2327546";
$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>

     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="../css/layout_styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/73320f1c27.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Inter', serif;
            font-size: 1.5 em;
            color: black;
        }

        h3, h2 {
            font-family: 'Montserrat', serif;
            font-weight: bold;
            padding-bottom: 10px;
        }
        
        .report-container {
            border: #E0E0E0 1px solid;
            padding: 20px 40px 40px 40px;
            border-radius: 2px;
            width: 700px;
            margin: 0 auto;
        }
        
        .weather-icon {
            vertical-align: middle;
            margin-right: 20px;
        }
        
        .weather-forecast {
            color: #212121;
            font-size: 2em;
            font-weight: bold;
            margin: 20px 0px;
        }
        
        span.min-temperature {
            margin-left: 15px;
            color: #929292;
        }
        
        .time {
            line-height: 25px;
        }
        </style>

</head>

<body>
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
                        <a class="nav-link active" aria-current="page" href="../weather/index.php">
                            <i class="fas fa-cloud fa-lg menu-icons active"></i>
                            Weather
                        </a>
                    </li>
                    <li class="nav-item menu-names">
                        <a class="nav-link" href="../finance/finance.html">
                            <i class="far fa-money-bill-alt fa-lg menu-icons"></i>
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
                        <a class="nav-link" aria-current="page" href="#">
                            <i class="fas fa-sign-out-alt fa-lg menu-icons"></i>
                            Logout
                        </a>
                    </li>
                  </ul>
                
            </div>

        </div>

       <div class="content">

            <div class="report-container">
                <h2><?php echo $data->name; ?> Weather Status</h2>
                <div class="time">
                    <div><?php echo date("l g:i a", $currentTime); ?></div>
                    <div><?php echo date("jS F, Y",$currentTime); ?></div>
                    <div><?php echo ucwords($data->weather[0]->description); ?></div>
                </div>
                <div class="weather-forecast">
                    <img
                        src="https://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                        class="weather-icon" /> <?php echo $data->main->temp_max; ?>°C<span
                        class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>
                </div>
                <div class="time">
                    <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                    <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
                </div>
                <!-- Advice Section -->
                <div class="advice">
                    <br><br><br><br>
                    <h3>Today's Advice:</h3>
                    <?php
                    // Temperature ranges for different animals
                    $cattleTempRange = range(4, 27);
                    $poultryTempRange = range(18, 24);
                    $swineTempRange = range(15, 21);

                    // Humidity levels
                    $highHumidityThreshold = 80;

                    // Wind speed ranges
                    $highWindSpeedThreshold = 40;

                    if ($data->main->temp_max >= min($cattleTempRange) && $data->main->temp_max <= max($cattleTempRange)) {
                        echo "Cattle prefer temperatures between 4°C to 27°C. Ensure they have shade.". "<br>";
                    } elseif ($data->main->temp_max >= min($poultryTempRange) && $data->main->temp_max <= max($poultryTempRange)) {
                        echo "Optimal temperature for poultry is around 18°C to 24°C. It's a good day for them to graze.". "<br>";
                    } elseif ($data->main->temp_max >= min($swineTempRange) && $data->main->temp_max <= max($swineTempRange)) {
                        echo "Swine prefer temperatures between 15°C to 21°C". "<br>";
                    }

                    if ($data->main->humidity > $highHumidityThreshold) {
                        echo "High humidity levels. Ensure proper ventilation to avoid heat stress.". "<br>";
                    }

                    if ($data->wind->speed > $highWindSpeedThreshold) {
                        echo "High wind speed. Provide shelters or windbreaks for animals.". "<br>";
                    }

                    if ($data->main->temp_max > 30 && $data->wind->speed < 20) {
                        echo "It is a Hot Day, keep your animals cool under a shade.". "<br>";
                    } elseif ($data->main->temp_max < 20 || $data->wind->speed > 30) {
                        echo "A cool day with strong wind. Do not let your animals roam about too late.". "<br>";
                    }  elseif ($data->main->temp_max > 20 && $data->main->temp_max < 30) {
                        echo "Perfect Temperature. Have some fun with your animals!". "<br>";
                    }
                    ?>
                </div>
            </div>

        </div>


      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>