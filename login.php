<?php
include "koneksi.php";
session_start();

if(isset($_SESSION['id'])){
  header("Location: homepage.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/loginstyle.css">
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="container">
        
        <div class="background-overlay"></div>
        
        <img class="image image1" src="assets/img/image 4.png" />
        <img class="image image2" src="assets/img/image 2.png" />
        <img class="image image3" src="assets/img/gepeto kecil.png" />
        <div class="red-box"></div>
        
        <div class="login-section">
            <div class="login-text">Belum punya akun?</div>
            <div class="login-link" onclick="window.location.href='signup.php'">sign up</div>
        </div>
        <div class="input-box-username">
            <input type="text" name="username" id="username" class="input-field username" value="">
        </div>
        <div class="input-box-password">
            <input type="password" name="password" id="password" class="input-field password" value="">
        </div>
        <div class="section">
            <div class="field username">Username</div>
            <div class="field password">Password</div>
        </div>
        <div class="login-button">
            <div class="login-button-inner">
                <div><input type="submit" name="login" class="login-button-text" onclick="check()" value="LOG IN"></div>
            </div>
        </div>
        <div class="looking-for-text">
            <div class="looking-for-text-inner">Mulailah Sebuah <span class="everyone-text">Petualangan</span></div>
        </div>
        <img class="image4" onclick="window.location.href='index.php'" src="assets/img/back kayu.png" />
    </div>
    </form>

    <!-- Registration Fail Popup -->
    <div class="login-fail" style="display: none;">
        <div class="title">Login Gagal</div>
        <div class="subtitle">Username/Password yang anda masukkan salah</div>
        <div class="button-container" onclick="window.location.href='login.php'">
            <div class="button" onclick="hideLoginFail()">OK</div>
        </div>
        <img style="width: 62px; height: 62px; left: 160px; top: 45px; position: absolute" src="assets/img/peringatan.png" />
    </div>
    <script>
        function showLoginFail() {
            document.querySelector('.login-fail').style.display = 'flex';
        }

        function hideLoginFail() {
            document.querySelector('.login-fail').style.display = 'none';
        }
    </script>
    <?php

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
     
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])){
                $_SESSION['id'] = $row['id_user'];
                $_SESSION['role'] = $row['role_user'];
                header("Location: homepage.php");
            } else{
                echo "<script>showLoginFail()</script>";    
            }
        } else {
            echo "<script>showLoginFail()</script>";
        }
    }
    ?>
</body>

</html>
