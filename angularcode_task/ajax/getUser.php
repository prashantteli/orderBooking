<?php 
session_start();

require_once '../includes/db.php'; // The mysql database connection script
if(isset($_GET['email']) && isset($_GET['password']) && isset($_GET['role'])){
$email = $_GET['email'];
$password = md5($_GET['password']);
$role = $_GET['role'];

}
$query="select email,password,role from user_details where email='$email' and role='$role' and password='$password'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	echo $json_response =$result->num_rows;
	while($row = $result->fetch_assoc()) {
		$_SESSION['user_details'] = $row;	
	}
}

# JSON-encode the response
//echo $json_response = json_encode($arr);
?>