<!DOCTYPE html>
<html>
<head>
	<title>PHOTO</title>
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

$sql = "SELECT * FROM tb_photo";

$stmt = $koneksi->prepare($sql);
$stmt->execute();

 ?>

<br>
<h2>Tampil Photo</h2>
<br>
<table>
	<tr>
		
           <tr><th>ID</th>
           <th>ID PHOTO</th>
           <th>ID POST</th>
           <th>DATE</th>
           <th>TITLE</th>
           <th>TEXT</th>
           <th>AKSI</th>
		
        
		<td></td>
	</tr>
	<?php while ($row = $stmt->fetch()) { ?>
	<tr>
		        
                <td><?php echo $row['photo_id']; ?></td>
                <td><?php echo $row['post_id']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['text']; ?></td>
                <td class="aksa">
			<a href="photo_edit.php?id=<?php echo $row['photo_id']; ?>">Edit</a>
			<a href="photo_hapus.php?id=<?php echo $row['photo_id']; ?>">Hapus</a>
			<a href="photo_input.php?id=<?php echo $row['photo_id']; ?>">Tambah</a>
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
