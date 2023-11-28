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
          <button class="accept" onclick="hapus()">Ya</button>
          <button class="decline" onclick="hide()">Tidak</button>
        </div>
      </div>
    </dialog>
    <section class="container header" >
      <h2 class="headings-pinokio">Data Quiz</h2>
      <button style="cursor: pointer;" onclick="window.location.href='insert.php?tema=<?php echo $tema ?>'">BUAT</button>
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
              <img src='assets/img/trash.png' alt='Trash' style='cursor: pointer' onclick='setIdHapus($row[id_pertanyaan],\"$row[tipe]\")' />
              
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
              <img src='assets/img/trash.png' alt='Trash' style='cursor: pointer' onclick='setIdHapus($row[id_pertanyaan],\"$row[tipe]\")' />
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
              <img src='assets/img/trash.png' alt='Trash' style='cursor: pointer' onclick='setIdHapus($row[id_pertanyaan],\"$row[tipe]\")' />
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
  <script>
    var id_hapus = 0;
    var tipe = '';
    function setIdHapus(id, tipe_pertanyaan){
      id_hapus = id;
      tipe = tipe_pertanyaan;
      document.getElementById("myModal").style.display = "block";  
    }
    function hapus(){
      window.location.href = "delete_process.php?id=" + String(id_hapus) + "&tipe=" + tipe;
    }
    function hide(){
      document.getElementById("myModal").style.display = "none";
    }
    
  </script>
  <!-- <script src="assets/js/script.js"></script> -->
</html>
