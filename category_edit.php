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

	 ?>


<h2>Edit Category</h2>

<form action="" method="POST">
	<table>
		<tr>
			<td>ID CATEGORY</td>
			<td> <input type="text" name="iid" value=" <?php echo $result['category_id'] ?>"> </td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="varchar" name="inama" value=" <?php echo $result['nama'] ?>"></td>
		</tr>
		<tr>
			<td>TEXT</td>
			<td><input type="text" name="itext" value=" <?php echo $result['text'] ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tsimpan"></td>
		</tr>
	</table>
</form>
	<br>
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		<?php  include "footer.php"; ?>
	
	</div>

</div>

</body>
</html>
