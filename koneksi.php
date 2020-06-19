<?php 

$dbhost = "localhost";
$dbname = "dbsiphoto";
$dbuser = "root";
$dbpass = "";

$koneksi = new PDO ("mysql:host=" . $dbhost . ";
							dbname=" . $dbname ."",
							$dbuser, $dbpass);
 ?>
