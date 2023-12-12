<?php
include("../Functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<style>
        .guard {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #ffc857;
        /* background-color: #ffc857; */
        line-height: 0.1em;
        margin: 10px 0 20px;
        font-family: serif;
    }

    .guard span {
        background-color: white;
        padding: 0 10px;
    }
    .myfooter {
        background-color: #22651D;

        color: white;
        margin-top: 15px;
    }

    .aligncenter {
        text-align: center;
    }

    a {
        color: white;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        background-color: #22651D;
    }

    .navbar-custom {
        background-color: #22651D;
    }

    /* change the brand and text color */
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
        background-color: #22651D;
    }

    .navbar-custom .navbar-nav .nav-link {
        background-color: #22651D;
    }

    .navbar-custom .nav-item.active .nav-link,
    .navbar-custom .nav-item:hover .nav-link {
        background-color: #22651D;
    }


    .mybtn {
        border-color: green;
        border-style: solid;
    }


    .right {
        display: flex;
    }

    .left {
        display: none;
    }

    .cart {
        /* margin-left:10px; */
        margin-right: -9px;
    }

    .profile {
        margin-right: 2px;

    }

    .login {
        margin-right: -2px;
        margin-top: 12px;
        display: none;
    }

    .searchbox {
        width: 60%;
    }

    .lists {
        display: inline-block;
    }

    .moblists {
        display: none;
    }

    .logins {
        text-align: center;
        margin-right: -30%;
        margin-left: 35%;
    }
.card{
 width: 14rem;

}
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
            display: none;
        }

        .firstimage {
            height: auto;
            width: 90%;
        }
*/
        .card {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom:10%;

        }

       /* .col {
            margin-top: 20px;
        } */

        .right {
            display: none;
            background-color: #ff5500;
        }

        /* 
            .settings{
            margin-left:79%;
        } */
        .left {
            display: flex;
        }

        .moblogo {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: 35%;
            padding: 15px;
        }

        .searchbox {
            width: 95%;
            margin-right: 5%;
            margin-left: 0%;
        }

        .moblists {
            display: inline-block;
            text-align: center;
            width: 100%;
               }

        /* .pic{
        height:auto;
    } */

        /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */

    }
</style>

<body>




<nav class="navbar navbar-expand-xl ">

        <div class=" flex-row-reverse left ">

            <div class="p-2">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                    <span id="icon" style="color:white;"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
            <a class="float-left" href="../../index.html">
                <img src="../../assets/AgroAllies-White-Small.svg" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
            </a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
        </button>
        <a class="float-left" href="../../index.html">
            <img src="../../assets/AgroAllies-White-Small.svg" class="float-left mr-2 moblogo" alt="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="input-group mb-1 ml-2 searchbox">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                </div>
                <form action="SearchResult.php" method="get" enctype="multipart/form-data">
                    <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for produce " style="width:300px;">
                </form>
            </div>
             <span id="getuser" style="color:white;"> 
                <?php
                getUsername();
                ?> 
            </span>
            <div class="list-group moblists">

                <?php
                if (isset($_SESSION['phonenumber'])) {
                    echo "<a href='BuyerProfile.php' class='list-group-item list-group-item-action' style='background-color:#22651D;text-align:center;color:white'>Profile</a>";
                    echo "<a href= 'Transaction.php' class='list-group-item list-group-item-action' style='background-color:#22651D;text-align:center;color:white'>Transactions</a>";
                    echo "<a href='saveforlater.php' class='list-group-item list-group-item-action' style='background-color:#22651D;text-align:center;color:white'>Save For Later</a>";
                    echo "<a href='#' class='list-group-item list-group-item-action' style='background-color:#22651D;text-align:center;color:white'>Subscriptions</a>";
                    echo "<a href='farmer.php' class='list-group-item list-group-item-action' style='background-color:#22651D;text-align:center;color:white'>Farmers</a>";
                    echo "<a href='../Includes/logout.php' class='list-group-item list-group-item-action ' style='background-color:#22651D;text-align:center;color:white'>Logout</a>";
                } else {
                    echo "<a href='../auth/BuyerLogin.php' class='list-group-item list-group-item-action ' style='background-color:#22651D;text-align:center;color:white'>Login</a>";
                }
                ?>

            </div>
        </div>




        <div class=" flex-row-reverse right ">
            <div class="p-2 cart">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white">&#61562;</i></a>
                    <span id="icon" style="color:white;"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="dropdown p-2 settings ">
                <button class="btn  dropdown-toggle text-success" type="button" style="color:white;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                        echo "<a href='BuyerProfile2.php' class='dropdown-item  ' style='padding-right:-20px;'>Profile</a>";
                        echo "<a href='Transaction.php' class='dropdown-item ' style='padding-right:-20px;'>Transactions</a>";
                        
                        
                        echo "<a href='farmers.php' class='dropdown-item' style='padding-right:-20px;' >Farmers</a>";
                        echo "<a href='../Includes/logout.php' class='dropdown-item ' style='padding-right:-20px;'>Logout</a>";
                    } else {
                        echo "<a href='../auth/BuyerLogin.php' class='dropdown-item ' style='padding-right:-20px;'>Login</a>";
                    }
                    ?>
                </div>
            </div>


            <div class="text-success  login">Login</div>
        </div>

    </nav>
    <div class="text-center container">
            <br>

            <b>
                <h1 class="guard text-center"style="  font-family: 'Times New Roman', Times, serif;"><span><b>Farmers</b></span>
                </h1>
            </b>
        </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ">
                <div class="card border-dark border" >
                    <div class="card-body ">
                        <h5 class="card-title text-center"><img src="iconbig3.png" style=" margin-bottom:  10px;"></h5>
                        <h4 class="card-subtitle mb-2  text-center">Akinwole</h4>
                        <p class="card-text text-center">Mushin, Lagos<br><br>
                            <button type="button" class="btn  border-dark border" style="background-color:#22651D;color:white">View Profile </button>
                        </p>
                        <!-- <a href="#" class="card-link text-center">Card link</a>
                      <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ">
                <div class="card border-dark border" >
                    <div class="card-body ">
                        <h5 class="card-title text-center"><img src="iconbig.png" style=" margin-bottom:  10px;"></h5>
                        <h4 class="card-subtitle mb-2  text-center">Mosope</h4>
                        <p class="card-text text-center">Abeokuta, Ogun<br><br>
                            <button type="button" class="btn  border-dark border" style="background-color:#22651D;color:white">View Profile </button>
                        </p>
                        <!-- <a href="#" class="card-link text-center">Card link</a>
                      <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ">
                <div class="card border-dark border" >
                    <div class="card-body ">
                        <h5 class="card-title text-center"><img src="iconbig2.png" style=" margin-bottom:  10px;"></h5>
                        <h4 class="card-subtitle mb-2  text-center">Akinlade Otopiapia</h4>
                        <p class="card-text text-center">Somewhere in Lagos<br><br>
                            <button type="button" class="btn  border-dark border" style="background-color:#22651D;color:white">View Profile </button>
                        </p>
                        <!-- <a href="#" class="card-link text-center">Card link</a>
                      <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ">
                <div class="card border-dark border" >
                    <div class="card-body ">
                        <h5 class="card-title text-center"><img src="iconbig4.png" style=" margin-bottom:  10px;"></h5>
                        <h4 class="card-subtitle mb-2  text-center">Uchenna</h4>
                        <p class="card-text text-center">Someplace in Plateau<br><br>
                            <button type="button" class="btn  border-dark border" style="background-color:#22651D;color:white">View Profile </button>
                        </p>
                        <!-- <a href="#" class="card-link text-center">Card link</a>
                      <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                </div>
            </div>

        </div>


    </div>















    <section id="footer" class="myfooter" style="margin-top:20px;">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col aligncenter">
                    <p>Payment Options</p>
                    <img src="../Images/Website/verve1.jpg" alt="verve" style="height:37px">
                    <img src="../Images/Website/cod.jpg" alt="verve" style="height:37px">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                               <p><u><a href="../../index.html">AgroAllies Corporation</a></u> is a company built for Animal Husbandry farmers and their customers</p>
                               <p class="h6"> All rights Reversed.<a class="text-green ml-2" href="../../index.html" target="_blank">AgroAllies</a></p>
                          </div>
                          </hr>
                     </div>
        </div>
</body>

</html>