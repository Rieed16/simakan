<?php
// action/login.php
session_start();

// Panggil koneksi (mundur 1 folder ke root, lalu masuk ke config)
require_once '../config/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_input = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password_input = $_POST['password'];

    if (empty($username_input) || empty($password_input)) {
        header("Location: ../auth.php?error=emptyfields"); 
        exit();
    }

    $query = "SELECT * FROM users WHERE username = ?";
    $stmt  = mysqli_prepare($conn, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username_input);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($user = mysqli_fetch_assoc($result)) {
            if (password_verify($password_input, $user['password'])) {
                
                session_regenerate_id(true);
                $_SESSION['id_user']  = isset($user['id_user']) ? $user['id_user'] : $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role']     = $user['role']; 

                // --- PENGALIHAN KONVENSIONAL LANGSUNG KE FILE ---
                if ($_SESSION['role'] === 'superadmin') {
                    header("Location: ../views/superadmin/dashboard-superadmin.php");
                } elseif ($_SESSION['role'] === 'admin') {
                    header("Location: ../views/admin/dashboard-admin.php");
                } elseif ($_SESSION['role'] === 'bangsal') {
                    header("Location: ../views/bangsal/dashboard-bangsal.php");
                } elseif ($_SESSION['role'] === 'dapur') {
                    header("Location: ../views/dapur/dashboard-dapur.php");
                } else {
                    header("Location: ../auth.php?error=unknownrole");
                }
                exit();

            } else {
                header("Location: ../auth.php?error=wronguserorpassword");
                exit();
            }
        } else {
            header("Location: ../auth.php?error=wronguserorpassword");
            exit();
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
} else {
    header("Location: ../auth.php");
    exit();
}