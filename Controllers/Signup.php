<?php 

if(isset($_POST['submit'])){
	$email = $_POST['inputEmailSignup'];
	$password = $_POST['inputPassword'];
	$password2 = $_POST['inputPassword2'];
	$name = $_POST['inputName'];
	check($name, $email, $password, $password2);
}


function signup($name, $email, $password){
	require('config.php');
	exit;
	$sql = "INSERT INTO users(name, email, password)
	VALUES ('$name', '$email', '$password')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}

function check($name, $email, $password, $password2){
	 if ($password !== $password2)
	 {
	    echo "Oops! Password did not match! Try again. ";
	 }
	 else {
	 	signup($name, $email, $password);
	 }
  }

  ?>