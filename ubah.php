<?php 
	require 'koneksi.php';
	session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }

	$id = $_GET["id"];

	$ubah = query("SELECT * FROM blog WHERE id = $id")[0];


	if (isset($_POST["submit"])) {
		if (ubah ($_POST) > 0){
			echo "data berhasil diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else{
			echo "data gagal diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
			echo " bray";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit articel</title>
</head>
<body>
	<br><br><!-- 
	<?php $waktu = date_default_timezone_set('Asia/Jakarta');  ?> -->

 	<form method="POST" action="">
 		<input type="hidden" name="id" value="<?= $ubah["id"]?>">
 		<br>
 		Judul	: 
		<input type="text" name="judul" placeholder="Judul" value="<?= $ubah["judul"]?>">
		<br>
		<br>
		Isi	:
		<input name="isi"  value="<?= $ubah["isi"]?>">
		<br><br>
		<input type="submit" name="submit"">
 	</form>
</body>
</html>