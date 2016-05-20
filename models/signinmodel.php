<?php 
require_once PATH.'/models/connect.php';
class signinmodel extends connect
{
		function getInfologin($username)
	{
		$select = "SELECT * FROM user WHERE username = '$username'";
		$result = mysqli_query( $this->con,$select);
		return mysqli_fetch_assoc($result);
	}
}
 ?>
		
