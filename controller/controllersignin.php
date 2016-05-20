<?php 
//session_start();
Class signin
{
	function signin()
	{
		if (isset($_POST['oki']))
		{
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
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
		if($username =='' && $password=='')
		{
			$error = TRUE;
			$showerror[] = "Bạn phải điền tên đăng nhập và mật khẩu";
		}
		if(!isset($error))
		{
			require_once PATH .'/models/signinmodel.php';
			$model = new signinmodel;
			$result = $model->getInfologin($username);
			if ($username == $result['username'] && $password==$result['password'])
			{	
				$_SESSION['username'] = $result['username'];
				//$message =  "Đăng nhập thành công!";//<a href='index.php'>Đăng xuất</a>";
				header('location:index.php');
			}
			else
			{
				$message =  "Đăng nhập thất bại!Please try again";
			}
		}
		else
		{
			print_r($showerror);
		} 	
	}
		require_once PATH . '/views/viewsignin.php';
	}
}

//$active = new signin;
//$active->getsignin();

 ?>