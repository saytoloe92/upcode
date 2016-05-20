<?php 
//session_start();
class destroy
{
	function destroy()
	{
	if(isset($_SESSION['username']))
	{
	session_destroy();
	header('location:http://localhost/abc/index.php);
	}
	}
}
 

