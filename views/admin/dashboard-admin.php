<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SIMAKAN</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <script src="/assets/js/jquery.min.js"></script>
</head>
<body class="bg-brand-snow font-sans text-brand-dark antialiased">

    <!-- NAVIGATION BAR ATAS -->
    <nav class="bg-brand-dark text-brand-snow shadow-md sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo & Brand -->
                <div class="flex items-center space-x-3">
                    <div class="bg-brand-primary p-2 rounded-lg flex items-center justify-center">
                        <i class="fa-solid fa-user-shield text-xl text-brand-snow"></i>
                    </div>
                    <div>
                        <span class="font-bold text-lg tracking-wider block leading-tight">SIMAKAN</span>
                        <span class="text-xs text-brand-gray tracking-widest block uppercase">Portal Administrator</span>
                    </div>
                </div>

                <!-- Menu Utama Admin -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="dashboard_admin.php" class="bg-brand-primary text-brand-snow px-3 py-2 rounded-md text-sm font-semibold transition flex items-center space-x-2">
                        <i class="fa-solid fa-chart-pie"></i> <span>Dashboard</span>
                    </a>
                    <a href="#" class="hover:bg-brand-slate/30 text-brand-light px-3 py-2 rounded-md text-sm font-medium transition flex items-center space-x-2">
                        <i class="fa-solid fa-users"></i> <span>Manajemen User</span>
                    </a>
                    <a href="#" class="hover:bg-brand-slate/30 text-brand-light px-3 py-2 rounded-md text-sm font-medium transition flex items-center space-x-2">
                        <i class="fa-solid fa-hospital"></i> <span>Data Bangsal</span>
                    </a>
                    <a href="#" class="hover:bg-brand-slate/30 text-brand-light px-3 py-2 rounded-md text-sm font-medium transition flex items-center space-x-2">
                        <i class="fa-solid fa-file-invoice"></i> <span>Log Form Global</span>
                    </a>
                </div>

                <!-- Info Profil & Logout -->
                <div class="flex items-center space-x-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs text-brand-gray leading-none">Logged in as</p>
                        <p class="text-sm font-semibold text-brand-snow">Admin Utama</p>
                    </div>
                    <a href="logout.php" class="bg-red-600 hover:bg-red-700 text-brand-snow px-3 py-2 rounded-md text-sm font-medium transition flex items-center space-x-1">
                        <i class="fa-solid fa-right-from-bracket"></i> <span class="hidden sm:inline">Keluar</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTAINER -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        
        <!-- BANNER WELCOME -->
        <div class="bg-gradient-to-r from-brand-primary to-brand-accent rounded-2xl p-6 text-brand-snow shadow-lg mb-8">
            <h1 class="text-2xl sm:text-3xl font-bold mb-1">Selamat Datang, Administrator!</h1>
            <p class="text-brand-light/90 text-sm sm:text-base">Panel kendali pusat manajemen akun pengguna, data master bangsal, dan bypass pengawasan form gizi.</p>
        </div>

        <!-- 1. WIDGET RINGKASAN UTAMA (METRIK SISTEM) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Card 1: Total Bangsal -->
            <div class="bg-brand-snow border border-brand-light p-5 rounded-2xl shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gray block mb-1">Total Bangsal</span>
                    <span class="text-3xl font-extrabold text-brand-dark block">12</span>
                </div>
                <div class="bg-brand-light/50 p-4 rounded-xl text-brand-primary text-2xl">
                    <i class="fa-solid fa-hospital-user"></i>
                </div>
            </div>
            <!-- Card 2: Total Pengguna -->
            <div class="bg-brand-snow border border-brand-light p-5 rounded-2xl shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gray block mb-1">Pengguna Aktif</span>
                    <span class="text-3xl font-extrabold text-brand-dark block">45</span>
                </div>
                <div class="bg-brand-light/50 p-4 rounded-xl text-brand-accent text-2xl">
                    <i class="fa-solid fa-users-gear"></i>
                </div>
            </div>
            <!-- Card 3: Form Masuk Hari Ini -->
            <div class="bg-brand-snow border border-brand-light p-5 rounded-2xl shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gray block mb-1">Form Masuk Hari Ini</span>
                    <span class="text-3xl font-extrabold text-brand-dark block">8 / 12</span>
                </div>
                <div class="bg-green-100 p-4 rounded-xl text-green-600 text-2xl">
                    <i class="fa-solid fa-file-circle-check"></i>
                </div>
            </div>
            <!-- Card 4: Log Kendala Sistem -->
            <div class="bg-brand-snow border border-brand-light p-5 rounded-2xl shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-brand-gray block mb-1">Perlu Perhatian</span>
                    <span class="text-3xl font-extrabold text-amber-600 block">4</span>
                </div>
                <div class="bg-amber-100 p-4 rounded-xl text-amber-600 text-2xl">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
            </div>
        </div>

        <!-- 2. PANEL NAVIGASI CEPAT (QUICK ACTIONS) -->
        <div class="bg-brand-snow border border-brand-light rounded-2xl p-6 shadow-sm mb-8">
            <h2 class="text-base font-bold uppercase tracking-wider text-brand-slate mb-4 flex items-center space-x-2">
                <i class="fa-solid fa-bolt text-brand-primary"></i> <span>Aksi Cepat Manajemen</span>
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <button id="btnOpenModalUser" class="bg-brand-primary hover:bg-brand-primary/90 text-brand-snow p-4 rounded-xl font-semibold transition flex items-center justify-center space-x-3 shadow-sm group">
                    <i class="fa-solid fa-user-plus group-hover:scale-110 transition"></i>
                    <span>Tambah Akun Petugas</span>
                </button>
                <button id="btnOpenModalBangsal" class="bg-brand-accent hover:bg-brand-accent/90 text-brand-snow p-4 rounded-xl font-semibold transition flex items-center justify-center space-x-3 shadow-sm group">
                    <i class="fa-solid fa-folder-plus group-hover:scale-110 transition"></i>
                    <span>Tambah Bangsal Baru</span>
                </button>
                <a href="#" class="bg-brand-dark hover:bg-brand-dark/90 text-brand-snow p-4 rounded-xl font-semibold transition flex items-center justify-center space-x-3 shadow-sm text-center group">
                    <i class="fa-solid fa-magnifying-glass-chart group-hover:scale-110 transition"></i>
                    <span>Audit Log Form Global</span>
                </a>
            </div>
        </div>

        <!-- 3. LIVE MONITOR KEPATUHAN PENGISIAN FORM BANGSAL -->
        <div class="bg-brand-snow border border-brand-light rounded-2xl shadow-sm overflow-hidden mb-8">
            <div class="p-6 border-b border-brand-light flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h2 class="text-lg font-bold text-brand-dark">Monitor Aktivitas Pengisian Form Harian</h2>
                    <p class="text-xs text-brand-gray">Status kepatuhan input data makanan per shift dari setiap bangsal.</p>
                </div>
                <div class="text-xs font-semibold px-3 py-1.5 bg-brand-light text-brand-primary rounded-full self-start sm:self-center">
                    Hari Ini: 29 Mei 2026
                </div>
            </div>

            <!-- Tabel Monitoring Kepatuhan -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-brand-light/30 border-b border-brand-light text-brand-slate text-xs font-bold uppercase tracking-wider">
                            <th class="p-4">Nama Ruangan / Bangsal</th>
                            <th class="p-4 text-center">Shift Pagi</th>
                            <th class="p-4 text-center">Shift Siang</th>
                            <th class="p-4 text-center">Shift Malam</th>
                            <th class="p-4 text-center">Aksi Monitoring</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-brand-light text-sm">
                        <!-- Baris Bangsal 1 (Sudah Semua) -->
                        <tr class="hover:bg-brand-light/10 transition">
                            <td class="p-4 font-semibold text-brand-dark">Ruang Palem</td>
                            <td class="p-4 text-center">
                                <span class="bg-green-100 text-green-700 text-xs px-2.5 py-1 rounded-full font-bold inline-flex items-center space-x-1">
                                    <i class="fa-solid fa-check-double"></i> <span>Sudah Kirim</span>
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                <span class="bg-green-100 text-green-700 text-xs px-2.5 py-1 rounded-full font-bold inline-flex items-center space-x-1">
                                    <i class="fa-solid fa-check-double"></i> <span>Sudah Kirim</span>
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                <span class="bg-green-100 text-green-700 text-xs px-2.5 py-1 rounded-full font-bold inline-flex items-center space-x-1">
                                    <i class="fa-solid fa-check-double"></i> <span>Sudah Kirim</span>
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                <button class="text-brand-primary hover:text-brand-accent transition text-xs font-semibold border border-brand-light px-3 py-1 rounded-lg">
                                    <i class="fa-solid fa-eye"></i> Intip Data
                                </button>
                            </td>
                        </tr>
                        <!-- Baris Bangsal 2 (Ada yang Belum) -->
                        <tr class="hover:bg-brand-light/10 transition">
                            <td class="p-4 font-semibold text-brand-dark">Ruang Melati</td>
                            <td class="p-4 text-center">
                                <span class="bg-green-100 text-green-700 text-xs px-2.5 py-1 rounded-full font-bold inline-flex items-center space-x-1">
                                    <i class="fa-solid fa-check-double"></i> <span>Sudah Kirim</span>
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                <span class="bg-red-100 text-red-700 text-xs px-2.5 py-1 rounded-full font-bold inline-flex items-center space-x-1">
                                    <i class="fa-solid fa-clock"></i> <span>Belum Kirim</span>
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                <span class="bg-red-100 text-red-700 text-xs px-2.5 py-1 rounded-full font-bold inline-flex items-center space-x-1">
                                    <i class="fa-solid fa-clock"></i> <span>Belum Kirim</span>
                                </span>
                            </td>
                            <td class="p-4 text-center">
                                <button class="text-brand-primary hover:text-brand-accent transition text-xs font-semibold border border-brand-light px-3 py-1 rounded-lg">
                                    <i class="fa-solid fa-eye"></i> Intip Data
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

    <!-- ========================================== -->
    <!-- MODAL POPUP: TAMBAH AKUN PETUGAS (JQUERY) -->
    <!-- ========================================== -->
    <div id="modalUser" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <!-- Backdrop Blur -->
        <div class="fixed inset-0 bg-brand-dark/50 backdrop-blur-sm transition-opacity"></div>

        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-brand-snow border border-brand-light w-full max-w-md rounded-2xl shadow-xl z-10 overflow-hidden transform transition-all">
                <!-- Header Modal -->
                <div class="bg-brand-dark text-brand-snow px-6 py-4 flex items-center justify-between">
                    <h3 class="text-lg font-bold flex items-center space-x-2">
                        <i class="fa-solid fa-user-plus text-brand-primary"></i>
                        <span>Tambah Akun Petugas Baru</span>
                    </h3>
                    <button class="btnCloseModal text-brand-gray hover:text-brand-snow text-xl transition">&times;</button>
                </div>
                <!-- Form Modal -->
                <form action="action/proses_tambah_user.php" method="POST" class="p-6 space-y-4">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Username / NIP</label>
                        <input type="text" name="username" required class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition" placeholder="Masukkan username login...">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Nama Lengkap Petugas</label>
                        <input type="text" name="nama_lengkap" required class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition" placeholder="Nama personil/petugas...">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Password</label>
                        <input type="password" name="password" required class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition" placeholder="Masukkan kata sandi...">
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Hak Akses / Jabatan</label>
                        <select id="selectRole" name="role" required class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition">
                            <option value="">-- Pilih Akses --</option>
                            <option value="bangsal">User Bangsal (Ruangan)</option>
                            <option value="dapur">User Dapur Gizi</option>
                        </select>
                    </div>
                    <!-- Dropdown Pilihan Bangsal Dinamis (Hanya Muncul jika memilih Role Bangsal) -->
                    <div id="rowPilihanBangsal" class="hidden transition-all duration-300">
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Penempatan Bangsal</label>
                        <select name="bangsal_id" class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition">
                            <option value="">-- Pilih Ruangan Rumah Sakit --</option>
                            <option value="1">Ruang Palem</option>
                            <option value="2">Ruang Melati</option>
                            <option value="3">Ruang Seruni</option>
                        </select>
                    </div>
                    <!-- Footer Modal Buttons -->
                    <div class="flex items-center justify-end space-x-3 pt-4 border-t border-brand-light">
                        <button type="button" class="btnCloseModal bg-brand-light text-brand-slate px-4 py-2 rounded-xl text-sm font-semibold hover:bg-brand-light/80 transition">Batal</button>
                        <button type="submit" class="bg-brand-primary text-brand-snow px-4 py-2 rounded-xl text-sm font-semibold hover:bg-brand-primary/90 transition">Simpan Akun</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- MODAL POPUP: TAMBAH BANGSAL BARU (JQUERY) -->
    <!-- ========================================== -->
    <div id="modalBangsal" class="fixed inset-0 z-50 overflow-y-auto hidden">
        <div class="fixed inset-0 bg-brand-dark/50 backdrop-blur-sm transition-opacity"></div>
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-brand-snow border border-brand-light w-full max-w-md rounded-2xl shadow-xl z-10 overflow-hidden transform transition-all">
                <div class="bg-brand-dark text-brand-snow px-6 py-4 flex items-center justify-between">
                    <h3 class="text-lg font-bold flex items-center space-x-2">
                        <i class="fa-solid fa-folder-plus text-brand-accent"></i>
                        <span>Tambah Master Ruangan</span>
                    </h3>
                    <button class="btnCloseModal text-brand-gray hover:text-brand-snow text-xl transition">&times;</button>
                </div>
                <form action="action/proses_tambah_bangsal.php" method="POST" class="p-6 space-y-4">
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-brand-slate mb-1">Nama Ruangan / Paviliun</label>
                        <input type="text" name="nama_bangsal" required class="w-full bg-brand-snow border border-brand-light text-brand-dark rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-brand-primary transition" placeholder="Contoh: Ruang Bougenville, Anggrek...">
                    </div>
                    <div class="flex items-center justify-end space-x-3 pt-4 border-t border-brand-light">
                        <button type="button" class="btnCloseModal bg-brand-light text-brand-slate px-4 py-2 rounded-xl text-sm font-semibold hover:bg-brand-light/80 transition">Batal</button>
                        <button type="submit" class="bg-brand-accent text-brand-snow px-4 py-2 rounded-xl text-sm font-semibold hover:bg-brand-accent/90 transition">Tambah Ruangan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <!-- LOGIKA INTERAKSI MODAL OFFLINE JQUERY -->
    <script>
        $(document).ready(function() {
            // --- Logika Operasional Modal User ---
            $('#btnOpenModalUser').on('click', function() {
                $('#modalUser').removeClass('hidden');
            });

            // --- Logika Operasional Modal Bangsal ---
            $('#btnOpenModalBangsal').on('click', function() {
                $('#modalBangsal').removeClass('hidden');
            });

            // --- Event Universal Tutup Semua Modal ---
            $('.btnCloseModal').on('click', function() {
                $('#modalUser').addClass('hidden');
                $('#modalBangsal').addClass('hidden');
            });

            // --- Logika Form Kondisional (Munculkan Pilihan Bangsal jika Role == bangsal) ---
            $('#selectRole').on('change', function() {
                let selectedRole = $(this).val();
                if(selectedRole === 'bangsal') {
                    $('#rowPilihanBangsal').slideDown(300).removeClass('hidden');
                } else {
                    $('#rowPilihanBangsal').slideUp(300, function() {
                        $(this).addClass('hidden');
                    });
                }
            });
        });
    </script>
</body>
</html>