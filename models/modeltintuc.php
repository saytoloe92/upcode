<?php
require_once PATH.'/models/connect.php';
class tintucMd extends connect
{
	function addca($category)
	{
		$select = "INSERT INTO category(catename) VALUES ('$category')";
		$query = mysqli_query($this->con,$select);
		return $query;
	}
	function addtintuc($title,$content,$categoryid)
	{
		$sql = "INSERT INTO tintuc(title,content,caid) VALUES ('$title','$content','$categoryid')";
		$query = mysqli_query($this->con,$sql);
		return $query;
	}
	function selectca()
	{
		$sql = "SELECT * FROM category";
		$query = mysqli_query($this->con,$sql);
		return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	function alltintuc()
	{
		$sql = "SELECT * FROM category as c JOIN  tintuc as t ON t.caid = c.cateid";
		$query = mysqli_query($this->con,$sql);
		return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	function viewtintuc($id)
	{
		$sql = "SELECT * FROM category as c JOIN  tintuc as t ON t.caid = c.cateid WHERE id ='$id'";
		$query = mysqli_query($this->con,$sql);
		return  mysqli_fetch_assoc($query);
	}

	function edittintuc($title,$content,$categoryid, $id)
	{
		$sql = "UPDATE tintuc SET title = '$title', content = '$content', caid = '$categoryid' WHERE id='$id'";
		mysqli_query($this->con, $sql);
	}
	function xoatintuc($id)
	{
		$sql = "DELETE FROM tintuc WHERE id='$id'";
		mysqli_query($this->con,$sql);
	}
	function allca()
	{
		$sql = "SELECT * FROM category";
		$query = mysqli_query($this->con,$sql);
		return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	function editca($catename,$cateid)
	{
		$sql = "UPDATE category SET catename = '$catename' WHERE cateid='$cateid'";
		$query = mysqli_query($this->con, $sql);
		return mysqli_fetch_assoc($query);
	}
	function viewca($cateid)
	{
		$sql = "SELECT * FROM category  WHERE cateid ='$cateid'";
		$query = mysqli_query($this->con,$sql);
		return  mysqli_fetch_assoc($query);
	}
		function deletecate($cateid)
	{
		$sql = "DELETE FROM category,tintuc WHERE cateid ='$cateid'";
		mysqli_query($this->con,$sql);
	}
} 
 ?>