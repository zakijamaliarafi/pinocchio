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
if($id!="" && $tipe!=""){
    $sql = "delete from jawaban where id_pertanyaan='$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
        $sql = "delete from pertanyaan where id_pertanyaan='$id'";
        $query = mysqli_query($conn, $sql);
        if($query){
            header("Location: data_kuis.php?tema=$tipe");
            } else {
                echo "terjadi kesalahan, silahkan coba kembali";
            }
    }
}

?>