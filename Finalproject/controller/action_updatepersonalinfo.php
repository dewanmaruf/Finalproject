<?php
     $name = '';
     $nameErr = $nameOk = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        }
        
        else{
            $name=$_POST["name"];
            $user = fopen("../data/updatepersonalinfo.txt", "w") or die("Unable to open file!");
            fwrite($user, $name);
            fwrite($user, "\n");
            fclose($user);
            
        }
    }
     $mobile = '';
     $mobileErr = $mobileOk = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["mobile"])) {
            $mobileErr = "A Mobile Number is required";
        }
        elseif (strlen($_POST['mobile'])!=11) {
            $mobileErr = "Mobile number must have 11 digits";
        }
        else{
            $mobile=$_POST["mobile"];
            $user = fopen("../data/mobileNumber.txt", "w") or die("Unable to open file!");
            fwrite($user, $mobile);
            fwrite($user, "\n");
            fclose($user);
            $mobileOk = "Update Successful";
        }
    }
?>