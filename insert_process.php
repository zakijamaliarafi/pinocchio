<?php
include "koneksi.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $jawaban_benar = $_POST['jawaban_benar'];
    $pilihan_jawaban_benar = strtoupper(substr($jawaban_benar,0,1));

    if($pilihan_jawaban_benar=='A' ||
       $pilihan_jawaban_benar=='B' ||
       $pilihan_jawaban_benar=='C' ||
       $pilihan_jawaban_benar=='D'
    ){
        $pertanyaan = $_POST['pertanyaan'];
        $tema = $_POST['tema'];
        $petunjuk = $_POST['petunjuk'];

        $insert = "INSERT INTO pertanyaan (pertanyaan, tipe, petunjuk, id_user) VALUES ('$pertanyaan', '$tema', '$petunjuk', '$_SESSION[id]')";
        if ($conn->query($insert) === TRUE){
            $select = "SELECT MAX(id_pertanyaan) as id FROM pertanyaan;";
            $result = mysqli_query($conn, $select);
            $row = mysqli_fetch_array($result);
            $id_pertanyaan = $row['id'];

            $jawaban_a = $_POST['jawaban_a'];
            $jawaban_b = $_POST['jawaban_b'];
            $jawaban_c = $_POST['jawaban_c'];
            $jawaban_d = $_POST['jawaban_d'];

            $nilai_jawaban_a = 0;
            $nilai_jawaban_b = 0;
            $nilai_jawaban_c = 0;
            $nilai_jawaban_d = 0;

            if($pilihan_jawaban_benar=='A'){
                $nilai_jawaban_a = 1;
            } elseif($pilihan_jawaban_benar=='B'){
                $nilai_jawaban_b = 1;
            } elseif($pilihan_jawaban_benar=='C'){
                $nilai_jawaban_c = 1;
            } else{
                $nilai_jawaban_d = 1;
            }

            $insert = "INSERT INTO jawaban (jawaban, pilihan, nilai, id_pertanyaan)
                       VALUES ('$jawaban_a', 'A', '$nilai_jawaban_a', '$id_pertanyaan'),
                       ('$jawaban_b', 'B', '$nilai_jawaban_b', '$id_pertanyaan'),
                       ('$jawaban_c', 'C', '$nilai_jawaban_c', '$id_pertanyaan'),
                       ('$jawaban_d', 'D', '$nilai_jawaban_d', '$id_pertanyaan')
            ";
            $result = mysqli_query($conn, $insert);
            if($result){
                header("Location: data_kuis.php?tema=$tema");
            } else {
                "terjadi kesalahan, silahkan coba lagi";
            }
        } else {
            echo "terjadi kesalahan, silahkan coba lagi";
        }
    } else {
        echo "terjadi kesalahan, silahkan coba lagi";
    }
}

?>