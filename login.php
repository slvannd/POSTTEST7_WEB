<?php
session_start();
require 'config.php';

if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($db, " SELECT * from user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container login">
        <div class="logo">
            <img src="logo.png" alt="logo unmul" width="70%">
        </div>
        <div class="form-login">
            <h3>Login</h3>
            <?php if(isset($error)){
                echo "<p style='color: red;'>Username Atau Password Salah!</p>";
            } ?>
            <form action="" method="post">
                <input type="text" name="username" placeholder="email atau username" class="input">
                <input type="password" name="password" placeholder="password" class="input">

                <input type="submit" name="login" value="Login" class="submit"><br><br>
            </form>

            <p>Belum punya akun?
                <a href="regist.php">Register</a>
            </p>
        </div>
    </div>
</body>
</html>