<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location:/AgroAllies/general/general.html");
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Sign In Page</title>
  <link rel="stylesheet" href="../css/style_log.css">
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
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: /AgroAllies/general/general.htmll");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <form action="/AgroAllies/general/general.html" method="post">
    <div class="title">Welcome Back</div>
    
      
      <div class="user-details2">
        <div class="input-box">
          <span class="details">Email</span>
          <input type="email" placeholder="Email" name="email">
         
        </div>

     
        <div class="input-box">
          <span class="details">Passsword</span>
          <input type="password" placeholder="Password" name="password" >
          
        </div>
      </div>

      <div class="button">
        <input type="submit" value="Login"  name="login" >
        
      
      </div>
      <div class="register-link">
      <p>Don't have an account?<a href="../sign/sign.php">SignUp</a></p>
      </div>

     
    </form>
  </div>
</body>

</html>
