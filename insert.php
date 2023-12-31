<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['id'])){
  header('Location: login.php');
  exit();
}

if($_SESSION['role']=='pinocchio'){
  header('Location: homepage.php');
  exit();
}
$tema = $_GET['tema'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="assets/css/insert.css" />
    <title>Pinokio</title>
  </head>
  <body>
  <dialog id="myModal" class="modal">
      <div class="modal-content">
        <div class="modal-text">
          <p>Update Data Berhasil !</p>
        </div>
        <div class="modal-button">
          <button class="ok">ok</button>
        </div>
      </div>
    </dialog>
    <nav class="container navbar">
      <img src="assets/img/image 2.png" alt="Pinokio Logo" />
      <div class="navbar-right">
        <span onclick="window.location.href='homepage.php'">HOME</span>
        <span onclick="window.location.href='data_kuis.php'">UJI</span>
        <span onclick="window.location.href='aboutus.php'">TENTANG KAMI</span>
        <img src="assets/img/gepetoprofil.png" onclick="window.location.href='profil.php'" style="cursor: pointer;" alt="Profile Pino" />
      </div>
    </nav>

    <section class="container header">
      <h2 class="headings-pinokio">Jadilah Seorang Penguji</h2>
    </section>

    <div class="container">
      <form action="insert_process.php" method="post">
      <section class="form-data">
        <div>
          <h3>1. Pertanyaan</h3>
          <input type="text" name="pertanyaan" required/>
        </div>
        <div>
          <h3>2. Pilihan Jawaban</h3>
          <div class="form-choice"><span>A.</span><input type="text" name="jawaban_a" required/></div>
          <div class="form-choice"><span>B.</span><input type="text" name="jawaban_b" required/></div>
          <div class="form-choice"><span>C.</span><input type="text" name="jawaban_c" required/></div>
          <div class="form-choice"><span>D.</span><input type="text" name="jawaban_d" required/></div>
        </div>
        <div>
          <h3>3. Jawaban</h3>
          <input type="text" name="jawaban_benar" pattern="[A-Da-d]" placeholder="A, B, C atau D" required/>
        </div>
        <div>
          <h3>4. Tema</h3>
          <select name="tema" id="tema" required>
            <option value="kejujuran" <?php if($tema=="kejujuran"){echo "selected";} ?>>Kejujuran</option>
            <option value="tanggung_jawab" <?php if($tema=="tanggung_jawab"){echo "selected";} ?>>Tanggung Jawab</option>
            <option value="kebaikan" <?php if($tema=="kebaikan"){echo "selected";} ?>>Kebaikan</option>
          </select>
        </div>
        <div>
          <h3>5. Petunjuk</h3>
          <textarea
            name="petunjuk"
            id="petunjuk"
            cols="75"
            rows="10"
            required
          ></textarea>
        </div>
        <div class="button-action">
          <button class="batal">BATAL</button>
          <button type="submit" name="insert" class="insert">SIMPAN</button>
        </div>
      </section>
      </form>
    </div>

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
                <button>Kirim</button>
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
      </div>
    </footer>
  </body>
</html>
