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

	$sql =" SELECT * FROM tb_category WHERE category_id = :category_id";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":category_id", $id);
	$stmt->execute();

	$result = $stmt->fetch();

	if (isset($_POST['tsimpan']))
	{
		
		$sql2 = "UPDATE tb_category SET nama = :nama WHERE category_id=:category_id";
		$stmt2 = $koneksi->prepare($sql2);
		$stmt2->bindParam(":nama", $_POST['nama']);
		$stmt2->bindParam(":text", $_POST['text']);
		$stmt2->bindParam(":category_id", $id);
		$stmt2->execute();

		header("location:category.php");
	}

	

$id = $_GET['id'];

$sql = "DELETE FROM tb_category WHERE category_id = :category_id";

$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":category_id", $id);
$stmt->execute();


    header("location: category.php");
    

   ?>  
