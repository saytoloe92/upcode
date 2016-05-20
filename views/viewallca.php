<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<meta charset="utf-8">
</head>
<body>
<table border="1" width="100%">
  <tr>
  	<th>categoryname</th>
    <th>SỬA</th>
    <th>XÓA</th>
  </tr>
 <?php foreach($data as $row): ?>
  <tr>
    <td><?php echo $row['catename'] ?></td>
    <td><a href="index.php?h=tintuc&action=editcategory&id=<?php echo $row['cateid']?>">SỬA</a></td>
    <td><a href="index.php?h=tintuc&action=deletecategory&id=<?php echo $row['cateid']?>">XÓA</a></td>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>
