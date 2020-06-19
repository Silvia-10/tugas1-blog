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
		$stmt2->bindParam(":text", $_POST['text']);
		$stmt2->bindParam(":photo_id", $id);
		$stmt2->execute();

		header("location:photo.php");
	}

	 ?>


<h2>Edit Data Photo</h2>

<form action="" method="POST">
	<table>
		<tr>
			<td>ID PHOTO</td>
			<td> <input type="text" name="iid" value=" <?php echo $result['photo_id'] ?>"> </td>
		</tr>
		<tr>
			<td>ID POST</td>
			<td><input type="varchar" name="idpost" value=" <?php echo $result['post_id'] ?>"></td>
		</tr>
		<tr>
			<td>DATE</td>
			<td><input type="date" name="idate" value=" <?php echo $result['date'] ?>"></td>
		</tr>
		<tr>
			<td>TITLE</td>
			<td><input type="text" name="ititle" value=" <?php echo $result['title'] ?>"></td>
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
