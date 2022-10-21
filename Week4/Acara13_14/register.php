<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['user_fullname'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['user_fullname'];
	$email = $_POST['user_email'];
	$level = $_POST['level'];
	$password = $_POST['user_password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user_detail WHERE user_email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user_detail (user_fullname, user_email, user_password, level)
					VALUES ('$username', '$email', '$password', '$level')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Registrasi Berhasil Dilakukan.')</script>";
				$username = "";
				$email = "";
				$level = "";
				$_POST['user_password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Gagal Registrasi Periksa kembali data yang anda masukan.')</script>";
			}
		} else {
			echo "<script>alert('Data Telah Ada sebelumnya, buat data baru!!.')</script>";
		}
	} else {
		echo "<script>alert('Password Tidak Valid.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register Form - Pure Coding</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="user_fullname" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="user_email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="number" placeholder="User Level" name="Level" min="1" max="3" value="<?php echo $level; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Password" name="user_password" value="<?php echo $_POST['user_password']; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>

</html>