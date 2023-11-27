<?php
include "koneksi.php";
session_start();

if($_SESSION['role']=='pinocchio'){
    header('Location: loginpino.html');
} else {
    header('Location: logingepeto.html');
}
?>