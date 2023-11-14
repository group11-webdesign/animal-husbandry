

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="../css/layout_styles.css">
    <link rel="stylesheet" href="../css/vet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/73320f1c27.js" crossorigin="anonymous"></script>
    

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
                        <a class="nav-link" href="../finance/finance.html">
                            <i class="far fa-money-bill-alt fa-lg menu-icons"></i>
                            Financial Services
                        </a>
                    </li>
                    <li class="nav-item menu-names">
                        <a class="nav-link active" href="../veterinary/veterinary.html">
                            <i class="fas fa-clinic-medical fa-lg menu-icons active"></i>
                            Veterinary Services
                        </a>
                    </li>
                    <li class="nav-item dropdown menu-names">
                        <a class="nav-link dropdown-toggle" href="../encyclopedia/diseases.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-book fa-lg menu-icons"></i>
                            Encyclopedia
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="../encyclopedia/diseases.html">Animal Diseases</a></li>
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
                    <li class="nav-item menu-names">
                        <a class="nav-link" aria-current="page" href="">
                            <i class="fas fa-hands-helping fa-lg menu-icons"></i>
                            Volunteer Program
                        </a>
                    </li>
                  </ul>
                
            </div>

        </div>

        <div class="content">
            <div class="main">
                <h1>Veterinary</h1>

          
    <form class="d-flex search-bar" role="search">
        <input class="form-control me-2" type="search" placeholder="Search by Name" aria-label="Search" onkeyup="showSearchResults(this.value)">
        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
    </form>

    <div class="result">

    </div>

    <script>
    function showSearchResults(query) {
        const resultContainer = document.querySelector('.result');
        resultContainer.innerHTML = ''; 
       
        const vetsSection = document.getElementById('vets');
    const searchSection = document.getElementById('res');
    searchSection.innerHTML = '';
        if (query.trim() !== '') {
            document.getElementById('head').innerText = "Search Results";
            var xmlhttp = new XMLHttpRequest();
            vetsSection.style.display = 'none'; 
        searchSection.style.display = 'block';
           ;
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    const response = JSON.parse(this.responseText);
    
                 if(response == ''){
                    searchSection.innerHTML = '<h4> No Vets Found</h4>';
                    
                 }

                    response.forEach(result => {
const resultBox = document.createElement('div');
resultBox.classList.add('card', 'mb-3', 'vet-card-card');
resultBox.style.maxWidth = '400px';

const rowDiv = document.createElement('div');
rowDiv.classList.add('row', 'g-0');
resultBox.appendChild(rowDiv);

const colImgDiv = document.createElement('div');
colImgDiv.classList.add('col-md-4');
rowDiv.appendChild(colImgDiv);

const imgElement = document.createElement('img');
imgElement.src = '...'; 
imgElement.classList.add('img-fluid', 'rounded-start');
imgElement.alt = '...'; 
colImgDiv.appendChild(imgElement);

const colBodyDiv = document.createElement('div');
colBodyDiv.classList.add('col-md-8');
rowDiv.appendChild(colBodyDiv);

const cardBodyDiv = document.createElement('div');
cardBodyDiv.classList.add('card-body');
colBodyDiv.appendChild(cardBodyDiv);

const cardTitle = document.createElement('h5');
cardTitle.classList.add('card-title');
cardTitle.textContent = result.vetname;
cardBodyDiv.appendChild(cardTitle);

const cardText = document.createElement('p');
cardText.classList.add('card-text');
cardText.innerHTML = `
    Open by ${result.vetopen}<br>
    Closes by ${result.vetclose}<br>
    ${result.vetadd}
`;
cardBodyDiv.appendChild(cardText);

const lastUpdatedText = document.createElement('p');
lastUpdatedText.classList.add('card-text');
lastUpdatedText.innerHTML = `<small class="text-body-secondary">Last updated 3 mins ago</small>`;
cardBodyDiv.appendChild(lastUpdatedText);

const visitLink = document.createElement('a');
visitLink.href = '#'; 
visitLink.classList.add('btn', 'btn-primary', 'btstyle');
visitLink.textContent = 'Visit';
cardBodyDiv.appendChild(visitLink);


searchSection.appendChild(resultBox);

                        cardsec
                    });
                }
            };

            xmlhttp.open("GET", "search.php?q=" + query, true);
            xmlhttp.send();
        } else {

            document.getElementById('head').innerText = "Vets Near You";
            vetsSection.style.display = 'block'; 
            
        }
    }
</script>

                
                <div class="section">
                    <h3 id = "head" >Vets Near You</h3>
                    <div class="vet-cards" id = "res"></div>
                    <div class="vet-cards" id = "vets">
                    <?php

$connection = mysqli_connect("localhost", "root", "", "agroallies");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$query = "SELECT * FROM `vets`";
$result = mysqli_query($connection, $query);


if (!$result) {
    die("Query failed: " . mysqli_error($connection));
    
}



while ($row = mysqli_fetch_assoc($result)) {
    echo "
    <div class=\"card mb-3 vet-card-card\" style=\"max-width: 400px;\">
        <div class=\"row g-0\">
        <div class=\"col-md-4\">
            <img src=\"...\" class=\"img-fluid rounded-start\" alt=\"...\">
        </div>
        <div class=\"col-md-8\">
            <div class=\"card-body\">
            <h5 class=\"card-title\">" . $row["vetname"] . "</h5>
            <p class=\"card-text\">
                Open by " . $row["vetopen"] . "<br>
                Closes by " . $row["vetclose"] . "<br>
                " . $row["vetadd"] . "
            </p>
            <p class=\"card-text\"><small class=\"text-body-secondary\">Last updated 3 mins ago</small></p>
            <a href=\"\" class=\"btn btn-primary btstyle\">Visit</a>
            </div>
        </div>
        </div>
    </div>";
}



mysqli_close($connection);
?>

                       
                    </div>
                </div>
            </div>
            
           
        </div>

      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>