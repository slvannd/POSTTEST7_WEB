<?php
require 'config.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword) {

        $password = password_hash($password, PASSWORD_DEFAULT);

        $result = mysqli_query($db, "SELECT username from user WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "
        <script>
            alert('Konfirmasi Password Anda Tidak Sesuai!');
            document.location.href = 'regist.php';
        </script>";
        } else {
            $sql = "INSERT INTO user VALUES ('','$username', '$password')";

            $result = mysqli_query($db, $sql);

            if (mysqli_affected_rows($db) > 0) {
                echo"
                <script>
                    alert('Registrasi Telah Berhasil');
                    document.location.href = 'login.php';
                </script>";
            }else {
                echo"
                <script>
                    alert('Registrasi Gagal');
                    document.location.href = 'regist.php';
                </script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register</title>
</head>

<body>
    <div class="container regis">

        <div class="judul">
            <h2>Registrasi</h2>
        </div>

        <div class="form">
            <form action="" method="post">

                <label for="username">Username</label><br>
                <input type="text" name="username" class="input" placeholder="Masukkan username"><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" class="input" placeholder="Password"><br>

                <label for="konfirmasi">Konfirmasi Password</label><br>
                <input type="password" name="cpassword" class="input" placeholder="Konfirmasi password"><br>

                <input type="submit" name="register" class="submit" value="Registrasi"><br><br>
            </form>

            <p>Sudah punya akun?
                <a href="login.php">Login</a>
            </p>

        </div>
    </div>
</body>

</html>