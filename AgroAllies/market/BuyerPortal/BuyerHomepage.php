 <?php
	include("../Functions/functions.php");
	?> 

<!DOCTYPE html>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>AgroAllies Homepage</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../portal_files/bootstrap.min.css">
	<script src="../portal_files/jquery.min.js.download"></script>
	<script src="../portal_files/popper.min.js.download"></script>
	<script src="../portal_files/bootstrap.min.js.download"></script>
	
	<style>
		
		* {
			margin: 0;
			box-sizing: border-box;
		}


		.header {
			position: sticky;
			z-index: 100;
			top: 0rem;
			height: 69px;
			width: 100%;
			background-color: #00b300;
		}

		.select_element {
			width: 20px;
			background-color: transparent;
			border: none;
			text: none;
		}


		#logo {
			height: 66px;
			width: 100px;
			text-align: left;
			float: left;
		}

		.search_input {
			clear: none;
			float: left;
			margin-left: 20px;
			margin-top: 20px;

		}

		.proicon {
			float: right;
			margin-right: 10px;
			margin-top: 20px;
		}

		#icon {
			background-color: red;
			color: white;
		}

		.dropdown {
			float: right;
			margin-right: 20px;
			margin-top: 20px;


		}

		.options {
			color: yellow;
			margin-left: 5px;
			margin-right: 26px;
		}

		.icon2 {
			float: right;
			margin-right: 10px;
			margin-top: 20px;


		}

		.filter {
			float: right;
			margin-right: 800px;
			margin-top: 15px;
			background-color: transparent;
			color: black;


		}

		.filterbutton {
			background-color: transparent;
			border: none;
			margin-top: 5px;
			color: white;
		}

		.loginz {
			float: right;
			margin-right: 20px;
			margin-top: 20px;
		}

		.headerdown {
			background-color: transparent;
			height: 50px;
			width: 100%;
		}

		#majic {
			height: 70px;
			width: 100%;
			visibility: hidden;


		}

		#states {
			float: left;
			width: 150px;
			margin-left: -800px;
			margin-top: 20px;
			padding: 10px;

			border-radius: 25%;
			border-color: #00b300;
		}

		#district {
			/* height: 200px; */
			border-radius: 25%;
			border-color: #00b300;
			margin-bottom: 20px;
			margin-top: 20px;
			padding: 10px;
			margin-left: -400px;
			/* margin-right: -400px; */
		}

		.makeitgreen {
			color: #00b300;
			width: 156px;

		}

		.sel1 {
			color: green;
			float: left;
			margin-top: 3px;
		}

		.sel2 {
			border-color: green;
			color: green;
			float: left;
			margin-left: 600px;
			margin-top: 3px;
		}

		.sel3 {
			font-size: 20px;
			margin-top: 3px;
			float: right;
			margin-right: 5px;
		}

		.slideshow {
			margin-top: 20px;
			margin-left: 100px;
			margin-bottom: 20px;
			float: left;
			border-style: solid;
			clear: both;
			/*background-color: black;*/
		}


		#input1 {
			width: 220px;
			border: none;

		}


		#input1:active {
			background-color: tomato;

		}

		#opt {
			height: 50px;
			width: 100%;
			background-color: red;
			padding-top: 0px;
			margin-top: 0px;
		}

		#bas {
			float: left;
			/*margin-top: 15px;*/
			background-color: #22651d;
			height: 50px;
		}



		#abc {
			float: right;
			/*margin-top: 15px;*/
			background-color: #22651d;
			height: 50px;
		}

		#cde {
			float: left;
			margin-left: 680px;
			/*margin-top: 15px;*/
			background-color: #22651d;
			height: 50px;
		}


		.carousel-indicators {
			list-style: none;
			background-color: transparent;
		}


		.carousel-control-prev {
			margin-left: 60px;
			/*color: red;*/
			margin-top: 10px;
		}

		.carousel-control-next {
			margin-right: 60px;
		}

		.wrapper {
			display: grid;
			grid-template-columns: 20% 20% 20% 20%;


			grid-column-gap: 20px;
			grid-row-gap: 10px;
			grid-column-gap: 20px;
			grid-row-gap: 10px;
			margin-left: 30px;

		}

		.inputwrapper {
			float: left;
			border-style: double;
			text-align: center;
			margin-left: 80px;
			width: 280px;
			margin-bottom: 20px;
			clear: auto;
		}


		.inputwrapper:last-child {
			margin-right: 30px;
			/*background-color: red;*/
		}

		.carousel-control-next {
			margin-right: 60px;
		}



		.addtocart {
			background-color: #22651d;
		}

		.numberinput {
			width: 35px;

		}

		.tabless {
			border-collapse: separate;
			border-spacing: 20px;
			padding: 20px;
			border-style: solid;
			margin: 10px;
			/*background-color: red;*/
			border-width: 5px;
			border-radius: 16px;
			border-color: black;
			text-align: center;
			align-items: center;
			min-width: 500px;
			margin-left: 100px;
		}


		.picha {
			height: 300px;
			width: 500px;
			background-color: red;
		}

		.images {
			transition: 0.5s;
		}

		.images:hover {
			width: 625px;
			height: 425px;
			box-shadow: 5px 5px 10px grey;
			transition: 0.5s;
		}

		.small_images:hover {
			height: 215px;
			width: 315px;
			box-shadow: 5px 5px 10px grey;
			transition: 0.5s;
		}

		#heading {
			font-size: 20px;
			color: white;
			text-align: center;
			background-color: black;
			justify-content: center;
		}



		.addtocart {
			background-color: #22651d;
		}

		.bestselers {
			background-color: red;
			border-style: solid;
			float: left;
			margin-top: 10px;
			/*margin: 20px;*/
			margin-bottom: 10px;
			margin-right: 40px;
			margin-left: 45px;
		}

		.bestselers:last-child {
			margin-right: 50px;
		}


		#fruits {
			text-align: center;
		}

		.veg {

			float: left;

			margin-left: 30px;
			border-style: solid;
			margin-top: 10px;
		}

		.veg img:hover {
			height: 270px;
			width: 350px;

		}

		#vegs {
			height: 270px;
			width: 1498px;
			/*margin: 20px;*/
			margin-right: 10px;
			margin-left: 10px;
			/*background-color: blue;*/
			margin-top: 20px;

		}

		.veg:first-child {
			margin-left: 80px;
		}

		.veg:last-child {
			margin-right: 20px;
		}

		#crops {
			height: 270px;
			width: 1498px;
			/*margin: 20px;*/
			margin-right: 10px;
			margin-left: 10px;
			/*background-color: blue;*/
			margin-top: 20px;

		}

		.crop:first-child {
			margin-left: 80px;
		}

		.crop:last-child {
			margin-right: 20px;
		}

		.crop {
			/*    height: 210px;
			width: 300px;
		*/
			float: left;
			/*  height: 200px;
			width: 300px;*/
			margin-left: 30px;
			border-style: solid;
			margin-top: 10px;
		}

		.crop img:hover {
			height: 270px;
			width: 350px;

		}

		.content_item {
			text-align: center;
			justify-content: center;

		}

		.etc {
			margin-left: -90px;
			min-width: 90px;
			font-size: 20px;

		}

		.crop_items {
			color: green;
		}

		.footer {
			height: 70px;
			width: 100%;
			/* background-color:red; */
			clear: both;

		}

		.payment {
			float: left;
			/* size:20% 50%;
		 */
			margin-left: 520px;
			font-size: 20px;
			margin-top: 25px;
		}

		.cash {
			float: left;
			margin-top: 0px;
			margin-left: 20px;
			margin-right: 20px;
		}

		.verve {
			float: left;
			/* margin-left:500px; */
		}

		h3 {
			width: 100%;
			text-align: center;
			border-bottom: 1px solid #000;
			line-height: 0.1em;
			margin: 10px 0 20px;
		}

		h3 span {
			background: #fff;
			padding: 0 10px;
		}

		.morefooter {
			height: 100px;
			width: 100%;
			background-color: white;

		}

		.call {
			float: left;
			font-size: 20px;
			margin-left: 150px;
			margin-top: 25px;
		}

		.gmail {
			margin-top: 10px;
			float: right;
			margin-right: 150px;

		}

		.instagram {
			margin-top: 10px;
			float: left;
			margin-left: 420px;
		}

		.instaid {
			height: 10px;
			width: 100%;

		}

		.text {
			float: left;
			margin-left: 735px;
			margin-top: -50px;
		}

		.gmailid {
			float: right;
			margin-right: 80px;
			margin-top: -60px;
		}

		.copy {
			float: left;
			margin-top: -65px;
			/* background-color:grey; */
		}

		.dric {
			margin-left: -50px;
		}

		#select1 {
			/* margin-left: -700px; */
			float: right;
			/* margin-right: -100px; */
			border-radius: 25%;
			border-color: #00b300;
			margin-bottom: 20px;
			margin-top: 20px;
			padding: 10px;
			margin-right: 400px;
			margin-left: -450px;
			/*	margin-right: -400px; */
		}

		.submit {
			float: right;
			/* margin-right: 20px; */
			margin-right: -70px;
			background-color: transparent;
			border-style: solid;
			border-width: 1px;
			border-radius: 25%;
			border-color: #00b300;
			margin-bottom: 20px;
			margin-top: 20px;
			padding: 10px;

		}
	</style>

</head>

<body>


	<div class="header">

		<a href="BuyerHomepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

		<div class="search_input">
			<form action="SearchResults.php" method="get" enctype="multipart/form-data">
				<i class="fas fa-search" style="font-size:20px;color:white; "></i>
				<input type="text" id="input1" name="search" placeholder="Search...">
			</form>
		</div>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="menu1" class="dric" data-toggle="dropdown" style="margin-top:-5px;"> </span></button>
			<ul class="dropdown-menu etc">
				<?php
				if (isset($_SESSION['phonenumber'])) {
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '#'><label class='makeitgreen'>Save For Later</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerTransactions.php'><label class='makeitgreen'>Transactions</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Subscription</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'Farmers.php'><label class='makeitgreen'>Farmers</label></a></li>";

					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../Includes/logout.php'><label class='makeitgreen'>Logout</label></a></li>";
				} else {
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
				}
				?>
		</div>
		<div class="proicon">
			<?php
			if (!isset($_SESSION['phonenumber'])) {
				echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
			} else {
				echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
			}
			?>
		</div>

		<div class="icon2">
			<a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
			<span id="icon"> <?php echo totalItems(); ?> </span>
		</div>

		<div class="loginz">
			<?php getUsername(); ?>
		</div>

		<div class="filter">
			<button class="filterbutton " onclick="display()">Filter
				<i class="fas fa-filter"></i></button>
		</div>
	</div>
	<div class="headerdown">
		<div id="show">
			<div class="sel1 sel">
				<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CROPS
					<span class="caret"></span></button>
				<ul class="dropdown-menu  ">
					<?php getCattle(); ?>
				</ul>
			</div>
			<div class="sel2 sel">
				<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">VEGETABLES </i>
					<span class="caret"></span></button>
				<ul class="dropdown-menu ">
					<?php getGoat(); ?>
				</ul>
			</div>
			<div class="sel3 sel">
				<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">FRUITS </i>
					<span class="caret"></span></button>
				<ul class="dropdown-menu ">
					<?php getChicken(); ?>
				</ul>
			</div>
		</div>
		</div>
	</div>


	<div class="slideshow" id="showing">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">

				<div class="carousel-item">
					<img class="images1" src="../portal_files/same1.jpg" height="500px" width="1300px" alt="...">
				</div>
				<div class="carousel-item active">
					<img class="images1" src="../Images/Website/organic.png" height="500px" width="1350px" alt="...">
				</div>
				<div class="carousel-item">
					<img class="images1" src="../portal_files/same3.jpg" height="500px" width="1350px" alt="...">
				</div>
			</div>
		</div>
	</div>

	<a class="carousel-control-prev" href="" role="button" data-slide="prev">

		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>

	<div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Fresh Fruit's</b></label></div>
	<table class="tabless">
		<tr>
			<th rowspan=2 colspan=2><a href="../BuyerPortal/BuyerProductDetails.php?id=31"><img class="images " src="../Admin/product_images/strawberry.jpg" width=600px height=400px></a></th>
			<td><a href="../BuyerPortal/BuyerProductDetails.php?id=17"><img class="small_images" src="../Admin/product_images/Bananas.jpg" height="200px" width="300px"></a></td>
			<td><a href="../BuyerPortal/BuyerProductDetails.php?id=24"><img class="small_images " src="../Admin/product_images/Apple.jpg" height="200px" width="300px"></a></td>
		</tr>
		<td><a href="../BuyerPortal/BuyerProductDetails.php?id=27"><img class="small_images " src="../Admin/product_images/Mango.jpg" height="200px" width="300px"></a></td>
		<td><a href="../BuyerPortal/BuyerProductDetails.php?id=32"><img class="small_images " src="../Admin/product_images/orange.jpg" height="200px" width="300px"></a></td>
		<tr>

		</tr>
	</table>


	</table><br>
	<div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Fresh Vegetable's</b></label></div>
	<div id="vegs">
		<?php getGoatHomepage(); ?>

	</div>


	<br>

	<div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Fresh Crop's</b></label></div>
	<div id="crops">
		<?php getCattleHomepage(); ?>
	</div>
	<hr><br>
	<div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Best Products </b></label></div><br>
	<hr>
	<div>

		<?php
		cart();
		getProducts();
		?>
	</div>


	<div class="footer">
		<hr>

		<label class="payment">Payment Optionss:-</label>
		<div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
		<div class="verve"><img src="../Images/Website/verve1.jpg" height="75px" width="125px"></div>
	</div><br><br>
	<h3><span> GET SOCIAL WITH US </span></h3>
	</div>

	<div class="morefooter">
		<div class="call">
			<i class="fas fa-phone-alt call_color"></i>
			<a href="#" style="color:black;">+2348191046421</a>
		</div>

		<div class="instagram"><img src="../Images/Website/Insta.jpg" height="45px" width="60px">
		</div>

		<div class="gmail">
			<img src="../Images/Website/gmail.jpg" height="30px" width="50px">
		</div>

	</div>
	<div class="instaid">
		<div class="text"><a href="#" style="color:black;">@AgroAllies</a></div>
		<div class="gmailid">
			<a href="#" class="hypher" style="color:black;">AgroAllies6@gmail.com</a></div>

	</div>


	<div class="copy">
		<h5 style="test-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2023 by www.AgroAllies.com</h5>
	</div>
</body>

</html>