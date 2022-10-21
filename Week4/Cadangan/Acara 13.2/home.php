<?php 
require ("koneksi.php");
error_reporting(0);
$email = $_GET['user_fullname'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Home</title>
</head>
<body>
	<h1>Selamat Datang <?php echo $email;?></h1>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Email</td>
			<td>Nama</td>
			<td></td>	
		</tr>
		<?php 
			$query = "SELECT * FROM user_detail";
			$result = mysqli_query($koneksi, $query);
			$no = 1;
			while ($row = mysqli_fetch_array($result)) {
				$userMail = $row['user_email'];
				$userName = $row['user_fullname'];
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $userMail; ?></td>
			<td><?php echo $userName; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
				<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php
		$no++;
		} ?>
	</table>
</body>
</html>