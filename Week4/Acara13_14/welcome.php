<?php
include './config.php';
session_start();

if (!isset($_SESSION['user_email'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <style>
        .card {
            background-color: white;
            border-radius: 7px;
            padding: 2rem 2rem 2rem 2rem;
            border-width: 10px;
            border-color: black;
        }

        .tablestyle {
            padding: 2rem 2rem 2rem 2rem;
            background-color: yellowgreen;
        }
    </style>
    <title>Login Form</title>
</head>

<body>

    <?php echo "<h1>Welcome :" . $_SESSION['user_email'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
    <br> <br />
    <h3>Account List</h3>


    <table class="tablestyle" border="1px">
        <tr>
            <td>No</td>
            <td>Email</td>
            <td>Password</td>
            <td>Nama</td>
            <td>level</td>
            <td>Edit</td>
        </tr>
        <?php
        $query = "SELECT * FROM user_detail";
        $result = mysqli_query($conn, $query);
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $userMail = $row['user_email'];
            $userName = $row['user_fullname'];
            $userPass = $row['user_password'];
            $level    = $row['level'];
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $userMail; ?></td>
                <td><?php echo $userPass; ?></td>
                <td><?php echo $userName; ?></td>
                <td><?php echo $level; ?></td>
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