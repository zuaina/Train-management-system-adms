<?php
require("../control/login.php");
if(isset($_SESSION['username'])){
    header("Location: homeee.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
  </head>

<body>
    <div class="loginBg">
    <div class="login-box">
        
        
        <br>
        <br>
  
  </head>
  <body>
    <h1>Login Page</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" name="submit" value="Login"><br>
        <!--<a  href="signup.php">Sign up</a>-->
        <?php if(isset($_GET['le'])){
                        echo $_GET['le'];
                    } ?>
        <p>
                Don't have an account? <a href="Registration.php">Register</a><br>
        </p>
    </form>
    </div>
    </div>
    
  </body>
</html>
