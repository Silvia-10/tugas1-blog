<!DOCTYPE html>
<html>
<head>
	<title>CATEGORY</title>
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

$sql = "SELECT * FROM tb_category";

$stmt = $koneksi->prepare($sql);
$stmt->execute();

 ?>

<br>
<h2>Tampil Category</h2>
<br>
<table>
	<tr>
		
           <tr><th>ID</th>
           <th>NAMA</th>
           <th>TEXT</th>
           <th>AKSI</th>
		
        
		<td></td>
	</tr>
	<?php while ($row = $stmt->fetch()) { ?>
	<tr>
		        
		        <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['text']; ?></td>
                <td class="aksa">
			<a href="category_edit.php?id=<?php echo $row['category_id']; ?>">Edit</a>
			<a href="category_hapus.php?id=<?php echo $row['category_id']; ?>">Hapus</a>
			<a href="category_input.php?id=<?php echo $row['category_id']; ?>">Tambah</a>
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
