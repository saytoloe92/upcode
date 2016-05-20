<?php 
class tintuc
{
function addca()
{
	if(isset($_POST['ok']))
	{
		$catergory = $_POST['catergory'];
		require_once PATH.'/models/modeltintuc.php';
		$result = new tintucMd;
		$result -> addca($catergory);
		if(isset($result))
		{
			$message = "Them thanh cong";
		}
		else
		{
			$message = "Them that bai";
		}
	}
	require_once PATH.'/views/viewaddca.php';
}
function test()
{
	require_once PATH.'/models/modeltintuc.php';
	$result = new tintucMd;
		print_r($result -> test());
}
function addtintuc()
{
	require_once PATH.'/models/modeltintuc.php';
	$result = new tintucMd;
	if(isset($_POST['oki']))
	{	
		$title = $_POST['title'];
		$content = $_POST['content'];
		$categoryid = $_POST['select'];
		$result -> addtintuc($title,$content,$categoryid);
		if(isset($result))
		{
			$message = "Thêm thành công<a href='http://localhost/abc/index.php?h=tintuc'>Trang Tin</a>";
			//echo $result;
		}
		else
		{
			$message = "Thêm thất bại";
		}
	}
	
	$data = $result->selectca();
	require_once PATH.'/views/viewaddtintuc.php';
}
function allnews()
 {
 	require_once PATH.'/models/modeltintuc.php';
 	$result = new tintucMd;
 	$data = $result->alltintuc();
 	require_once PATH.'/views/viewalltintuc.php';
 }

 function edittintuc()
 {
 	require_once PATH.'/models/modeltintuc.php';
 	$id = $_GET['id'];
 	$result = new tintucMd;

 	if(isset($_POST['oki']))
 	{
 		$title = $_POST['title'];
		$content = $_POST['content'];
		$categoryid = $_POST['select'];
		$result -> edittintuc($title,$content,$categoryid,$id);
		$message = TRUE;
 	}
 	
 	$data = $result->viewtintuc($id);
 	$select = $result->selectca();
 	require_once PATH.'/views/viewedittintuc.php';
 }

function deletetintuc()
 {	
 	require_once PATH.'/models/modeltintuc.php';
 	$id = $_GET['id'];
 	$result = new tintucMd;
 	$result->xoatintuc($id);
 	header('location:index.php?h=tintuc&action=allnews');
 } 
 function allcategory()
 {
 	require_once PATH.'/models/modeltintuc.php';
 	$result = new tintucMd;
 	$data = $result->allca();
 	require_once PATH.'/views/viewallca.php';
 }
 function deletecategory()
 {	
 	require_once PATH.'/models/modeltintuc.php';
 	$cateid = $_GET['id'];
 	$result = new tintucMd;
 	
 	$result->deletecate($cateid);
 	header('location:index.php?h=tintuc&action=allcategory');
 }
 function editcategory()
 {
 	require_once PATH.'/models/modeltintuc.php';
 	$cateid = $_GET['id'];
 	$result = new tintucMd;
 	if(isset($_POST['ok']))
 	{
 		$catename = $_POST['namecate'];
 		$result->editca($catename,$cateid);
 		//$message = TRUE;
 	}
 	$data = $result->viewca($cateid);
 	require_once PATH.'/views/vieweditcategory.php';
 }
function destroy()
	{
	if(isset($_SESSION['username']))
	{
	session_destroy();
	header('location:http://localhost/abc/index.php');
	}
	require_once PATH.'/views/vieweditcategory.php';
	}
}
 