<?php
session_start();
require_once 'connection.php';

$username_input = $_POST['username'];
$password_input = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username_input' AND password = '$password_input'";

$hasil = $conn->query($sql);


if ($hasil->num_rows > 0) {
    // Ambil datanya
    $data_user = $hasil->fetch_assoc();
    
    // Login sukses! Simpan nama ke dalam session
    $_SESSION['username'] = $data_user['username'];
    
    // Pindah ke halaman dashboard
    header("Location: dashboard.php");
    exit;
} else {
    // Login gagal! Kembali ke halaman depan dengan pesan error
    header("Location: index.html?error=1");
    exit;
}
?>