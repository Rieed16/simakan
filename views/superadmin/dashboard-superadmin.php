<?php
session_start();

// Cek apakah sudah login dan apakah rolenya beneran superadmin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'superadmin') {
    // Jika nakal, tendang balik ke halaman login di root folder (mundur 2 tingkat)
    header("Location: /");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Superadmin - SIMAKAN</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <script src="/assets/js/jquery.min.js"></script>
</head>

<body class="bg-brand-snow font-sans text-brand-dark antialiased">

    <nav class="bg-brand-dark text-brand-snow shadow-md sticky top-0 z-40 border-b-2 border-red-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center space-x-3">
                    <div class="bg-red-600 p-2 rounded-lg flex items-center justify-center animate-pulse">
                        <i class="fa-solid fa-shield-halved text-xl text-brand-snow"></i>
                    </div>
                    <div>
                        <span class="font-bold text-lg tracking-wider block leading-tight">SIMAKAN</span>
                        <span class="text-xs text-red-400 tracking-widest block uppercase font-bold">Super
                            Administrator</span>
                    </div>
                </div>

                <div class="hidden md:flex items-center space-x-2">
                    <a href="admin/dashboard"
                        class="bg-brand-primary text-brand-snow px-3 py-2 rounded-md text-sm font-semibold transition flex items-center space-x-2">
                        <i class="fa-solid fa-chart-line"></i> <span>Console</span>
                    </a>
                    <a href="#"
                        class="hover:bg-brand-slate/30 text-brand-light px-3 py-2 rounded-md text-sm font-medium transition flex items-center space-x-2">
                        <i class="fa-solid fa-user-lock"></i> <span>Manajemen Admin</span>
                    </a>
                    <a href="#"
                        class="hover:bg-brand-slate/30 text-brand-light px-3 py-2 rounded-md text-sm font-medium transition flex items-center space-x-2">
                        <i class="fa-solid fa-users"></i> <span>Semua Petugas</span>
                    </a>
                    <a href="#"
                        class="hover:bg-brand-slate/30 text-brand-light px-3 py-2 rounded-md text-sm font-medium transition flex items-center space-x-2">
                        <i class="fa-solid fa-database"></i> <span>Backup DB</span>
                    </a>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs text-brand-gray leading-none">Akses Tingkat Tertinggi</p>
                        <p class="text-sm font-semibold text-red-400">Root / Superadmin</p>
                    </div>
                    <a href="logout"
                        class="bg-red-600 hover:bg-red-700 text-brand-snow px-3 py-2 rounded-md text-sm font-medium transition flex items-center space-x-1">
                        <i class="fa-solid fa-power-off"></i> <span class="hidden sm:inline">Keluar</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div
            class="bg-gradient-to-r from-red-700 via-brand-dark to-brand-slate rounded-2xl p-6 text-brand-snow shadow-lg mb-8 border border-red-500/30">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-bold mb-1 flex items-center gap-2">
                        <i class="fa-solid fa-unlock-keyhole text-red-400"></i> Root Control Panel
                    </h1>
                    <p class="text-brand-light/80 text-sm">Anda memegang otoritas penuh atas infrastruktur data,
                        pembuatan akun tingkat administrator, dan audit forensik log SIMAKAN RSUD Andi Makkasau.</p>
                </div>
                <span
                    class="bg-red-600/30 text-red-200 text-xs font-bold uppercase tracking-widest px-3 py-2 rounded-xl border border-red-500/40 text-center self-start sm:self-center">
                    Sistem Mode: Secure Offline
                </span>
            </div>
        </div>

        <?php if (isset($_SESSION['success_msg'])): ?>
            <div
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6 text-sm font-semibold flex items-center space-x-2">
                <i class="fa-solid fa-circle-check text-lg"></i>
                <span><?php echo $_SESSION['success_msg'];
                unset($_SESSION['success_msg']); ?></span>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error_msg'])): ?>
            <div
                class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm font-semibold flex items-center space-x-2">
                <i class="fa-solid fa-triangle-exclamation text-lg"></i>
                <span><?php echo $_SESSION['error_msg'];
                unset($_SESSION['error_msg']); ?></span>
            </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div
                class="bg-brand-snow border border-brand-light p-5 rounded-2xl shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gray block mb-1">Total Admin
                        Level</span>
                    <span class="text-3xl font-extrabold text-brand-dark block">3 <span
                            class="text-sm font-medium text-brand-gray">Personil</span></span>
                </div>
                <div class="bg-red-50 p-4 rounded-xl text-red-600 text-2xl">
                    <i class="fa-solid fa-user-shield"></i>
                </div>
            </div>
            <div
                class="bg-brand-snow border border-brand-light p-5 rounded-2xl shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gray block mb-1">Total Akun
                        Petugas</span>
                    <span class="text-3xl font-extrabold text-brand-dark block">58 <span
                            class="text-sm font-medium text-brand-gray">User</span></span>
                </div>
                <div class="bg-brand-light/50 p-4 rounded-xl text-brand-primary text-2xl">
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>
            <div
                class="bg-brand-snow border border-brand-light p-5 rounded-2xl shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gray block mb-1">Ukuran
                        Database</span>
                    <span class="text-3xl font-extrabold text-brand-dark block">14.2 <span
                            class="text-sm font-medium text-brand-gray">MB</span></span>
                </div>
                <div class="bg-green-50 p-4 rounded-xl text-green-600 text-2xl">
                    <i class="fa-solid fa-server"></i>
                </div>
            </div>
            <div
                class="bg-brand-snow border border-brand-light p-5 rounded-2xl shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gray block mb-1">Sistem
                        Uptime</span>
                    <span class="text-3xl font-extrabold text-green-600 block">100%</span>
                </div>
                <div class="bg-emerald-50 p-4 rounded-xl text-emerald-600 text-2xl">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
            </div>
        </div>

        <div class="bg-brand-snow border border-brand-light rounded-2xl p-6 shadow-sm mb-8">
            <h2 class="text-base font-bold uppercase tracking-wider text-red-600 mb-4 flex items-center space-x-2">
                <i class="fa-solid fa-key"></i> <span>Aksi Eksklusif Otoritas Root</span>
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <button id="btnOpenModalAdmin"
                    class="bg-red-600 hover:bg-red-700 text-brand-snow p-4 rounded-xl font-semibold transition flex items-center justify-center space-x-3 shadow-md group">
                    <a href="manajemen-admin.php">
                        <i class="fa-solid fa-user-lock group-hover:scale-110 transition"></i>
                        <span>Tambah Akun Admin Baru</span>
                    </a>
                </button>
                <button
                    class="bg-brand-dark hover:bg-brand-dark/90 text-brand-snow p-4 rounded-xl font-semibold transition flex items-center justify-center space-x-3 shadow-sm group">
                    <i class="fa-solid fa-download group-hover:scale-110 transition"></i>
                    <span>Download Backup Database</span>
                </button>
                <a href="admin/dashboard"
                    class="bg-brand-light text-brand-primary p-4 rounded-xl font-bold transition flex items-center justify-center space-x-3 shadow-sm text-center hover:bg-brand-light/80">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>
                    <span>Bypass Ke Dashboard Admin</span>
                </a>
            </div>
        </div>

        <div class="bg-brand-snow border border-brand-light rounded-2xl shadow-sm overflow-hidden">
            <div
                class="p-6 border-b border-brand-light flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-lg font-bold text-brand-dark">Daftar Administrator Sistem Terdaftar</h2>
                    <p class="text-xs text-brand-gray">Hanya Anda yang dapat melihat, mereset password, atau mencabut
                        hak akses personil di tabel bawah ini.</p>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr
                            class="bg-brand-light/30 border-b border-brand-light text-brand-slate text-xs font-bold uppercase tracking-wider">
                            <th class="p-4">Username / NIP</th>
                            <th class="p-4">Nama Lengkap</th>
                            <th class="p-4">Level Tingkatan</th>
                            <th class="p-4 text-center">Status Keaktifan</th>
                            <th class="p-4 text-center">Tindakan Khusus</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-brand-light text-sm">
                        <tr class="hover:bg-brand-light/10 transition">
                            <td class="p-4 font-mono font-semibold text-brand-dark">admin_gizi_1</td>
                            <td class="p-4 font-medium">Andi Hermawan, S.Kom</td>
                            <td class="p-4">
                                <span
                                    class="bg-brand-light text-brand-primary text-xs px-2.5 py-1 rounded-md font-bold">
                                    Administrator Biasa
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                <span
                                    class="text-green-600 font-bold text-xs bg-green-100 px-2 py-0.5 rounded-full">Aktif</span>
                            </td>
                            <td class="p-4 text-center space-x-2">
                                <button class="text-brand-primary hover:underline text-xs font-bold"><i
                                        class="fa-solid fa-key"></i> Reset Pass</button>
                                <span class="text-brand-light">|</span>
                                <button class="text-red-600 hover:underline text-xs font-bold"><i
                                        class="fa-solid fa-user-minus"></i> Cabut Akses</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-brand-light/10 transition">
                            <td class="p-4 font-mono font-semibold text-brand-dark">admin_it_rs</td>
                            <td class="p-4 font-medium">Siti Rahma, S.T</td>
                            <td class="p-4">
                                <span
                                    class="bg-brand-light text-brand-primary text-xs px-2.5 py-1 rounded-md font-bold">
                                    Administrator Biasa
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                <span
                                    class="text-green-600 font-bold text-xs bg-green-100 px-2 py-0.5 rounded-full">Aktif</span>
                            </td>
                            <td class="p-4 text-center space-x-2">
                                <button class="text-brand-primary hover:underline text-xs font-bold"><i
                                        class="fa-solid fa-key"></i> Reset Pass</button>
                                <span class="text-brand-light">|</span>
                                <button class="text-red-600 hover:underline text-xs font-bold"><i
                                        class="fa-solid fa-user-minus"></i> Cabut Akses</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <div id="modalAdmin" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="fixed inset-0 bg-brand-dark/60 backdrop-blur-sm transition-opacity"></div>

        <div class="flex items-center justify-center min-h-screen p-4">
            <div
                class="bg-brand-snow border border-brand-light w-full max-w-md rounded-2xl shadow-xl z-10 overflow-hidden transform transition-all">

                <div
                    class="bg-brand-dark text-brand-snow px-6 py-4 flex items-center justify-between border-b-2 border-red-500">
                    <h3 class="text-base font-bold flex items-center space-x-2">
                        <i class="fa-solid fa-user-shield text-red-500"></i>
                        <span>Buat Akun Administrator Baru</span>
                    </h3>
                    <button type="button"
                        class="btnCloseModal text-brand-gray hover:text-brand-snow text-2xl transition leading-none">&times;</button>
                </div>

                <form action="action/proses-tambah-admin.php" method="POST" class="p-6 space-y-4">

                    <div
                        class="bg-red-50 text-red-800 text-xs p-3 rounded-xl border border-red-100 flex items-start space-x-2">
                        <i class="fa-solid fa-triangle-exclamation text-sm mt-0.5"></i>
                        <span>
                            <strong>Perhatian Keamanan:</strong> Akun ini akan memiliki hak akses penuh untuk
                            memanipulasi data master user bangsal, dapur, dan mengubah form transaksi harian.
                        </span>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Username /
                            NIP Admin</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-brand-gray">
                                <i class="fa-solid fa-user-gear text-sm"></i>
                            </span>
                            <input type="text" name="username" required
                                class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition placeholder-brand-gray"
                                placeholder="Contoh: admin_gizi_01">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Nama
                            Lengkap Pemegang Akses</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-brand-gray">
                                <i class="fa-solid fa-id-card text-sm"></i>
                            </span>
                            <input type="text" name="nama_lengkap" required
                                class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition placeholder-brand-gray"
                                placeholder="Masukkan nama beserta gelar...">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Kata Sandi
                            (Password)</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-brand-gray">
                                <i class="fa-solid fa-lock text-sm"></i>
                            </span>
                            <input type="password" name="password" required
                                class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl pl-10 pr-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition placeholder-brand-gray"
                                placeholder="Gunakan minimal 8 karakter...">
                        </div>
                    </div>

                    <div class="flex items-center justify-end space-x-3 pt-4 border-t border-brand-light">
                        <button type="button"
                            class="btnCloseModal bg-brand-light text-brand-slate px-4 py-2 rounded-xl text-sm font-semibold hover:bg-brand-light/80 transition">
                            Batal
                        </button>
                        <button type="submit"
                            class="bg-red-600 text-brand-snow px-5 py-2 rounded-xl text-sm font-semibold hover:bg-red-700 shadow-md transition flex items-center space-x-2">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Otorisasi & Simpan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>