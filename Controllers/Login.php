<?php 

if(isset($_POST['submit']))
{
		$email = $_POST['inputEmailLogin'];
		$password = $_POST['inputPassword'];
		login($email, $password);
}
  function login($email, $password) {
	require('config.php');
	$sql = "SELECT name, email, password FROM users WHERE email = '$email'";

	if ($result = $conn->query($sql)) {

    /* free result set */
    var_dump($result->fetch_assoc());

    $result->close();
}

	$conn->close();
  }
?>