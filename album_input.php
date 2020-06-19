<?php 

include "koneksi.php";

$sql3 = "SELECT * FROM tb_album";
$stmt3 = $koneksi->prepare($sql3);
$stmt3->execute();


if(isset($_POST['t_simpan']))
{
	

$sql = "INSERT INTO tb_album VALUES ('', :album_id, :album_name, :photo_id)";

 $stmt = $koneksi->prepare($sql);
 $stmt ->bindParam(":album_id", $_POST['album_id']);
 $stmt ->bindParam(":album_name", $_POST['album_name']);
 $stmt ->bindParam(":text", $_POST['text']);
 $stmt ->bindParam(":photo_id", $_POST['photo_id']);
      $stmt-> execute();

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
			<font color="#041c3d"> Input Album </font>
		</h2>
		<br>
		<form action="" method="POST" >
		<table>
		<tr>
			<td>ID ALBUM</td>
			<td> <input type="text" name="iid" ></td>
		</tr>
		<tr>
			<td>NAMA ALBUM</td>
			<td><input type="varchar" name="inama" ></td>
		</tr>
		<tr>
			<td>TEXT</td>
			<td><input type="varchar" name="itext" ></td>
		</tr>
		<tr>
			<td>ID PHOTO</td>
			<td><input type="text" name="iphoto" ></td>
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
