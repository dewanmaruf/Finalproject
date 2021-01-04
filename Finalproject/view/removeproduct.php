<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $id = $name = $age = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id= $_POST['id'];

      $myfile = fopen("data.txt", "r") or die("Unable to open file!");
          $counter=0;
          while ($line = fgets($myfile)) {
              $words = explode(",",$line);
              if($id==$words[0]){
                $row_number = $counter;
                break;
              }
              else{
                $counter++;
              }
          }
          fclose($myfile);

          $file_out = file("data.txt");
          unset($file_out[$row_number]);
          file_put_contents("data.txt", implode("", $file_out));


    }


     ?>

     <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       <label for="">Enter User Id To Remove </label>
       <br><br>
       <input type="text" name="id" value="<?php echo $id; ?>">
       <br><br>
       <input type="submit" name="Remove" value="Remove">
     </form>

  </body>
</html>

    
