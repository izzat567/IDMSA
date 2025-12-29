<?php
	include("../../connection/config.php");
	session_start();

	if (isset($_POST['submit'])) {
		$nama_penggunaPost = $_POST['nama_pengguna'];
		$find_user_sql = mysqli_query($connect,"SELECT * FROM admin WHERE nama_pengguna = '$nama_penggunaPost'");
		$find_user = mysqli_fetch_array($find_user_sql);
		$nama_pengguna = $find_user['nama_pengguna'];

		if($nama_penggunaPost == $nama_pengguna){
			$password = $find_user['password'];
			$passwordPost = $_POST ['password'];

			if($passwordPost == $password){
				$_SESSION['isLoggedin'] = 2;
				header("location:../m_bungkus.php");
				
			}
			else {
				$_SESSION['error'] = "Password Pengguna Tidak Sepadan";
				header("location:../login.php");
				echo "run";
				
			}
		}
		else {
				$_SESSION['error'] = "Nama Pengguna Tidak Dapat Dijumpai";
				header("location:../login.php");
				

			}
	}else {
		header("location:../login.php");
	}
?>
