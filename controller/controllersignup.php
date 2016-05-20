<?php 
//require_once PATH.'/views/viewsignin.php';
class signup
{
	function signup()
	{
	if(isset($_POST['ok']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		if($username =='')
		{
			$error = TRUE;
			$showerror[]= "Bạn phải điền tên đăng nhập";
		}
		if($password=='')
		{
			$error = TRUE;
			$showerror[] = "Bạn phải điền mật khẩu";
		}
		if($email =='')
		{
			$error = TRUE;
			$showerror[]= "Bạn phải điền email";
		}
		if(strlen($username)>20)
		{
			$error = TRUE;
			$showerror[] = "Username nhập quá dài, phải ít hơn 20 ký tự";
		}
		if(strlen($password)>32)
		{
			$error = TRUE;
			$showerror[] = "Password nhập quá dài";
		}
		if($username =='' && $password=='' && $email =='')
		{
			$error = TRUE;
			$showerror[] = "Bạn phải điền tên đăng nhập và mật khẩu, email";
		}
		if(!isset($error))
		{
			require_once PATH.'/models/signupmodel.php';
			$signupmodel = new signupmodel;
			$result= $signupmodel->setsignup($username,$password,$email);
			if($result)
			{
				$message = "Đăng ký thành công!";
				
			}
			else
			{
				$message =  "Tên đăng nhập đã tồn tại, Mời bạn đăng ký lại!";
			}

		}
		else
		{
			print_r($showerror);
		}
	}
	require_once PATH.'/views/viewsignup.php';
}
}
//$active = new signup;
//$active->setsignup();
 ?>