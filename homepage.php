<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['id'])){
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if($_SESSION['role']=='pinocchio'){
        ?>
        <link rel="stylesheet" href="assets/css/loginpinostyle.css" />
        <?php
    } else{
        ?>
        <link rel="stylesheet" href="assets/css/logingepetostyle.css" />
        <?php
    }
    ?>
  </head>
  <body>
    <?php
    if($_SESSION['role']=='pinocchio'){
    ?>
        <div class="homepage-abis-login">
            <div class="div">
                <div class="group">
                <div class="overlap-group" onclick="window.location.href='homepage.php'"><div class="text-wrapper">HOME</div></div>
                <div class="text-wrapper-3" onclick="window.location.href='kuis.html'">QUIZ</div>
                <div class="text-wrapper-2" onclick="window.location.href='#'">ABOUT US</div>
                </div>
                <img class="image" src="assets/img/image 2.png" />
                <img class="profil-pino" onclick="window.location.href='profil.php'" src="assets/img/profil pino.png" />
                <div class="overlap">
                <div class="overlap-2">
                    <img class="pinokio" src="assets/img/pinokio.png" />
                </div>
                <div class="welcome-container">
                    <span class="welcome-text">Selamat Datang</span>
                    <span class="pinocchio-text">Pinocchio!</span>
                </div>
                <div class="flexcontainer">
                    <p class="text">
                    <span class="span">Apakah kamu ingin menjadi anak laki-laki sejati pinocchio? <br />Mari berpetualang bersama kami</span>
                    </p>
                </div>
                <div class="overlap-wrapper">
                    <div class="div-wrapper" onclick="window.location.href='kuis.html'"><div class="text-wrapper-4">YUK MAIN</div></div>
                </div>
                </div>
                <footer class="FOOTER">
                <p class="p">© 2023 Pinocchio. Hak Cipta Dilindungi</p>
                <p class="FOOTER-2">Menjelajahi Kebaikan, Kejujuran, dan Tanggung Jawab melalui Game Kuis yang Mendidik</p>
                <div class="group-2">
                </div>
                <div class="group-3">
                    <div class="text-wrapper-6">@pinocchio1_official</div>
                    <div class="text-wrapper-7">@pinocchio_official</div>
                    <div class="text-wrapper-8">@pinocchio_official</div>
                </div>
                <div class="group-4">
                    <img class="fb" src="assets/img/fb.png" />
                    <img class="twt" src="assets/img/twt.png" />
                    <img class="ig" src="assets/img/ig.png" />
                </div>
                </footer>
                <div class="overlap-4">
                <img class="siapa-itu-pinocchio" src="assets/img/siapapino.svg" />
                </div>
                <p class="text-wrapper-9">
                Pinokio adalah boneka kayu yang hidup, diciptakan oleh tukang kayu Geppetto. Dalam perjalanan menjadi anak
                laki-laki sejati, Pinokio diuji oleh cobaan dan mendapat petunjuk dari teman setianya, Jiminy Cricket. Cerita
                Pinokio mengajarkan nilai-nilai kejujuran dan kebaikan.
                </p>
                <img class="line-2" src="img/line-2.svg" />
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="homepage-abis-login">
            <div class="div">
                <div class="group">
                <div class="overlap-group" onclick="window.location.href='homepage.php'"><div class="text-wrapper">HOME</div></div>
                <div class="text-wrapper-3" onclick="window.location.href='data_kuis.php'">UJI</div>
                <div class="text-wrapper-2" onclick="window.location.href='#'">ABOUT US</div>
                </div>
                <img class="image" src="assets/img/image 2.png" />
                <img class="profil-gepeto" onclick="window.location.href='profil.php'" src="assets/img/gepetoprofil.png" />
                <div class="overlap">
                <div class="overlap-2">
                    <img class="gepeto" src="assets/img/gepeto.png" />
                </div>
                <div class="welcome-container">
                    <span class="welcome-text">Selamat Datang </span>
                    <span class="gepeto-text">Geppeto!</span>
                </div>
                <div class="flexcontainer">
                    <p class="text">
                    <span class="span">Geppeto, apakah kamu kesepian? perlukah kamu seorang anak laki-laki?
                        <br class="text">Ujilah anak laki-lakimu agar menjadi anak laki-laki yang sejati
                    </span>
                    </p>
                </div>
                <div class="overlap-wrapper">
                    <div class="div-wrapper" onclick="window.location.href='data_kuis.php'"><div class="text-wrapper-4">UJILAH</div></div>
                </div>
                </div>
                <footer class="FOOTER">
                <p class="p">© 2023 Pinocchio. Hak Cipta Dilindungi</p>
                <p class="FOOTER-2">Menjelajahi Kebaikan, Kejujuran, dan Tanggung Jawab melalui Game Kuis yang Mendidik</p>
                <div class="group-2">
                </div>
                <div class="group-3">
                    <div class="text-wrapper-6">@pinocchio1_official</div>
                    <div class="text-wrapper-7">@pinocchio_official</div>
                    <div class="text-wrapper-8">@pinocchio_official</div>
                </div>
                <div class="group-4">
                    <img class="fb" src="assets/img/fb.png" />
                    <img class="twt" src="assets/img/twt.png" />
                    <img class="ig" src="assets/img/ig.png" />
                </div>
                </footer>
                <div class="overlap-4">
                <img class="siapa-itu-gepeto" src="assets/img/siapagepeto.png" />
                </div>
                <p class="text-wrapper-9">
                    Geppetto, seorang tukang kayu baik hati dalam cerita Pinokio, menciptakan boneka kayu bernama Pinokio. Dengan keinginan memiliki anak, ia mengharapkan Pinokio dapat menjadi anak laki-laki sejati. Geppetto adalah tokoh penyayang dan kreatif yang mewakili nilai-nilai kebaikan dan kesabaran.
                </p>
                <img class="line-2" src="img/line-2.svg" />
            </div>
        </div>
    <?php
    }
    ?>
  </body>
</html>