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

	$sql =" SELECT * FROM tb_album WHERE album_id = :album_id";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":album_id", $id);
	$stmt->execute();

	$result = $stmt->fetch();

	if (isset($_POST['tsimpan']))
	{
		$sql2 = "UPDATE tb_album SET album_name = :album_name, photo_id = :photo_id WHERE album_id=:album_id";
		$stmt2 = $koneksi->prepare($sql2);
		$stmt2->bindParam(":album_name", $_POST['album_name']);
		$stmt2->bindParam(":photo_id", $_POST['photo_id']);
		$stmt2->bindParam(":album_id", $id);
		$stmt2->execute();

		header("location:album.php");
	}

	

$id = $_GET['id'];

$sql = "DELETE FROM tb_album WHERE album_id = :album_id";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":album_id", $id);
$stmt->execute();


    header("location: album.php");
    

   ?>  
