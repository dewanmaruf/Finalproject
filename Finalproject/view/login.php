<!DOCTYPE html>
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
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<center>
<body>

  <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>
   <div>
    <h1>Login Here</h1>
   <br />
   <form action = "/Finalproject/controller/action_login.php" method = "POST">
      <div>
         <label for="username"><b>Username</b></label>
         <input type="text" name="username"/>
      </div>
      <br /><br />
      <div>
         <label for="psw"><b>Password</b></label>
         <input type="password" name="psw"/>
      </div>
      <br /><br />
      <div>
         <button type="button" onClick="document.location.href='/Finalproject'">Cancel</button>
         <button type="button" onClick="document.location.href='/Finalproject/view/signup.php'">Sign Up</button>
         <input type="submit" value=" Submit"/>
      </div>
   </form>

    <div>
    <?php include 'footer.php' ?>
  </div>
</body>
<center>
</html>