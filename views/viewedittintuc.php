<!DOCTYPE html>
<html>
<head>
	<title>THÊM TIN TỨC</title>
	<meta charset="utf-8">
</head>
<body>
<?php if(isset($message)) echo "Sua thanh cong tin tuc"; ?>
<table align="center" border="0.5" bgcolor="00EE00" width="600px" height="600px">
<form action="" method="post">
	<tr align="center">
		<td colspan="2">Sua Tin Tức</td>
	</tr>
	<tr>
	<td >TITLE</td>
	<td>
		<select name="select">
		<?php foreach ($select as $row): ?>
			<option value="<?php echo $row['cateid']?>" <?php if ($row['cateid'] == $data['caid']) echo 'selected = "selected"'?> ><?php echo $row['catename']?></option>
		<?php endforeach; ?>
		</select>
	</td>
	</td>
	<td><input type="text" name="title" autofocus="autofocus" size="30" value="<?php echo $data['title']?>"></td>
	</tr>
	<tr>
	<td >CONTENT</td>
	<td><textarea name="content"><?php echo $data['content']?></textarea></td>
	</tr>
	<tr align="center">
	<td colspan="2"><input type="submit" name="oki" value="Sua"></td>
	</tr>
</form>
</table>
</body>
</html>