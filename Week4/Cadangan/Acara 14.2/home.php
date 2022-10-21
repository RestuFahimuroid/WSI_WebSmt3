<?php
require("koneksi.php");
require("query.php");
error_reporting(0);
$email = $_GET['user_fullname'];
$obj = new crud;
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Home</title>
</head>

<body>
	<h1>Selamat Datang <?php echo $email; ?></h1>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Email</td>
			<td>Nama</td>
			<td></td>
		</tr>
		<?php
		$data = $obj->lihatData();
		$no = 1;
		if ($data->rowCount() > 0) {
			while ($row = $data->fetch(PDO::FETCH_ASSOC)) {

		?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $row['user_email']; ?></td>
					<td><?php echo $row['user_fullname']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
						<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
					</td>
				</tr>
		<?php
				$no++;
			}
		} ?>
	</table>
</body>

</html>