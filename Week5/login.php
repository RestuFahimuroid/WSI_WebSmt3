<?php
include 'connection.php';

session_start();

error_reporting(1);

if (isset($_SESSION['user_email'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    $sql = "SELECT * FROM user_detail WHERE user_email='$email' AND user_password='$password' limit 1";
    $result = mysqli_query($conn, $sql);
    //echo  "<script>alert('Selamat Datang. $result->num_rows')</script>";
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_fullname'] = $row['user_fullname'];
        if ($row['level'] == 1) {
            $_SESSION['user_level'] = 'Login as Admin';
            $_SESSION['level'] = 1;
            header("Location: index.php");
            echo "<script>alert('Berhasil Login sebagai admin')</script>";
        } elseif ($row['level'] == 2) {
            $_SESSION['user_level'] = 'Login as User';
            $_SESSION['level'] = 2;
            header("Location: index.php");
            echo "<script>alert('Berhasil Login sebagai user')</script>";
        }
    } else {
        echo "<script>alert('Email / Password Salah. ')</script>";
    }
}
// Cookies Remember Password 
if (isset($_POST['remember'])) {
    //buat cookie
    setcookie("user_login", $_POST["user_email"], time() + (3600 * 365 * 24 * 60 * 60));
    setcookie("userpassword", $_POST["user_password"], time() + (3600 * 365 * 24 * 60 * 60));
    $sendremember = "true";
} else {
    if (isset($_COOKIE["user_login"])) {
        setcookie("user_login", "");
    }
    if (isset($_COOKIE["userpassword"])) {
        setcookie("userpassword", "");
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
    <title>Login - SB Admin </title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="login.php">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="user_email" type="email" placeholder="name@example.com" value="<?php echo $password; ?>" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="user_password" type="password" placeholder="Password" value="<?php echo $email; ?>" required />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <!-- Check box remember account -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" name="remember" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Account</label>
                                        </div>
                                        <!-- Check box activate md5 encryption -->
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" name="encrypt" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Use MD5</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.php">Forgot Password?</a>
                                            <button class="btn btn-primary" type="submit" name="submit">Login</button>

                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
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