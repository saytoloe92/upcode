<!DOCTYPE html>
<html>
<head>
	<title>XEM TIN TỨC</title>
	<meta charset="utf-8">
</head>
<body>
<table border="1px" width="1200">
<tr width="1150">
	<td width="50">ID</td>
	<td width="150">CATERGORY</td>
	<td width="300">TITLE</td>
	<td width="500">CONTENT</td>
	<td width="50">SỬA</td>
	<td width="50">XÓA</td>
</tr>
<?php foreach ($data as $value): ?>
	<tr>
		<td width="50"><?php echo $value['id'];?></td>
		<td width="150"><?php echo $value['catename'];?></td>
		<td width="300"><?php echo $value['title'];?></td>
		<td width="500"><?php echo $value['content'];?></td>
		<td width="50"><a href="index.php?h=tintuc&action=edittintuc&id=<?php echo $value['id']?>">SỬA</a></td>
		<td width="50"><a href="index.php?h=tintuc&action=deletetintuc&id=<?php echo $value['id']?>">XÓA</a></td>
	<tr>
<?php endforeach ?>

</table>
</body>
</html>
<div><a href="index.php?h=tintuc&action=addtintuc">Thêm tin tức</a></div>
<div><a href="index.php?h=tintuc&action=addca">Thêm Category</a></div>
<div><a href="index.php?h=tintuc&action=allcategory">Category</a></div>
<div><a href="index.php?h=tintuc&action=destroy">ĐĂNG XUẤT</a></div>





