<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Periksa apakah username sudah ada
    $check_query = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "Username sudah ada. Silakan coba lagi.";
    } else {
        // Tambahkan user ke database
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO user (username, password, role_user) VALUES ('$username', '$hash_password', 'pinocchio')";
        if ($conn->query($insert_query) === TRUE) {
            header("Location: login.html");
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}
$conn->close();
?>