<?php
// init-superadmin.php

// 1. Panggil koneksi database barumu yang ada di folder config
require_once 'config/connection.php';

// 2. Tentukan data akun Superadmin yang mau kamu buat
$username = 'superadmin'; 
$nama_lengkap = 'Superadmin Utama';
$password_raw = 'admin123'; // Silakan ganti sesuai keinginanmu
$role = 'superadmin';

// 3. Enkripsi password menggunakan bcrypt agar sesuai dengan sistem login kita nanti
$password_hashed = password_hash($password_raw, PASSWORD_BCRYPT);

// 4. Cek apakah username sudah ada biar tidak duplikat
$check = $conn->prepare("SELECT id FROM users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    die("<h3>Akun dengan username '$username' sudah pernah dibuat sebelumnya!</h3>");
}
$check->close();

// 5. Eksekusi query INSERT ke tabel users
$query = "INSERT INTO users (username, nama_lengkap, password, role) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($query);

if ($stmt) {
    $stmt->bind_param("ssss", $username, $nama_lengkap, $password_hashed, $role);
    
    if ($stmt->execute()) {
        echo "<div style='font-family: sans-serif; padding: 20px; border: 1px solid #008DE1; background-color: #DEF2FF; rounded: 12px;'>";
        echo "<h2 style='color: #008DE1;'>🔥 Akun Superadmin Berhasil Dibuat!</h2>";
        echo "<p>Silakan gunakan data berikut untuk testing login:</p>";
        echo "<ul>";
        echo "<li><strong>Username:</strong> " . htmlspecialchars($username) . "</li>";
        echo "<li><strong>Password:</strong> " . htmlspecialchars($password_raw) . "</li>";
        echo "<li><strong>Role:</strong> " . htmlspecialchars($role) . "</li>";
        echo "</ul>";
        echo "<p style='color: #757575; font-size: 12px;'>⚠️ <strong>PENTING:</strong> Segera hapus file <code>init-superadmin.php</code> dari server Linux demi keamanan!</p>";
        echo "</div>";
    } else {
        echo "Gagal membuat akun: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Gagal menyiapkan query SQL.";
}