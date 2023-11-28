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
    <link rel="stylesheet" href="assets/css/data_kuis.css" />
    <link rel="stylesheet" href="assets/css/modal.css" />
    <title>Pinokio</title>
  </head>
  <body>
    <nav class="container navbar">
      <img src="assets/img/image 2.png" alt="Pinokio Logo" />
      <div class="navbar-right">
        <span onclick="window.location.href='homepage.php'">HOME</span>
        <span onclick="window.location.href='kategori.php'">UJI</span>
        <span onclick="window.location.href='#'">ABOUT US</span>
        <img src="assets/img/gepetoprofil.png" onclick="window.location.href='profil.php'" style="cursor: pointer;" alt="Profile Pino" />
      </div>
    </nav>
    <dialog id="myModal" class="modal">
      <div class="modal-content">
        <div class="modal-text">
          <p>Apakah Anda Yakin Ingin Menghapus Data?</p>
        </div>
        <div class="modal-button">
          <button class="accept">Ya</button>
          <button class="decline">Tidak</button>
        </div>
      </div>
    </dialog>
    <dialog id="myModalConfirm" class="modal">
      <div class="modal-content">
        <div class="modal-text">
          <p>Update Data Berhasil !</p>
        </div>
        <div class="modal-button">
          <button class="ok">ok</button>
        </div>
      </div>
    </dialog>
    <section class="container header" >
      <h2 class="headings-pinokio">Data Quiz</h2>
      <button style="cursor: pointer;" onclick="window.location.href='insert.html'">BUAT</button>
    </section>

    <?php
    if($tema=='kejujuran'){
      ?>
      <div class="container">
      <section class="table">
        <table>
          <tr class="table-headers table-row">
            <th>NO</th>
            <th>PERTANYAAN</th>
            <th>PILIHAN PERTANYAAN</th>
            <th>JAWABAN</th>
            <th>TEMA</th>
            <th>PETUNJUK</th>
            <th>AKSI</th>
          </tr>
          <?php
          $no = 1;
          $sql = "select * from pertanyaan where tipe='kejujuran'";
          $query = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($query)){
            echo "<tr class='table-row'>
            <td>$no</td>
            <td>$row[pertanyaan]</td>";
            $sql2 = "select * from jawaban where id_pertanyaan = '$row[id_pertanyaan]'";
            $query2 = mysqli_query($conn,$sql2);
            echo "<td>";
            while($row2 = mysqli_fetch_array($query2)){
              echo "$row2[pilihan]" . ". $row2[jawaban]"."<br>";
            }
            echo "</td>";
            $sql3 = "select * from jawaban where id_pertanyaan = '$row[id_pertanyaan]' AND nilai='1'";
            $query3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_array($query3);
            echo "<td>$row3[pilihan]. $row3[jawaban]</td>";
            echo "<td>$row[tipe]</td>
            <td>$row[petunjuk]</td>
            <td>
              <img src='assets/img/check.png' alt='Check' style='cursor: pointer' id='check' />
              <img src='assets/img/trash.png' alt='Trash' style='cursor: pointer' id='trash' />
            </td>
          </tr>";
          $no++;
          }
          ?>
        </table>
      </section>
      </div>
      <?php
    } elseif($tema=='kebaikan'){
      ?>
      <div class="container">
      <section class="table">
        <table>
          <tr class="table-headers table-row">
            <th>NO</th>
            <th>PERTANYAAN</th>
            <th>PILIHAN PERTANYAAN</th>
            <th>JAWABAN</th>
            <th>TEMA</th>
            <th>PETUNJUK</th>
            <th>AKSI</th>
          </tr>
          <?php
          $no = 1;
          $sql = "select * from pertanyaan where tipe='kebaikan'";
          $query = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($query)){
            echo "<tr class='table-row'>
            <td>$no</td>
            <td>$row[pertanyaan]</td>";
            $sql2 = "select * from jawaban where id_pertanyaan = '$row[id_pertanyaan]'";
            $query2 = mysqli_query($conn,$sql2);
            echo "<td>";
            while($row2 = mysqli_fetch_array($query2)){
              echo "$row2[pilihan]" . ". $row2[jawaban]"."<br>";
            }
            echo "</td>";
            $sql3 = "select * from jawaban where id_pertanyaan = '$row[id_pertanyaan]' AND nilai='1'";
            $query3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_array($query3);
            echo "<td>$row3[pilihan]. $row3[jawaban]</td>";
            echo "<td>$row[tipe]</td>
            <td>$row[petunjuk]</td>
            <td>
              <img src='assets/img/check.png' alt='Check' style='cursor: pointer' id='check' />
              <img src='assets/img/trash.png' alt='Trash' style='cursor: pointer' id='trash' />
            </td>
          </tr>";
          $no++;
          }
          ?>
        </table>
      </section>
      </div>
      <?php
    } elseif($tema=='tanggung_jawab'){
      ?>
      <div class="container">
      <section class="table">
        <table>
          <tr class="table-headers table-row">
            <th>NO</th>
            <th>PERTANYAAN</th>
            <th>PILIHAN PERTANYAAN</th>
            <th>JAWABAN</th>
            <th>TEMA</th>
            <th>PETUNJUK</th>
            <th>AKSI</th>
          </tr>
          <?php
          $no = 1;
          $sql = "select * from pertanyaan where tipe='tanggung_jawab'";
          $query = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_array($query)){
            echo "<tr class='table-row'>
            <td>$no</td>
            <td>$row[pertanyaan]</td>";
            $sql2 = "select * from jawaban where id_pertanyaan = '$row[id_pertanyaan]'";
            $query2 = mysqli_query($conn,$sql2);
            echo "<td>";
            while($row2 = mysqli_fetch_array($query2)){
              echo "$row2[pilihan]" . ". $row2[jawaban]"."<br>";
            }
            echo "</td>";
            $sql3 = "select * from jawaban where id_pertanyaan = '$row[id_pertanyaan]' AND nilai='1'";
            $query3 = mysqli_query($conn,$sql3);
            $row3 = mysqli_fetch_array($query3);
            echo "<td>$row3[pilihan]. $row3[jawaban]</td>";
            echo "<td>$row[tipe]</td>
            <td>$row[petunjuk]</td>
            <td>
              <img src='assets/img/check.png' alt='Check' style='cursor: pointer' id='check' />
              <img src='assets/img/trash.png' alt='Trash' style='cursor: pointer' id='trash' />
            </td>
          </tr>";
          $no++;
          }
          ?>
        </table>
      </section>
      </div>
      <?php
    } else{
      header('Location: kategori.php');
      exit();
    }
    ?>
    
    
    <!-- <div class="container">
      <section class="table">
        <div class="table-headers table-row">
          <div>NO</div>
          <div>PERTANYAAN</div>
          <div>PILIHAN PERTANYAAN</div>
          <div>JAWABAN</div>
          <div>TEMA</div>
          <div>PETUNJUK</div>
          <div>AKSI</div>
        </div>
        <div class="table-row">
          <div>1</div>
          <div>Mengapa Kejujuran Penting dalam Hubungan?</div>
          <div>
            A. Mencegah kebosanan
            <br />B. Membangun kepercayaan <br />
            C. Menjaga rahasia <br />D. Memperoleh keuntungan pribadi
          </div>
          <div>B. Membangun Kepercayaan</div>
          <div>Kejujuran</div>
          <div>
            Pilih jawaban yang mencerminkan pandangan positif terhadap dampak
            kejujuran terhadap kualitas hidup.
          </div>
          <div class="table-aksi">
            <img src="assets/img/check.png" alt="Check" style="cursor: pointer" id="check" />
            <img src="assets/img/trash.png" alt="Trash" style="cursor: pointer" id="trash" />
          </div>
        </div>
        <div class="table-row">
          <div>2</div>
          <div>Bagaimana Kejujuran Mempengaruhi Kualitas Hidup?</div>
          <div>
            A. Meningkatkan kualitas hidup <br />B. Menurunkan kualitas hidup
            <br />C. Tidak berpengaruh <br />D. Bergantung pada situasi
          </div>
          <div>A. Meningkatkan kualitas hidup</div>
          <div>Kejujuran</div>
          <div>
            Pilih jawaban yang paling sesuai dengan dampak kejujuran terhadap
            kualitas hidup.
          </div>
          <div class="table-aksi">
            <img src="assets/img/check.png" alt="Check" style="cursor: pointer" id="check" />
            <img src="assets/img/trash.png" alt="Trash" style="cursor: pointer" id="trash" />
          </div>
        </div>
        <div class="table-row">
          <div>3</div>
          <div>Apakah Kehalusan Bicara Dapat Menutupi Kejujuran?</div>
          <div>
            A. Tidak pernah <br />B. Selalu <br />C. Terkadang <br />D. Tidak
            Relevan
          </div>
          <div>C. Terkadang</div>
          <div>Kejujuran</div>
          <div>
            Pilih jawaban yang menunjukkan bahwa kehalusan bicara tidak selalu
            mengindikasikan kejujuran, tetapi dapat tergantung pada situasi atau
            niatnya.
          </div>
          <div class="table-aksi">
            <img src="assets/img/check.png" alt="Check" style="cursor: pointer" id="check" />
            <img src="assets/img/trash.png" alt="Trash" style="cursor: pointer" id="trash" />
          </div>
        </div>
        <div class="table-row">
          <div>4</div>
          <div>
            Bagaimana Tanggung Jawab Mempengaruhi Kualitas Hubungan Sosial?
          </div>
          <div>
            A. Menyebabkan isolasi sosial <br />B. Menciptakan rasa saling
            ketergantungan <br />C. Tidak ada pengaruh <br />D. Hanya membuat
            stress
          </div>
          <div>B. Menciptakan rasa saling ketergantungan</div>
          <div>Tanggung Jawab</div>
          <div>
            Pilih jawaban yang menunjukkan bahwa tanggung jawab dapat
            menciptakan rasa saling ketergantungan, menekankan pentingnya
            bekerjasama dalam hubungan sosial.
          </div>
          <div class="table-aksi">
            <img src="assets/img/check.png" alt="Check" style="cursor: pointer" id="check" />
            <img src="assets/img/trash.png" alt="Trash" style="cursor: pointer" id="trash" />
          </div>
        </div>
      </section>
    </div> -->

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
  <script src="assets/js/script.js"></script>
</html>
