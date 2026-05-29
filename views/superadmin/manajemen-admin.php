<?php

session_start();


if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'superadmin') {

    header("Location: /");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Otoritas Admin - SIMAKAN</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <script src="/assets/js/jquery.min.js"></script>
</head>

<body class="bg-brand-snow font-sans text-brand-dark antialiased">

    <!-- NAVIGATION BAR ATAS -->
    <nav class="bg-brand-dark text-brand-snow shadow-md sticky top-0 z-40 border-b-2 border-red-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Identitas Otoritas Root -->
                <div class="flex items-center space-x-3">
                    <div class="bg-red-600 p-2 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-shield-halved text-xl text-brand-snow"></i>
                    </div>
                    <div>
                        <span class="font-bold text-lg tracking-wider block leading-tight">SIMAKAN</span>
                        <span class="text-xs text-red-400 tracking-widest block uppercase font-bold">Super Administrator</span>
                    </div>
                </div>
                <!-- Tombol Pintas Kembali -->
                <div class="flex items-center space-x-4">
                    <a href="/superadmin/dashboard" class="text-sm bg-brand-slate/40 hover:bg-brand-slate text-brand-snow px-3 py-2 rounded-md transition flex items-center space-x-1">
                        <i class="fa-solid fa-arrow-left"></i> <span>Kembali ke Dashboard</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- CONTAINER UTAMA FORM -->
    <main class="max-w-xl mx-auto px-4 py-12">
        
        <!-- KARTU FORM INPUT UTAMA -->
        <div class="bg-brand-snow border border-brand-light rounded-2xl shadow-lg overflow-hidden">
            
            <!-- Header Kartu -->
            <div class="bg-brand-dark text-brand-snow px-6 py-4 border-b-2 border-red-500">
                <h2 class="text-lg font-bold flex items-center space-x-2">
                    <i class="fa-solid fa-user-plus text-red-500"></i>
                    <span>Registrasi Administrator Baru</span>
                </h2>
                <p class="text-xs text-brand-gray mt-0.5">Silakan isi bidang data di bawah ini untuk membuat otoritas admin baru.</p>
            </div>

            <!-- Form Pengiriman Data POST ke Folder Action -->
            <form action="/action/proses-tambah-admin.php" method="POST" class="p-6 space-y-5">
                
                <!-- Kotak Notifikasi Bahaya / Keamanan Medis -->
                <div class="bg-red-50 text-red-800 text-xs p-3 rounded-xl border border-red-100 flex items-start space-x-2.5">
                    <i class="fa-solid fa-circle-exclamation text-base mt-0.5 text-red-600"></i>
                    <span>
                        <strong>Peringatan Hak Akses:</strong> Akun ini secara instan akan dibekali wewenang penuh untuk mereset user petugas, menambah bangsal baru, serta melakukan modifikasi bypass data form gizi.
                    </span>
                </div>

                <!-- Input Field: Username -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Username / NIP Admin</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-brand-gray">
                            <i class="fa-solid fa-user-gear text-sm"></i>
                        </span>
                        <input type="text" name="username" required
                            class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition placeholder-brand-gray"
                            placeholder="Contoh: admin_gizi_02">
                    </div>
                </div>

                <!-- Input Field: Nama Lengkap -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Nama Lengkap Personil</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-brand-gray">
                            <i class="fa-solid fa-id-card text-sm"></i>
                        </span>
                        <input type="text" name="nama_lengkap" required
                            class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition placeholder-brand-gray"
                            placeholder="Masukkan nama lengkap beserta gelar...">
                    </div>
                </div>

                <!-- Input Field: Password -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Kata Sandi (Password)</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-brand-gray">
                            <i class="fa-solid fa-lock text-sm"></i>
                        </span>
                        <input type="password" name="password" required
                            class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition placeholder-brand-gray"
                            placeholder="Gunakan minimal 8 karakter sandi...">
                    </div>
                </div>

                <!-- Tombol Aksi Kendali Form -->
                <div class="flex items-center justify-end space-x-3 pt-4 border-t border-brand-light">
                    <a href="dashboard-superadmin.php" class="bg-brand-light text-brand-slate px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-brand-light/80 transition text-center">
                        Batal
                    </a>
                    <button type="submit" class="bg-red-600 text-brand-snow px-6 py-2.5 rounded-xl text-sm font-semibold hover:bg-red-700 shadow-md transition flex items-center space-x-2">
                        <i class="fa-solid fa-save"></i>
                        <span>Daftarkan Admin</span>
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>
</html>