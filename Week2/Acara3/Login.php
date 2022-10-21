<!DOCTYPE html>
<html>

<head>
    <title> PAGE LOGIN WEBSITE</title>
</head>

</html>

<body>
    <div id="main">
        <h1>PAGE LOGIN WEBSITE</h1>
        <form method="POST">
            Username <input type="text" name="username" class="text" autocomplete="off" required>
            Password <input type="password" name="password" class="text" required>
            <input type="submit" name="submit" id="sub">
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $un = $_POST['username'];
    $pw = $_POST['password'];

    if ($un == 'Fahim' && $pw == '123') {
        header("location:SuccessLogin.html");
        echo "Login Succes";
        exit();
    } else {
        echo "invalid Username / Password";
    }
}
?>