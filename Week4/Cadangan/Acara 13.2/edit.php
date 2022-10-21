 <?php 
include "koneksi.php";
$id = $_GET['id'];
$sqli = mysqli_query($koneksi,"SELECT * FROM user_detail WHERE id='$id'");
$row = mysqli_fetch_array($sqli);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Halaman Edit</title>
 </head>
 <body>
 	<form method="POST">
 		<p><input type="hidden" name="txt_id" value="<?php echo $id; ?>"></p>
 		<p>
 			Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" value="<?=$row['user_email']?>" readonly>
 		</p>
 		<p>
 			Password : <input type="password" name="txt_pass" value="<?=$row['user_password']?>">
 		</p>
 		<p>
 			Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_nama" value="<?=$row['user_fullname']?>">
 		</p>
 		<button type="submit" name="update">Update</button>	
 	</form>
 	<p>
 		<a href="home.php">Back</a>
 	</p>
 </body>
 </html>
 <?php 
if(isset($_POST["update"])){

		$userId = $_POST['txt_id'];
	$userMail = $_POST['txt_email'];
		$userPass = $_POST['txt_pass'];
		$userName = $_POST['txt_nama'];

		$query = mysqli_query($koneksi, "UPDATE user_detail SET user_password='$userPass', user_fullname='$userName' WHERE id='$userId'");
    if ($query) {
        header("location:home.php");
    }
}
  ?>