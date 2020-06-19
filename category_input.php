<?php 

include "koneksi.php";

if (isset($_POST['tsimpan']))
{
	$id = $_POST['iid'];
	$nama = $_POST['inama'];
	$text = $_POST['itext'];
	
	

	$sql = "INSERT INTO tb_album VALUES ('', :category_id, :nama)";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":category_id", $id);
	$stmt->bindParam(":nama", $nama);
	$stmt->bindParam(":text", $text);
	$stmt->execute();
}

 ?>

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


	<!-- ini untuk utama -->
	<div class="utama">
	
	<br>
		<h2>
			<font color="#041c3d"> Input Category </font>
		</h2>
		<br>
		<form action="" method="POST" >
		<table>
		<tr>
			<td>ID CATEGORY</td>
			<td> <input type="text" name="iid" ></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input type="varchar" name="inama" ></td>
		</tr>
		<tr>
			<td>TEXT</td>
			<td><input type="text" name="itext" ></td>
		</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="tsimpan" value="Simpan"> <input type="reset" name="batal" value="Batal"> </td>
			</tr>
		</table>
		<br>
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
