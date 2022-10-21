<?php

include 'connection.php';

error_reporting(1);

session_start();

if (isset($_SESSION['user_fullname'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $fullname   = $firstname . $lastname;
    $email      = $_POST['user_email'];
    $level      = $_POST['level'];
    $password   = ($_POST['user_password']);
    $cpassword  = $_POST['cpassword'];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user_detail WHERE user_email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user_detail (user_fullname, user_email, user_password, level)
					VALUES ('$fullname', '$email', '$password', '$level')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Registrasi Berhasil Dilakukan. firstname $firstname lastname $lastname fullname $fullname')</script>";
                $fullname = "";
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
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="register.php">
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" name="firstname" type="text" placeholder="Enter your first name" value="<?php echo $firstname; ?>" required />
                                                    <label for="inputFirstName">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="inputLastName" name="lastname" type="text" placeholder="Enter your last name" value="<?php echo $lastname; ?>" required />
                                                    <label for="inputLastName">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="user_email" placeholder="name@example.com" value="<?php echo $email; ?>" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" type="password" name="user_password" placeholder="Create a password" value="<?php echo $_POST['user_password']; ?>" required />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm" type="password" name="cpassword" placeholder="Confirm password" value="<?php echo $_POST['cpassword']; ?>" required />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button class="btn btn-primary btn-block" name="submit">Create Account</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Workshop Sistem Informasi Web</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>