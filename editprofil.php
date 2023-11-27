<?php
include "koneksi.php";
session_start();

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
    <link rel="stylesheet" href="assets/css/editprofilstyle.css">
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="container">
        <div class="gradient-background"></div>
        <img class="image1" src="assets/img/image 2.png" />
        <div class="profile-background"></div>
        <img class="image2" src="assets/img/kayu.png" />
        <div class="overlay-container">
            <div class="overlay-item">
                <input type="text" class="edit-username" name="username" value="<?php echo $row['username']; ?>">
            </div>
            <div class="overlay-item" style="top: 101px">
                <input type="text" class="edit-fullname" name="nama" value="<?php echo $row['nama']; ?>">
            </div>
            <div class="overlay-item3" style="top:203px;">
                <textarea class="edit-bio" name="bio"><?php echo $row['bio']; ?></textarea>
            </div>
        </div>
        <div class="input-container">
            <div class="input-box" style="top: 0px;">Username </div>
            <div class="input-box" style="top: 203px;">Bio </div>
            <div class="input-box" style="top: 101px;">Full Name</div>
        </div>
        <div class="button1">
            <div class="button1-inner">
                <div><input type="submit" name="edit" class="button1-text" value="Save"></div>
            </div>
        </div>
        <div class="button2" onclick="window.location.href='profil.php'">
            <div class="button2-inner"></div>
            <div class="button2-text">Cancel</div>
        </div>
        <div class="profile-title">Edit <span style="color: #FDB50A;">Profile</span></div>
    </div>
    </form>

    <!-- Edit Profile Success Popup -->
    <div id="editProfileSuccessPopup" class="popup-container">
        <div class="popup-content">
            <div class="popup-message">Edit Profil Berhasil!</div>
            <div class="popup-button" onclick="hideEditProfileSuccessPopup()">
                <div class="popup-button-text">OK</div>
            </div>
        </div>
    </div>

    <script>
        function showEditProfileSuccessPopup() {
            document.getElementById('editProfileSuccessPopup').style.display = 'flex';
        }

        function hideEditProfileSuccessPopup() {
            document.getElementById('editProfileSuccessPopup').style.display = 'none';
            window.location.href='profil.php';
        }
    </script>
    <?php
    if (isset($_POST['edit'])){
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $bio = $_POST['bio'];

        $update = "UPDATE user set username='$username', nama='$nama', bio='$bio' WHERE id_user='$_SESSION[id]'";
        $query = mysqli_query($conn,$update);
        if($query){
            echo "<script>showEditProfileSuccessPopup()</script>";
        } else {
            echo "<script>alert('terjadi kesalahan')</script>";
        }
    }
    ?>
</body>

</html>
