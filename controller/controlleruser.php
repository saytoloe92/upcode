<?php 
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
class logout
{
	function logout()
	{
		if(isset($_SESSION['username']))
		{
		session_destroy();
		header('location:http://localhost/abc/index.php?login');
		}
	}
}
 