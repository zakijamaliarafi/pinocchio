<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['id'])){
    header('Location: login.php');
    exit();
}

$sql = "SELECT * from user WHERE id_user='$_SESSION[id]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/profilstyle.css">
</head>

<body>
    <div class="container">
        <div class="gradient-background"></div>
        <img class="arrow-image" onclick="window.location.href='homepage.php'" src="assets/img/back kayu.png" />
        <img class="image1" src="assets/img/image 2.png" />
        <div class="profile-background"></div>
        <img class="image2" src="assets/img/kayu.png" />
        <div class="overlay-container">
            <div class="overlay-item">
                <input type="text" class="input-username" value="<?php echo $row['username']; ?>" readonly>
            </div>
            <div class="overlay-item" style="top: 101px">
                <input type="text" class="input-fullname" value="<?php echo $row['nama']; ?>" readonly>
            </div>
            <div class="overlay-item3" style="top:203px;">
                <textarea class="input-bio" readonly><?php echo $row['bio']; ?></textarea>
            </div>
        </div>
        <div class="input-container">
            <div class="input-box" style="top: 0px;">Username </div>
            <div class="input-box" style="top: 203px;">Bio </div>
            <div class="input-box" style="top: 101px;">Nama Lengkap</div>
        </div>
        <?php
        if($_SESSION['role']=='pinocchio'){
            ?>
            <div class="button1" onclick="window.location.href='editprofil.php'">
                <div class="button1-inner"></div>
                <div class="button1-text">Edit Profile</div>
            </div>
            <?php
        }
        ?>
        <div class="button2" onclick="showLogoutPopup()">
            <div class="button2-inner"></div>
            <div class="button2-text">Keluar</div>
        </div>
        <div class="profile-title"><span style="color: #FDB50A;">Profile</span>ku</div>
    </div>

    <div id="logoutPopup" class="logout-popup" style="display: none;">
        <div class="popup-content">
            Yakin untuk logout?
            <div class="popup-buttons">
                <div class="popup-button popup-button-yes" onclick="logout()">YA</div>
                <div class="popup-button popup-button-no" onclick="hideLogoutPopup()">TIDAK</div>
            </div>
        </div>
    </div>

    <script>
        function showLogoutPopup() {
            document.getElementById('logoutPopup').style.display = 'flex';
        }

        function hideLogoutPopup() {
            document.getElementById('logoutPopup').style.display = 'none';
        }

        function logout() {
            window.location.href='logout.php';
        }

    </script>
</body>

</html>
