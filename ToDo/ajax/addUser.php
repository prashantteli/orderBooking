<?php 
require_once '../includes/db.php'; // The mysql database connection script
if(isset($_GET['first_name']) && isset($_GET['last_name']) && isset($_GET['email']) && isset($_GET['password']) && isset($_GET['password'])){
		$firstName=$_GET['first_name'];
		$lastName=$_GET['last_name'];
		$email=$_GET['email'];
		$password=md5($_GET['password']);
		$role=$_GET['role'];

		$query="INSERT INTO user_details(first_name,last_name,email,password,role)  VALUES ('$firsName', '$lastName', '$email','$password','$role')";
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$result = $mysqli->affected_rows;
		echo $json_response = json_encode($result);
	}
?>