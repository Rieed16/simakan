<?php
require_once 'connection.php';

$username = $_POST['username'];
$password_baru = $_POST['password_baru'];


$cek_user = "SELECT * FROM users WHERE username = '$username'";
$hasil_cek = $conn->query($cek_user);

if ($hasil_cek->num_rows > 0) {
    $sql_update = "UPDATE users SET password = '$password_baru' WHERE username = '$username'";
    
    if ($conn->query($sql_update) === TRUE) {
        // Jika sukses di-update, munculkan notifikasi lalu pindahkan ke index.html
        echo "<script>
                alert('Berhasil! Kata sandi baru sudah disimpan. Silakan masuk menggunakan sandi baru.');
                window.location.href = 'index.html';
              </script>";
    } else {
        // Jika sistem gagal meng-update
        echo "<script>
                alert('Waduh, terjadi kesalahan sistem saat mereset sandi.');
                window.location.href = 'lupa_sandi.html';
              </script>";
    }
    
} else {
    // Jika username TIDAK ADA di database
    echo "<script>
            alert('Username tidak ditemukan di sistem kami!');
            window.location.href = 'lupa_sandi.html';
          </script>";
}
?>