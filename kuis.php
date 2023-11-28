<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['id'])){
    header('Location: login.php');
    exit();
}

if($_SESSION['role']=='geppetto'){
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
    <link rel="stylesheet" href="assets/css/kuis.css" />
    <link rel="stylesheet" href="assets/css/modal.css" />
    <title>Pinokio</title>
  </head>
  <body>

    <nav class="container navbar">
      <img src="assets/img/image 2.png" alt="Pinokio Logo" />
      <div class="navbar-right">
        <span id="nav-link">HOME</span>
        <span class="active" id="nav-link">QUIZ</span>
        <span id="nav-link">ABOUT US</span>
        <img src="assets/img/profil pino.png" alt="Profile Pino" style="cursor: pointer;" id="nav-link" />
      </div>
    </nav>

    <dialog id="myModal" class="modal">
      <div class="modal-content">
        <div class="modal-text">
          <p>Apakah anda yakin akan meninggalkan kuis?</p>
        </div>
        <div class="modal-button">
          <button class="accept">Ya</button>
          <button class="decline">Tidak</button>
        </div>
      </div>
    </dialog>

    <dialog id="myModalAlert" class="modal">
      <div class="modal-content">
        <div class="modal-text">
          <p>Maaf Anda Sudah Membuka Petunjuk</p>
          <p class="second-text">Hanya bisa membuka petunjuk 1 kali</p>
        </div>
        <div class="modal-button">
          <button class="ok">ok</button>
        </div>
      </div>
    </dialog>

    <dialog id="myModalClue" class="modal">
      <div class="modal-content-clue">
        <div class="modal-image">
          <img src="assets/img/jiminy ptunjuk.png" alt="jujur" />
        </div>
        <div class="modal-text">
          <h2>Kejujuran</h2>
          <p>
            Pilih jawaban yang paling sesuai dengan dampak positif dari
            kejujuran dalam konteks hubungan antar individu.
          </p>
        </div>
        <div class="close">
          <img src="assets/img/close.png" alt="close" />
        </div>
      </div>
    </dialog>

    <?php
    if($tema=='tanggung_jawab'){
      ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <section class="container quiz">
          
          <div class="quiz-headers">
            <img src="assets/img/kayu.png" alt="Kayu" />
            <h2 class="headings-pinokio-gradient">Tanggung Jawab</h2>
          </div>

          <?php
            $no = 1;
            $sql = "select * from pertanyaan where tipe='tanggung_jawab'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query)){
              echo "<div class='quisioner'>
              <p class='question'>
                $no. $row[pertanyaan]
              </p>
              <div class='answer'>";
              $sql2 = "select * from jawaban where id_pertanyaan = '$row[id_pertanyaan]'";
              $query2 = mysqli_query($conn,$sql2);
              while($row2 = mysqli_fetch_array($query2)){
                echo "
                <div class='choice'>
                  <input type='radio' id='q$no-$row2[pilihan]' name='q$no' value='$row2[nilai]' required/>
                  <label for='q$no-$row2[pilihan]'>$row2[jawaban]</label>
                </div>
                ";
              }
              echo "</div>
              <div class='hint'>
                <div>
                  tekan jiminny jika ingin mendapatkan petunjuk <br />ps : hanya bisa
                  pencet 1 kali
                </div>
                <div><img src='assets/img/jiminy.png' alt='Jiminy' id='clue' /></div>
              </div>
            </div>
              ";
            if($no==5){
              break;
            }
            $no++;
            } 
          ?>
        </section>
        <button type="submit" name="selesai" class="end" >SELESAI</button>
        </form>
      <?php
    } elseif($tema=='kejujuran'){
      ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <section class="container quiz">
          
          <div class="quiz-headers">
            <img src="assets/img/kayu.png" alt="Kayu" />
            <h2 class="headings-pinokio-gradient">Kejujuran</h2>
          </div>

          <?php
            $no = 1;
            $sql = "select * from pertanyaan where tipe='kejujuran'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query)){
              echo "<div class='quisioner'>
              <p class='question'>
                $no. $row[pertanyaan]
              </p>
              <div class='answer'>";
              $sql2 = "select * from jawaban where id_pertanyaan = '$row[id_pertanyaan]'";
              $query2 = mysqli_query($conn,$sql2);
              while($row2 = mysqli_fetch_array($query2)){
                echo "
                <div class='choice'>
                  <input type='radio' id='q$no-$row2[pilihan]' name='q$no' value='$row2[nilai]' required/>
                  <label for='q$no-$row2[pilihan]'>$row2[jawaban]</label>
                </div>
                ";
              }
              echo "</div>
              <div class='hint'>
                <div>
                  tekan jiminny jika ingin mendapatkan petunjuk <br />ps : hanya bisa
                  pencet 1 kali
                </div>
                <div><img src='assets/img/jiminy.png' alt='Jiminy' id='clue' /></div>
              </div>
            </div>
              ";
            if($no==5){
              break;
            }
            $no++;
            } 
          ?>
        </section>
        <button type="submit" name="selesai" class="end" >SELESAI</button>
        </form>
      <?php
    } elseif($tema=='kebaikan'){
      ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <section class="container quiz">
          
          <div class="quiz-headers">
            <img src="assets/img/kayu.png" alt="Kayu" />
            <h2 class="headings-pinokio-gradient">Kebaikan</h2>
          </div>

          <?php
            $no = 1;
            $sql = "select * from pertanyaan where tipe='kebaikan'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query)){
              echo "<div class='quisioner'>
              <p class='question'>
                $no. $row[pertanyaan]
              </p>
              <div class='answer'>";
              $sql2 = "select * from jawaban where id_pertanyaan = '$row[id_pertanyaan]'";
              $query2 = mysqli_query($conn,$sql2);
              while($row2 = mysqli_fetch_array($query2)){
                echo "
                <div class='choice'>
                  <input type='radio' id='q$no-$row2[pilihan]' name='q$no' value='$row2[nilai]' required/>
                  <label for='q$no-$row2[pilihan]'>$row2[jawaban]</label>
                </div>
                ";
              }
              echo "</div>
              <div class='hint'>
                <div>
                  tekan jiminny jika ingin mendapatkan petunjuk <br />ps : hanya bisa
                  pencet 1 kali
                </div>
                <div><img src='assets/img/jiminy.png' alt='Jiminy' id='clue' /></div>
              </div>
            </div>
              ";
            if($no==5){
              break;
            }
            $no++;
            } 
          ?>
        </section>
        <button type="submit" name="selesai" class="end" >SELESAI</button>
        </form>
      <?php
    }
    ?>

  <?php
  if(isset($_POST['selesai'])){
    $q1 = (int)$_POST['q1'];
    $q2 = (int)$_POST['q2'];
    $q3 = (int)$_POST['q3'];
    $q4 = (int)$_POST['q4'];
    $q5 = (int)$_POST['q5'];

    $benar = $q1 + $q2 + $q3 + $q4 + $q5;
    $salah = 5 - $benar;
    $nilai = $benar * 20;
    ?>
    <dialog id="myModalResult" class="modal">
      <div class="modal-content-result">
        <div class="modal-text">
          <h1>HASIL QUIZ</h1>
          <div>
            <img src="assets/img/benar.png" alt="benar" />
            <span>benar : <?php echo $benar ?></span>
          </div>
          <div>
            <img src="assets/img/salah.png" alt="salah" />
            <span>salah : <?php echo $salah ?></span>
          </div>
          <h2>Nilai kamu adalah <?php echo $nilai ?></h2>
        </div>
        <div class="modal-button">
          <button class="result">Result</button>
          <button class="abort">Tidak</button>
        </div>
      </div>
    </dialog>
    <?php
    echo "<script>document.getElementById('myModalResult').style.display = 'block';</script>";
    echo "<script src='assets/js/script.js'></script>";
    
  } else {
    echo "<script src='assets/js/script.js'></script>";
  }
  ?>
  
  </body>
</html>