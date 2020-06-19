<!DOCTYPE html>
<html>
<head>
	<title>CETAK FOTO ONLINE</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

<div>
	
	<!-- ini untuk header -->
	<div class="header">

		<?php  include "header.php"; ?>
	
	</div>

	<!-- ini untuk menu -->
	<div class="menu">

		<?php  include "menu.php"; ?>
	
	</div>
<!--  -->

	<!-- ini untuk utama -->
	<div class="utama">
	
	<?php 

	include "koneksi.php";

	$id = $_GET['id'];

	$sql =" SELECT * FROM tb_photo WHERE photo_id = :photo_id";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":photo_id", $id);
	$stmt->execute();

	$result = $stmt->fetch();

	if (isset($_POST['tsimpan']))
	{
		$sql2 = "UPDATE tb_photo SET post_id = :post_id, title = :title WHERE photo_id=:photo_id";
		$stmt2 = $koneksi->prepare($sql2);
		$stmt2->bindParam(":post_id", $_POST['post_id']);
		$stmt2->bindParam(":date", $_POST['date']);
		$stmt2->bindParam(":title", $_POST['title']);
		$stmt2->bindParam(":photo_id", $id);
		$stmt2->execute();

		header("location:photo.php");
	}

	

$id = $_GET['id'];

$sql = "DELETE FROM tb_photo WHERE photo_id = :photo_id";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":photo_id", $id);
$stmt->execute();


    header("location: photo.php");
    

   ?>  
