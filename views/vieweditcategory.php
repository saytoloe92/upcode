<!DOCTYPE html>
<html>
<head>
	<title>THÊM LOẠI TIN TỨC</title>
	<meta charset="utf-8">
</head>
<body>
<?php if(isset($message)) echo $message; ?>
<table align="center" border="0.5" bgcolor="00EE00" width="600px" height="600px">
<form action="" method="post">
	<tr align="center">
		<td colspan="2">Trang sửa Catergory</td>
	</tr>
	<tr>
	<td>CATERGORY</td>
	<td><input name="namecate" value="<?php echo $data['catename'];?>"></td>
	</tr>
	<tr align="center">
	<td colspan="2"><input type="submit" name="ok" value="SỬA"></td>
	</tr>
</form>
</table>
</body>
</html>
<a href="index.php?h=tintuc&action=allcategory">Trang Category</a>