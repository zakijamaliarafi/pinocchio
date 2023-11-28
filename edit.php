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
$id = $_GET['id'];
$tipe = $_GET['tipe'];

if(isset($_POST['edit'])){
  $pertanyaan = $_POST['pertanyaan'];
  $tema = $_POST['tema'];
  $petunjuk = $_POST['petunjuk'];

  $jawaban_a = $_POST['jawaban_a'];
  $jawaban_b = $_POST['jawaban_b'];
  $jawaban_c = $_POST['jawaban_c'];
  $jawaban_d = $_POST['jawaban_d'];
  $jawaban_benar = $_POST['jawaban_benar'];

  $update = "update pertanyaan set pertanyaan='$pertanyaan', tipe='$tema', petunjuk='$petunjuk' where id_pertanyaan='$id'";
  $query = mysqli_query($conn,$update);

  $pilihan_values = ['A', 'B', 'C', 'D'];
    foreach ($pilihan_values as $pilihan) {
        $update_query = "UPDATE jawaban SET jawaban=?, nilai='0' WHERE id_pertanyaan=? AND pilihan=?";
        $stmt = mysqli_prepare($conn, $update_query);

        mysqli_stmt_bind_param($stmt, 'sss', ${'jawaban_' . strtolower($pilihan)}, $id, $pilihan);
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
    }

    $update = "update jawaban set nilai='1' where id_pertanyaan='$id' and pilihan='$jawaban_benar'";
    $query = mysqli_query($conn,$update);
  
  
    header("Location: data_kuis.php?tema=$tema");
}
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
    <link rel="stylesheet" href="assets/css/editsoal.css" />
    <title>Pinokio</title>
  </head>
  <body>
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
      <h2 class="headings-pinokio">Edit Kuis</h2>
    </section>

    <div class="container">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <section class="form-data">
      <?php
      $select = "SELECT * FROM pertanyaan WHERE id_pertanyaan='$id'";
      $result = mysqli_query($conn, $select);
      $row = mysqli_fetch_array($result);
      ?>
        <div>
          <h3>1. Pertanyaan</h3>
          <input type="text" name="pertanyaan" value="<?php echo $row['pertanyaan'] ?>" required/>
        </div>
        <div>
          <?php
            $pilihan_values = ['A', 'B', 'C', 'D'];

            foreach ($pilihan_values as $pilihan) {
                $select_query = "SELECT * FROM jawaban WHERE id_pertanyaan='$id' AND pilihan='$pilihan'";
                $result = mysqli_query($conn, $select_query);
                ${'row' . $pilihan} = mysqli_fetch_array($result);
            }

          ?>
          <h3>2. Pilihan Jawaban</h3>
          <div class="form-choice"><span>A.</span><input name="jawaban_a" type="text" value="<?php echo $rowA['jawaban'] ?>" required/></div>
          <div class="form-choice"><span>B.</span><input name="jawaban_b" type="text" value="<?php echo $rowB['jawaban'] ?>" required/></div>
          <div class="form-choice"><span>C.</span><input name="jawaban_c" type="text" value="<?php echo $rowC['jawaban'] ?>" required/></div>
          <div class="form-choice"><span>D.</span><input name="jawaban_d" type="text" value="<?php echo $rowD['jawaban'] ?>" required/></div>
        </div>
        <div>
          <?php
            $select2 = "SELECT pilihan FROM jawaban WHERE id_pertanyaan='$id' AND nilai='1'";
            $result2 = mysqli_query($conn, $select2);
            $row2 = mysqli_fetch_array($result2);
          ?>
          <h3>3. Jawaban</h3>
          <input type="text" name="jawaban_benar" value="<?php echo $row2['pilihan']?>" required/>
        </div>
        <div>
          <h3>4. Tema</h3>
          <select name="tema" id="tema">
            <option value="kejujuran" <?php if($tipe=='kejujuran'){echo 'selected';} ?>>Kejujuran</option>
            <option value="tanggung_jawab" <?php if($tipe=='tanggung_jawab'){echo 'selected';} ?>>Tanggung Jawab</option>
            <option value="kebaikan" <?php if($tipe=='kebaikan'){echo 'selected';} ?>>Kebaikan</option>
          </select>
        </div>
        <div>
          <h3>5. Petunjuk</h3>
          <textarea
            name="petunjuk"
            id="petunjuk"
            cols="75"
            rows="10"
          ><?php echo $row['petunjuk'] ?></textarea>
        </div>
        <div class="button-action">
          <button class="batal">BATAL</button>
          <button type="submit" name="edit" class="insert">EDIT</button>
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
