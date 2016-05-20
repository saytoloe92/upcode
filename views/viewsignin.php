
<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG NHẬP</title>
	<meta charset="utf-8">
</head>
<body>
<?php if(isset($message)) echo $message; ?>
<?php if(isset($showerror))
{
foreach($showerror as $value) {
	echo $value;
}
}
?>
<table align="center" border="0.5" bgcolor="00EE00" width="400px">
<form action="" method="post">
	<tr align="center">
		<td colspan="2">Trang Đăng Nhập</td>
	</tr>
	<tr>
	<td >USERNAME</td>
	<td><input type="text" name="username" autofocus="autofocus" size="30"></td>
	</tr>
	<tr>
	<td >PASSWORD</td>
	<td><input type="password" name="password" autofocus="autofocus" size="30"></td>
	</tr>
	<tr align="center">
	<td colspan="2"><input type="submit" name="oki" value="ĐĂNG NHẬP"></td>
	</tr>
</form>
</table>
<p>Nếu chưa có tai khoản,Đăng ký tại đây<a href='http://localhost/abc/index.php?h=signup'>ĐĂNG KÝ</a></p>
</body>
</html>