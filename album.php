<!DOCTYPE html>
<html>
<head>
	<title>ALBUM</title>
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
	
	<?php 

include "koneksi.php";


$sql = "SELECT * FROM tb_album";

$stmt = $koneksi->prepare($sql);
$stmt->execute();

 ?>

<br>
<h2>Tampil Album</h2>
<br>
<table>
	<tr>
		
           <tr><th>ID</th>
           <th>NAMA</th>
           <th>PHOTO</th>
           <th>TEXT</th>
           <th>AKSI</th>
		
        
		<td></td>
	</tr>
	<?php while ($row = $stmt->fetch()) { ?>
	<tr>
		        
		        <td><?php echo $row['album_id']; ?></td>
                <td><?php echo $row['album_name']; ?></td>
                <td><?php echo $row['text']; ?></td>
                <td><?php echo $row['photo_id']; ?></td>
                <td class="aksa">
			<a href="album_edit.php?id=<?php echo $row['album_id']; ?>">Edit</a>
			<a href="album_hapus.php?id=<?php echo $row['album_id']; ?>">Hapus</a>
			<a href="album_input.php?id=<?php echo $row['album_id']; ?>">Tambah</a>
		<td></td>
	</tr>
	<?php } ?>
</table>
	<br>
	</div>

	<!-- ini untuk footer -->
	<div class="footer">

		<?php  include "footer.php"; ?>
	
	</div>

</div>

</body>
</html>
