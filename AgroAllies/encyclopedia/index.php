<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Diseases</title>

     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="../css/layout_styles.css">
    <link rel="stylesheet" href="../css/encyclopedia.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/73320f1c27.js" crossorigin="anonymous"></script>

    <script>
       function showResult(query) {
    var resultContainer = document.querySelector('.result');
    resultContainer.innerHTML = '';
    
    if (query.trim() !== '') {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    
                    try {
                        const response = JSON.parse(this.responseText);

                        if (response.length === 0) {
                            resultContainer.innerHTML = '<h4 class="dlist">No Such Disease Found</h4>';
                        
                        } else {
                            response.forEach(function (result) {
                                resultContainer.innerHTML += '<p class="dlist">' + result.name + ' '+  result.info; ' </p>';
                            });
                        }
                    } catch (error) {
                        console.error('Error parsing JSON: ' + error.message);
                    }
                } else {
                    console.error('HTTP error: ' + this.status);
                }
            }
        };

        xmlhttp.open('GET', 'search.php?q='+ query, true);
        xmlhttp.send();
    }
}

      </script>
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
                        <a class="nav-link active" href="../encyclopedia/index.php" >
                            <i class="fas fa-book fa-lg menu-icons active"></i>
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

                <p class="heading1">Encyclopedia</p>
  
                <ul class="nav nav-underline mb-4">
                    <li class="nav-item">  
                      <a class="nav-link active" aria-current="page" href="../encyclopedia/diseases.html">Animal Diseases</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../encyclopedia/outbreaks.php">Recent Outbreaks</a>
                    </li>
                </ul>

                <form class="d-flex search-bar" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search Animal Diseases" aria-label="Search" onkeyup="showResult(this.value)">
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <div class="result">

    </div>
            </div>
           
        </div>

      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html> 