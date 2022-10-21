<?php 
	require ('koneksi.php');
	session_start();
	if (isset($_POST['submit'])) {
		$email = $_POST['txt_email'];
		$pass = $_POST['txt_pass'];
		if (!empty(trim($email)) && !empty(trim($pass))) {
			$query = "SELECT * FROM user_detail WHERE user_email = '$email'";
			$result = mysqli_query($koneksi, $query);
			$num = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result);
		}
		while ($row = mysqli_fetch_array($result)) {
			$id = $row['id'];
			$userVal = $row['user_email'];
			$passVal = $row['user_password'];
			$userName = $row['user_fullname'];
			$level = $row['level'];
		}
		if ($num != 0) {
			if ($userVal==$email && $passVal==$pass) {
				header('Location:home.php');
			}else{
				$error = 'User atau Password Salah';
				header('Location:login.php');
			}
		}else{
			$error = 'User Tidak Ditemukan';
			header('Location:login.php');
		}
	}else{
		$error = 'Data Tidak Boleh Kosong';
		echo $error;
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Halaman Login</title>
 </head>
 <body>
 	<form action="home.php" method="POST">
 		<p>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email"></p>
 		<p>Password : <input type="password" name="txt_pass"></p>
 		<button type="submit" name="submit">Sign In</button>
 	</form>
 	<p>
 		Don't Have Account ? <a href="register.php">Click Here</a>
 	</p>
 </body>
 </html>