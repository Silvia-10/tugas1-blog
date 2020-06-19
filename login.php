<center><h2>SELAMAT DATANG DI CETAK FOTO</h2></center>
<?php
include("koneksi.php");
session_start();

if(isset($_SESSION['tb_user'])){
	header('Location: index.php');
}else{

$error = '';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $koneksi->prepare('SELECT * FROM tb_user WHERE user_name = :user_name and user_password = :user_password');
$admin->execute(array(
                  ':user_name' => $_POST['username'],
                  'user_password' => $_POST['password']
                  ));
$row = $admin->fetch(PDO::FETCH_ASSOC);
 
if(empty($row['user_name'])){

echo "<script>alert('password anda salah')</script>";

}else {

$_SESSION['login_user'] = $_POST['user_name'];

header("location: index.php");
}
}
}
?>


<link rel="stylesheet" type="text/css" href="assets/css/login.css">


	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
<form action="" method="post">
<label>Username :</label>
<input class="form_login" type="text" name="username"/><br />
<label>Password :</label>
<input class="form_login" type="password" name="password"/><br/>
<input type="submit" value="LOGIN" class="tombol_login" /><br />
<br/>
			<br/>
			<center>
				<a class="link" href="https://www.malasngoding.com">KEMBALI</a>
			</center>
</form>
</div>
