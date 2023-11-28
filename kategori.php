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
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="assets/css/kategoristyle.css" />
  </head>
  <body>
    <?php
    if($_SESSION['role']=='pinocchio'){
      ?>
      <div class="kuis">
        <div class="div">
          <div class="group">
            <div class="overlap-group"><div class="text-wrapper" onclick="window.location.href='kategori.php'">KUIS</div></div>
            <div class="text-wrapper-2" onclick="window.location.href='homepage.php'">HOME</div>
            <div class="text-wrapper-3" onclick="window.location.href='#'">ABOUT US</div>
          </div>
          <img class="image" src="assets/img/image 2.png" />
          <div class="text-wrapper-4">Apakah Kamu Siap Pino?</div>
          <div class="overlap-wrapper">
            <div class="overlap">
              <div class="ellipse"></div>
              <img class="profil-pino" onclick="window.location.href='profil.php'" src="assets/img/profil pino.png" />
            </div>
          </div>
          <div class="overlap-2">
            <div class="rectangle"></div>
            <div class="rectangle-2"></div>
            <div class="rectangle-3"></div>
            <div class="rectangle-4"></div>
            <div class="rectangle-5"></div>
            <div class="kejujuran">
              <img class="baik" src="assets/img/baik.png" />
              <img class="tj" src="assets/img/tj.png" />
              <img class="jujur" src="assets/img/jujur.png" />
              <div class="div-wrapper"><div class="text-wrapper-7" onclick="window.location.href='kuis.php?tema=kejujuran'">KEJUJURAN</div></div>
              <div class="text-wrapper-6" onclick="window.location.href='kuis.php?tema=tanggung_jawab'">TANGGUNG JAWAB</div>
              <div class="text-wrapper-5" onclick="window.location.href='kuis.php?tema=kebaikan'">KEBAIKAN</div>
            </div>
          </div>
          <p class="jika-kamu-hidup">
              &#34;Jika kamu hidup dengan kejujuran, hidupmu akan menjadi ajaib dan penuh keajaiban, seperti dongeng yang
              tak terlupakan.&#34; - Pinokio
            </p>
          <footer class="FOOTER">
            <p class="p">© 2023 Pinocchio. Hak Cipta Dilindungi</p>
            <p class="FOOTER-2">Menjelajahi Kebaikan, Kejujuran, dan Tanggung Jawab melalui Game Kuis yang Mendidik</p>
            <div class="group-2"></div>
            <div class="group-3">
              <div class="text-wrapper-9">@pinocchio1_official</div>
              <div class="text-wrapper-10">@pinocchio_official</div>
              <div class="text-wrapper-11">@pinocchio_official</div>
            </div>
            <div class="group-4">
              <img class="fb" src="assets/img/fb.png" />
              <img class="twt" src="assets/img/twt.png" />
              <img class="ig" src="assets/img/ig.png" />
            </div>       
        </div>
      </div>
      <?php
    } else{
      ?>
      <div class="kuis">
        <div class="div">
          <div class="group">
            <div class="overlap-group"><div class="text-wrapper" onclick="window.location.href='kategori.php'">UJI</div></div>
            <div class="text-wrapper-2" onclick="window.location.href='homepage.php'">HOME</div>
            <div class="text-wrapper-3" onclick="window.location.href='#'">TENTANG KAMI</div>
          </div>
          <img class="image" src="assets/img/image 2.png" />
          <div class="text-wrapper-4" style="left: 650px;">Pilih Kategori</div>
          <div class="overlap-wrapper">
            <div class="overlap">
              <div class="ellipse"></div>
              <img class="profil-gepeto" onclick="window.location.href='profil.php'" src="assets/img/gepetoprofil.png" />
            </div>
          </div>
          <div class="overlap-2">
            <div class="rectangle"></div>
            <div class="rectangle-2"></div>
            <div class="rectangle-3"></div>
            <div class="rectangle-4"></div>
            <div class="rectangle-5"></div>
            <div class="kejujuran">
              <img class="baik" src="assets/img/baik.png" />
              <img class="tj" src="assets/img/tj.png" />
              <img class="jujur" src="assets/img/jujur.png" />
              <div class="div-wrapper"><div class="text-wrapper-7" onclick="window.location.href='data_kuis.php?tema=kejujuran'">KEJUJURAN</div></div>
              <div class="text-wrapper-6" onclick="window.location.href='data_kuis.php?tema=tanggung_jawab'">TANGGUNG JAWAB</div>
              <div class="text-wrapper-5" onclick="window.location.href='data_kuis.php?tema=kebaikan'">KEBAIKAN</div>
            </div>
          </div>
          <p class="jika-kamu-hidup">
              &#34;Jika kamu hidup dengan kejujuran, hidupmu akan menjadi ajaib dan penuh keajaiban, seperti dongeng yang
              tak terlupakan.&#34; - Pinokio
            </p>
          <footer class="FOOTER">
            <p class="p">© 2023 Pinocchio. Hak Cipta Dilindungi</p>
            <p class="FOOTER-2">Menjelajahi Kebaikan, Kejujuran, dan Tanggung Jawab melalui Game Kuis yang Mendidik</p>
            <div class="group-2"></div>
            <div class="group-3">
              <div class="text-wrapper-9">@pinocchio1_official</div>
              <div class="text-wrapper-10">@pinocchio_official</div>
              <div class="text-wrapper-11">@pinocchio_official</div>
            </div>
            <div class="group-4">
              <img class="fb" src="assets/img/fb.png" />
              <img class="twt" src="assets/img/twt.png" />
              <img class="ig" src="assets/img/ig.png" />
            </div>       
        </div>
      </div>
      <?php
    }
    ?>

  </body>
</html>
