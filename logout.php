<link rel="stylesheet" type="text/css" href="assets/css/style.css">

		<div class="utama">
    	<div class="kepala">
			<?php include "header.php" ?>
		</div>
   
<?php
session_start();
session_destroy();

header("location: login.php");
?>
