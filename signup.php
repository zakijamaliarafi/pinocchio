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
    <link rel="stylesheet" href="assets/css/signupstyle.css">
</head>

<body>
    <form action="signup_process.php" method="post" id="form">
    <div class="container">
        
        <div class="background-overlay"></div>
        
        <img class="image image1" src="assets/img/image 4.png" />
        <img class="image image2" src="assets/img/image 2.png" />
        <img class="image image3" src="assets/img/gepeto kecil.png" />
        <div class="red-box"></div>
        <div class="login-section">
            <div class="login-text">sudah punya akun?</div>
            <div class="login-link" onclick="window.location.href='login.php'">login</div>
        </div>
        <div class="input-box-username">
            <input name="username" type="text" class="input-field username" id="username" value="">
        </div>
        <div class="input-box-password">
            <input name="password" type="password" class="input-field password" id="password" value="">
        </div>
        <div class="input-box-confirm-password">
            <input name="confirm" type="password" class="input-field confirm-password" id="confirm" value="">
        </div>
        <div class="section">
            <div class="field username">Username</div>
            <div class="field password">Password</div>
            <div class="field confirm-password">Konfirmasi Password</div>
        </div>
        <div class="signup-button">
            <div class="signup-button-inner">
                <div><input type="button" class="signup-button-text" onclick="checkForm()" value="SIGN UP"></div>
            </div>
        </div>
        <div class="looking-for-text">
            <div class="looking-for-text-inner">Jadilah <span class="new-member-text">Bagian</span> dari <span class="new-member-text">Komunitas </span>Kami</div>
        </div>
        <img class="image4" onclick="window.location.href='index.php'" src="assets/img/back kayu.png" />
    </div>
    </form>

    <!-- Registration Success Popup -->
    <div class="popup registration-success" style="display: none;">
        <div class="title">Registrasi Berhasil</div>
        <div class="subtitle">Silahkan Login</div>
        <div class="button-container">
            <div class="button" onclick="hideRegistrationSuccess()">OK</div>
        </div>
    </div>

    <!-- Alert Empty Form -->
    <div class="popup alert-form" style="display: none;">
        <div class="title">Data Belum Lengkap</div>
        <div class="subtitle">Silahkan Lengkapi Data</div>
        <div class="button-container">
            <div class="button" onclick="hideAlertForm()">OK</div>
        </div>
    </div>

    <!-- Alert Incorrect Password -->
    <div class="popup incorrect-password" style="display: none;">
        <div class="title">Password Tidak Sama</div>
        <div class="subtitle">Silahkan Cek Kembali</div>
        <div class="button-container">
            <div class="button" onclick="hidePasswordIncorrect()">OK</div>
        </div>
    </div>

    <script>
        function checkForm(){
            if(document.getElementById('username').value == '' ||
               document.getElementById('password').value == '' ||
               document.getElementById('confirm').value == ''
            ){
                showAlertForm();
            } else{
                checkPassword();
            }
        }
        function showAlertForm(){
            document.querySelector('.alert-form').style.display = 'flex';
        }
        function hideAlertForm(){
            document.querySelector('.alert-form').style.display = 'none';
        }
        function checkPassword(){
            if(document.getElementById('password').value == document.getElementById('confirm').value){
                showRegistrationSuccess();
            }else{
                showPasswordIncorrect();
            }
        }
        function showPasswordIncorrect(){
            document.querySelector('.incorrect-password').style.display = 'flex';
        }
        function hidePasswordIncorrect(){
            document.querySelector('.incorrect-password').style.display = 'none';
        }
        function showRegistrationSuccess() {
            document.querySelector('.registration-success').style.display = 'flex';
        }

        function hideRegistrationSuccess() {
            document.querySelector('.registration-success').style.display = 'none';
            document.getElementById('form').submit();
        }
    </script>
</body>

</html>
