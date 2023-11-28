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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pinokio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/indexstyle.css" />
  </head>
  <body>
    <nav class="container navbar">
      <img src="assets/img/image 2.png" alt="Pinokio Logo" />
      <div class="navbar-right">
        <span onclick="window.location.href='signup.php'">SIGN UP</span>
        <span onclick="window.location.href='login.php'">LOGIN</span>
        <span onclick="window.location.href='login.php'">HOME</span>
        <span onclick="window.location.href='#'">ABOUT US</span>
      </div>
    </nav>

    <section class="container hero">
      <h1 class="hero-header headings-pinokio-gradient">
        Pinokio, Petualangan Kebaikan!
      </h1>
      <p class="hero-paragraph">
        Selamat datang di Dunia Pinokio, tempat kebaikan, kejujuran, dan
        tanggung jawab diuji dalam serangkaian game kuis seru yang mendidik dan
        menyenangkan!
      </p>
      <button class="hero-cta" onclick="window.location.href='login.php'">LEARN MORE</button>
    </section>

    <section class="story">
      <div class="story-gradient"></div>
      <img src="assets/img/awan.png" alt="Awan" />
      <img src="assets/img/peri.png" alt="Peri" />
      <img src="assets/img/Group 22.png" alt="Group" />
      <p class="story-paragraph">
        Pinokio, boneka kayu yang hidup, lahir dari keajaiban tangan tukang kayu
        Gepetto dan sentuhan magis peri biru. Dalam upayanya menjadi anak
        laki-laki sejati, Pinokio diuji oleh berbagai cobaan kejujuran yang
        ditandai dengan hidungnya yang tumbuh panjang setiap kali ia berbohong.
        Bersama mentor bijak, Jiminy Cricket, Pinokio menjalani petualangan
        ajaib yang memperlihatkan pesan moral tentang kejujuran dan nilai-nilai
        hidup lainnya.
      </p>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="footer-top">
          <div class="footer-top-first">
            <p>
              Menjelajahi Kebaikan, Kejujuran, dan Tanggung Jawab melalui Game
              Kuis yang Mendidik
            </p>
            <div class="form">
              <div>Kirim ke Email</div>
              <div>
                <input type="text" placeholder="masukkan saran..." />
                <button style="cursor: pointer;">Kirim</button>
              </div>
            </div>
          </div>
          <div class="footer-top-second">
          </div>
          <div class="footer-top-third">
            <div class="social-media">
              <img src="assets/img/ig.png" alt="Instagram" />
              <span>@pinocchio_official</span>
            </div>
            <div class="social-media">
              <img src="assets/img/twt.png" alt="Twiter" />
              <span>@pinocchio_official</span>
            </div>
            <div class="social-media">
              <img src="assets/img/fb.png" alt="Facebook" />
              <span>@pinocchio_official</span>
            </div>
          </div>
        </div>
        <div class="footer-bottom">© 2023 Pinocchio. Hak Cipta Dilindungi</div>
      </div>
    </footer>
  </body>
</html>
