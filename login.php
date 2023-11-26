<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
    <form>
    <div class="container">
        
        <div class="background-overlay"></div>
        
        <img class="image image1" src="C:\Users\rafia\Documents\Kuliah\Semester 3\Pemrograman Web\Praktikum\Responsi2\pinokio\pinokio head.png" />
        <img class="image image2" src="C:\Users\rafia\Documents\Kuliah\Semester 3\Pemrograman Web\Praktikum\Responsi2\pinokio\pinocchio.png" />
        <img class="image image3" src="C:\Users\rafia\Documents\Kuliah\Semester 3\Pemrograman Web\Praktikum\Responsi2\pinokio\image 24.png" />
        <div class="red-box"></div>
        
        <div class="signup-section">
            <div class="signup-text">Belum punya akun?</div>
            <div class="signup-link" onclick="window.location.href='signup.html'">sign up</div>
        </div>
        <div class="input-box-username">
            <input type="text" class="input-field username" value="">
        </div>
        <div class="input-box-password">
            <input type="text" class="input-field password" value="">
        </div>
        <div class="section">
            <div class="field username">Username</div>
            <div class="field password">Password</div>
        </div>
        <div class="signup-button">
            <div class="signup-button-inner">
                <div><input type="submit" class="signup-button-text" onclick="showLoginFail(event)" value="LOG IN"></div>
            </div>
        </div>
        <div class="looking-for-text">
            <div class="looking-for-text-inner">Welcome <span class="everyone-text">Everyone</span></div>
        </div>
        <img class="image4" onclick="window.location.href='homepage.html'" src="C:\Users\rafia\Documents\Kuliah\Semester 3\Pemrograman Web\Praktikum\Responsi2\pinokio full\pinokio\back kayu.png" />
    </div>
    </form>

    <!-- Registration Fail Popup -->
    <div class="login-fail" style="display: none;">
        <div class="title">Login Gagal</div>
        <div class="subtitle">Username/Password yang anda masukkan salah</div>
        <div class="button-container" onclick="window.location.href='login.php'">
            <div class="button" onclick="hideLoginFail()">OK</div>
        </div>
        <img style="width: 62px; height: 62px; left: 160px; top: 45px; position: absolute" src="C:\Users\rafia\Documents\Kuliah\Semester 3\Pemrograman Web\Praktikum\Responsi2\pinokio full\pinokio\peringatan.png" />
    </div>


    <script>
        function showLoginFail(event) {
            event.preventDefault(); // Menghentikan perilaku bawaan formulir
            document.querySelector('.login-fail').style.display = 'flex';
        }

        function hideLoginFail() {
            document.querySelector('.login-fail').style.display = 'none';
        }
    </script>
</body>

</html>
