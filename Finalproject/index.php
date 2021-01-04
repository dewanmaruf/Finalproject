<!DOCTYPE html>
<?php
$cookie_name = "anonymoususer1";
$cookie_value = "demo";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
$myfile = fopen("data/cookies.txt", "w") or die("Unable to open file!");
fwrite($myfile, $cookie_name . " " . $cookie_value . " ");
fclose($myfile);
?>

<html>
<head>
  <style>
body {
  background-image: url('nature.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: cover;
}
</style>
  <title>Welcome To Roots of Bangladesh</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<center>
<body>
  <div style="display:inline-block;">
    <?php include 'view/header.php' ?>
  </div>
  </br>
  </br>
  <div style="display:inline-block;">
    <nav>
      <a href="view/signup.php">Sign Up</a> |
      <a href="view/login.php">Login</a>
    </nav>
  </div>
  

  <div>
    <?php include 'view/footer.php' ?>
  </div>
</body>
</center>
</html>
