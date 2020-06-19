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

	$sql =" SELECT * FROM tb_post WHERE post_id = :post_id";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":post_id", $id);
	$stmt->execute();

	$result = $stmt->fetch();

	if (isset($_POST['tsimpan']))
	{
		$sql2 = "UPDATE tb_post SET category_id = :category_id, slug = :slug, title = :title , cat_id = :cat_id WHERE post_id=:post_id";
		$stmt2 = $koneksi->prepare($sql2);
		$stmt2->bindParam(":category_id", $_POST['category_id']);
		$stmt2->bindParam(":slug", $_POST['slug']);
		$stmt2->bindParam(":title", $_POST['title']);
		$stmt2->bindParam(":text", $_POST['text']);
		$stmt2->bindParam(":cat_id", $_POST['cat_id']);
		$stmt2->bindParam(":post_id", $id);
		$stmt2->execute();

		header("location:post.php");
	}

	 ?>


<h2>Edit Data Post</h2>

<form action="" method="POST">
	<table>
		<tr>
			<td>ID POST</td>
			<td> <input type="text" name="iid" value=" <?php echo $result['post_id'] ?>"> </td>
		</tr>
		<tr>
			<td>ID CATEGORY</td>
			<td><input type="varchar" name="id" value=" <?php echo $result['category_id'] ?>"></td>
		</tr>
		<tr>
			<td>SLUG</td>
			<td><input type="text" name="islug" value=" <?php echo $result['slug'] ?>"></td>
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
			<td>ID CAT</td>
			<td><input type="text" name="idcat" value=" <?php echo $result['cat_id'] ?>"></td>
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
