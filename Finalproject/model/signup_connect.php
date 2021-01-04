<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	$psw_repeat = $_POST['psw_repeat'];
	$number = $_POST['number'];
	$conn = new mysqli('localhost','root','','rest');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signup(firstname, lastname, email, psw, psw_repeat, number) 
			values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstname, $lastname, $email, $psw, $psw_repeat, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>