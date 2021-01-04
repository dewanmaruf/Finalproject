<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<center>
<body>

<h1>Update Personal info</h1>
<div class="bodyBG">
<div class="container">
<div class="mainDiv1">
  <?php
  require('../controller/action_updatepersonalinfo.php');
  ?>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="mainDivForm">
          <label for="mobile" class="mainDivFormLabel">Enter New Mobile No:</label>
          <input type="text" name="mobile" id="mobile" placeholder="Enter New Mobile No" value="<?php echo $mobile ?>" class="mainDivFormInput">
          <br>
           <br>
           <label for="name" class="mainDivFormLabel">Enter New Name:</label>
           <input type="text" name="name" id="name" placeholder="Enter New Name" value="<?php echo $name ?>" class="mainDivFormInput">
           <br>
           <br>
           <label for="mobileErr" class="mainDivFormLabelError"><?php echo $mobileErr;?></label>
           <label for="mobileOk" class="mainDivFormLabelOk"><?php echo $mobileOk;?></label>
           <label for="nameErr" class="mainDivFormLabelError"><?php echo $nameErr;?></label>
           <label for="nameOk" class="mainDivFormLabelOk"><?php echo $nameOk;?></label>
           <br>
           <br>
           <input type="submit" value="Submit" name="submit" class="mainDivFormButton">
         </form>
     </div>
</main>
</div>
</div>
<a href="profile.php">profile</a>
</body>
</center>
</html>
    




















</body>
</html>