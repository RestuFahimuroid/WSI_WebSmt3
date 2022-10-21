<?php 
	require ('koneksi.php');
	if (isset($_POST['register'])) {
		$userMail = $_POST['txt_email'];
		$userPass = $_POST['txt_pass'];
		$userName = $_POST['txt_nama'];

		$query = "INSERT INTO user_detail VALUES ('', '$userMail', '$userPass', '$userName', 2)";
		$result = mysqli_query($koneksi, $query);
		header('Location : login.php');
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Halaman Register</title>
 </head>
 <body>
 	<form action="register.php" method="POST">
 		<p>
 			Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" required>
 		</p>
 		<p>
 			Password : <input type="password" name="txt_pass" required>
 		</p>
 		<p>
 			Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama" required>
 		</p>
 		<button type="submit" name="register">Register</button>	
 	</form>
 	<p>
 		<a href="login.php">Login</a>
 	</p>
 </body>
 </html>