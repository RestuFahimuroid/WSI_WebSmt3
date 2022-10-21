<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['user_email'])) {
	header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['user_email'];
	$password = $_POST['user_password'];

	$sql = "SELECT * FROM user_detail WHERE user_email='$email' AND user_password='$password'";
	$result = mysqli_query($conn, $sql);
	// echo  "<script>alert('Selamat Datang. $result->num_rows')</script>";
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_email'] = $row['user_email'];
		header("Location: welcome.php");
		echo "<script>alert('Selamat Datang. ')</script>";
	} else {
		echo "<script>alert('Email / Password Salah. ')</script>";
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

	<title>Login Form</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="user_email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="user_password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>

</html>