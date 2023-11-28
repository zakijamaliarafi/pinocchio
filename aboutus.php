<?php
include "koneksi.php";
session_start();

if($_SESSION['role']=='pinocchio'){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="styleguide.css" />
        <link rel="stylesheet" href="assets/css/aboutuspino.css" />
    </head>
    <body>
        <div class="about-us-pino">
        <div class="div">
            <div class="group">
            <div class="text-wrapper" onclick="window.location.href='loginpino.html'">HOME</div>
            <div class="text-wrapper-2" onclick="window.location.href='kuis.html'">KUIS</div>
            </div>
            <div class="overlap-wrapper">
                <div class="overlap-2">
                <div class="ellipse"></div>
                <img class="image-4" onclick="window.location.href='profil.php'" src="assets/img/profil pino.png" />
                </div>
            </div>
            <img class="image" src="assets/img/image 2.png" />
            <img class="pinocchio-tim" src="assets/img/Pinocchio Tim.png" />
            <div class="overlap">
            <div class="group-4">
                <div class="overlap-group">
                <div class="rectangle"></div>
                <div class="rectangle-2"></div>
                <img class="img" src="assets/img/bertha.png" />
                <div class="claresta-berthalita">
                    Claresta Berthalita Jatmika<br />H1D022050<br />UI/UX Designer
                </div>
                </div>
                <div class="rectangle-wrapper"><div class="rectangle-3"></div></div>
                <div class="div-wrapper"><div class="rectangle-4"></div></div>
            </div>
            <img class="image-2" src="assets/img/rafi.png" />
            <img class="image-3" src="assets/img/zaki.png" />
            <div class="muhammad-rafi">Muhammad Rafi Attariq<br />H1D022056<br />Frontend Developer</div>
            <p class="zaki-jamali-arafi">Zaki Jamali Arafi <br />H1D022048<br />Backend Developer</p>
            </div>
            <footer class="FOOTER">
                <p class="p">© 2023 Pinocchio. Hak Cipta Dilindungi</p>
                <p class="FOOTER-2">Menjelajahi Kebaikan, Kejujuran, dan Tanggung Jawab melalui Game Kuis yang Mendidik</p>
                <div class="group-2">
                <div class="text-wrapper-3">@pinocchio1_official</div>
                <div class="text-wrapper-4">@pinocchio_official</div>
                <div class="text-wrapper-5">@pinocchio_official</div>
                </div>
                <div class="group-3">
                <img class="fb" src="assets/img/fb.png" />
                <img class="twt" src="assets/img/twt.png" />
                <img class="ig" src="assets/img/ig.png" />
                </div>
            </footer>
        </div>
        </div>
    </body>
    </html>
    <?php
} elseif($_SESSION['role']=='geppetto'){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="styleguide.css" />
        <link rel="stylesheet" href="assets/css/aboutusgepeto.css" />
    </head>
    <body>
        <div class="about-us-gepeto">
        <div class="div">
            <div class="group">
            <div class="text-wrapper" onclick="window.location.href='logingepeto.html'">HOME</div>
            <div class="text-wrapper-2" onclick="window.location.href='kuis.html'">UJI</div>
            </div>
            <div class="overlap-wrapper" onclick="window.location.href='profil.php'">
                <div class="overlap-2">
                <div class="ellipse"></div>
                <img class="image-4"  src="assets/img/gepetoprofil1.png" />
                </div>
            </div>
            <img class="image" src="assets/img/image 2.png" />
            <img class="pinocchio-tim" src="assets/img/Pinocchio Tim.png" />
            <div class="overlap">
            <div class="group-4">
                <div class="overlap-group">
                <div class="rectangle"></div>
                <div class="rectangle-2"></div>
                <img class="img" src="assets/img/bertha.png" />
                <div class="claresta-berthalita">
                    Claresta Berthalita Jatmika<br />H1D022050<br />UI/UX Designer
                </div>
                </div>
                <div class="rectangle-wrapper"><div class="rectangle-3"></div></div>
                <div class="div-wrapper"><div class="rectangle-4"></div></div>
            </div>
            <img class="image-2" src="assets/img/rafi.png" />
            <img class="image-3" src="assets/img/zaki.png" />
            <div class="muhammad-rafi">Muhammad Rafi Attariq<br />H1D022056<br />Frontend Developer</div>
            <p class="zaki-jamali-arafi">Zaki Jamali Arafi <br />H1D022048<br />Backend Developer</p>
            </div>
            <footer class="FOOTER">
                <p class="p">© 2023 Pinocchio. Hak Cipta Dilindungi</p>
                <p class="FOOTER-2">Menjelajahi Kebaikan, Kejujuran, dan Tanggung Jawab melalui Game Kuis yang Mendidik</p>
                <div class="group-2">
                <div class="text-wrapper-3">@pinocchio1_official</div>
                <div class="text-wrapper-4">@pinocchio_official</div>
                <div class="text-wrapper-5">@pinocchio_official</div>
                </div>
                <div class="group-3">
                <img class="fb" src="assets/img/fb.png" />
                <img class="twt" src="assets/img/twt.png" />
                <img class="ig" src="assets/img/ig.png" />
                </div>
            </footer>
        </div>
        </div>
    </body>
    </html>
    <?php
} else{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="globals.css" />
        <link rel="stylesheet" href="styleguide.css" />
        <link rel="stylesheet" href="assets/css/aboutus.css" />
    </head>
    <body>
        <div class="about-us">
        <div class="div">
            <div class="group">
            <div class="text-wrapper" onclick="window.location.href='signup.html'">SIGN UP</div>
            <div class="text-wrapper-1" onclick="window.location.href='login.html'">LOGIN</div>
            <div class="text-wrapper-2" onclick="window.location.href='homepage.html'">HOME</div>
            </div>
            <img class="image" src="assets/img/image 2.png" />
            <img class="pinocchio-tim" src="assets/img/Pinocchio Tim.png" />
            <div class="overlap">
            <div class="group-4">
                <div class="overlap-group">
                <div class="rectangle"></div>
                <div class="rectangle-2"></div>
                <img class="img" src="assets/img/bertha.png" />
                <div class="claresta-berthalita">
                    Claresta Berthalita Jatmika<br />H1D022050<br />UI/UX Designer
                </div>
                </div>
                <div class="rectangle-wrapper"><div class="rectangle-3"></div></div>
                <div class="div-wrapper"><div class="rectangle-4"></div></div>
            </div>
            <img class="image-2" src="assets/img/rafi.png" />
            <img class="image-3" src="assets/img/zaki.png" />
            <div class="muhammad-rafi">Muhammad Rafi Attariq<br />H1D022056<br />Frontend Developer</div>
            <p class="zaki-jamali-arafi">Zaki Jamali Arafi <br />H1D022048<br />Backend Developer</p>
            </div>
            <footer class="FOOTER">
                <p class="p">© 2023 Pinocchio. Hak Cipta Dilindungi</p>
                <p class="FOOTER-2">Menjelajahi Kebaikan, Kejujuran, dan Tanggung Jawab melalui Game Kuis yang Mendidik</p>
                <div class="group-2">
                <div class="text-wrapper-3">@pinocchio1_official</div>
                <div class="text-wrapper-4">@pinocchio_official</div>
                <div class="text-wrapper-5">@pinocchio_official</div>
                </div>
                <div class="group-3">
                <img class="fb" src="assets/img/fb.png" />
                <img class="twt" src="assets/img/twt.png" />
                <img class="ig" src="assets/img/ig.png" />
                </div>
            </footer>
        </div>
        </div>
    </body>
    </html>
    <?php
}
?>
