<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Bangsal - SIMAKAN</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
</head>
<body class="bg-brand-snow font-sans text-brand-dark antialiased">

    <nav class="sticky top-0 z-50 bg-brand-snow border-b border-brand-light px-6 py-4 flex items-center justify-between shadow-sm">
        <div class="flex items-center space-x-3">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-brand-primary block">SIMAKAN RSUD</span>
                <h1 class="text-lg font-extrabold text-brand-dark tracking-tight -mt-1">Digitalisasi Form Makanan</h1>
            </div>
        </div>
        
        <div class="flex items-center space-x-4">
            <div class="text-right hidden md:block">
                <p class="text-sm font-bold text-brand-dark">Perawat Siska, A.Md.Kep</p>
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-brand-light text-brand-primary border border-brand-primary/20">
                    <span class="h-1.5 w-1.5 rounded-full bg-brand-primary"></span>
                    Ruang Palem
                </span>
            </div>
            <div class="h-10 w-10 rounded-xl bg-brand-snow border border-brand-light flex items-center justify-center text-brand-gray shadow-inner">
                <i class="fa-solid fa-user-nurse text-lg"></i>
            </div>
            <a href="action/logout.php" class="text-brand-gray hover:text-rose-600 p-2 rounded-lg transition-colors" title="Keluar">
                <i class="fa-solid fa-right-from-bracket text-lg"></i>
            </a>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8 space-y-6">
        
        <div class="bg-gradient-to-r from-brand-primary to-brand-accent rounded-2xl p-6 md:p-8 shadow-xl shadow-brand-light text-brand-snow flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div class="space-y-2">
                <h2 class="text-2xl font-black tracking-tight md:text-3xl">Selamat Datang di Portal Bangsal 👋</h2>
                <p class="text-brand-light/90 text-sm md:text-base max-w-xl">
                    Silakan input lembar permintaan makanan pasien Anda hari ini secara berkala sesuai dengan jadwal *shift* makan dapur.
                </p>
            </div>
            <div class="flex-shrink-0">
                <a href="form-input.php" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-brand-dark hover:bg-brand-dark/90 active:transform active:scale-95 text-brand-snow font-bold rounded-xl shadow-lg transition-all text-sm md:text-base">
                    <i class="fa-solid fa-circle-plus text-lg text-brand-light"></i>
                    Buat Permintaan Baru
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            
            <div class="bg-brand-snow rounded-xl p-5 border border-brand-light shadow-sm flex items-start justify-between">
                <div class="space-y-1">
                    <p class="text-xs font-semibold text-brand-gray uppercase tracking-wider">Shift Pagi</p>
                    <h3 class="text-lg font-bold text-brand-dark">Makan Pagi</h3>
                    <span class="inline-flex mt-2 px-2.5 py-1 rounded-lg text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">
                        <i class="fa-solid fa-circle-check mr-1.5 mt-0.5"></i> Terkirim (Selesai)
                    </span>
                </div>
                <div class="p-3 bg-brand-light text-brand-primary rounded-xl">
                    <i class="fa-solid fa-cloud-sun text-xl"></i>
                </div>
            </div>

            <div class="bg-brand-snow rounded-xl p-5 border border-brand-light shadow-sm flex items-start justify-between">
                <div class="space-y-1">
                    <p class="text-xs font-semibold text-brand-gray uppercase tracking-wider">Shift Siang</p>
                    <h3 class="text-lg font-bold text-brand-dark">Makan Siang</h3>
                    <span class="inline-flex mt-2 px-2.5 py-1 rounded-lg text-xs font-medium bg-brand-light text-brand-primary border border-brand-primary/20 animate-pulse">
                        <i class="fa-solid fa-spinner fa-spin mr-1.5 mt-0.5"></i> Sedang Diproses Dapur
                    </span>
                </div>
                <div class="p-3 bg-brand-light text-brand-accent rounded-xl">
                    <i class="fa-solid fa-sun text-xl"></i>
                </div>
            </div>

            <div class="bg-brand-snow rounded-xl p-5 border border-brand-light shadow-sm flex items-start justify-between">
                <div class="space-y-1">
                    <p class="text-xs font-semibold text-brand-gray uppercase tracking-wider">Shift Malam</p>
                    <h3 class="text-lg font-bold text-brand-dark">Makan Malam</h3>
                    <span class="inline-flex mt-2 px-2.5 py-1 rounded-lg text-xs font-medium bg-slate-100 text-brand-slate border border-slate-200">
                        <i class="fa-solid fa-clock mr-1.5 mt-0.5"></i> Belum Diisi
                    </span>
                </div>
                <div class="p-3 bg-brand-light text-brand-gray rounded-xl">
                    <i class="fa-solid fa-moon text-xl"></i>
                </div>
            </div>

        </div>

        <div class="bg-brand-snow rounded-xl border border-brand-light shadow-sm overflow-hidden">
            <div class="p-5 border-b border-brand-light flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h3 class="font-bold text-brand-dark text-lg">Riwayat Pengiriman Form</h3>
                    <p class="text-brand-gray text-xs mt-0.5">Menampilkan seluruh data log permintaan makanan dari Ruang Palem</p>
                </div>
                
                <div class="flex items-center gap-3">
                    <input type="date" class="bg-brand-snow border border-brand-light text-brand-dark rounded-lg px-3 py-1.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand-primary focus:border-brand-primary">
                    <button class="bg-brand-primary text-brand-snow font-semibold text-sm px-4 py-1.5 rounded-lg hover:bg-brand-primary/95 transition-colors">
                        <i class="fa-solid fa-filter mr-1.5"></i>Filter
                    </button>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-brand-light/40 border-b border-brand-light text-brand-gray font-bold text-xs uppercase tracking-wider">
                            <th class="py-3 px-5">ID Form</th>
                            <th class="py-3 px-5">Tanggal Pemberian</th>
                            <th class="py-3 px-5">Waktu Makan</th>
                            <th class="py-3 px-5">Sub Ruangan</th>
                            <th class="py-3 px-5">Total Pasien</th>
                            <th class="py-3 px-5">Status Dapur</th>
                            <th class="py-3 px-5 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-brand-light text-sm">
                        
                        <tr class="hover:bg-brand-light/20 transition-colors">
                            <td class="py-4 px-5 font-mono text-xs font-semibold text-brand-slate">#FM-20260527-01</td>
                            <td class="py-4 px-5 font-medium text-brand-dark">27 Mei 2026</td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-md text-xs font-semibold bg-brand-light text-brand-primary">
                                    Siang
                                </span>
                            </td>
                            <td class="py-4 px-5 text-brand-slate">Palem 2 & 3</td>
                            <td class="py-4 px-5 font-bold text-brand-dark">14 Pasien</td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold bg-blue-100 text-blue-800">
                                    Diproses
                                </span>
                            </td>
                            <td class="py-4 px-5 text-center">
                                <a href="detail_form.php?id=1" class="text-brand-primary hover:text-brand-accent font-bold text-xs inline-flex items-center gap-1 bg-brand-light/60 hover:bg-brand-light px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-solid fa-eye"></i> Lihat Detail
                                </a>
                            </td>
                        </tr>

                        <tr class="hover:bg-brand-light/20 transition-colors">
                            <td class="py-4 px-5 font-mono text-xs font-semibold text-brand-slate">#FM-20260527-02</td>
                            <td class="py-4 px-5 font-medium text-brand-dark">27 Mei 2026</td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-md text-xs font-semibold bg-brand-light text-brand-accent">
                                    Pagi
                                </span>
                            </td>
                            <td class="py-4 px-5 text-brand-slate">Palem 1, 2, 3</td>
                            <td class="py-4 px-5 font-bold text-brand-dark">18 Pasien</td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-800">
                                    Selesai
                                </span>
                            </td>
                            <td class="py-4 px-5 text-center">
                                <a href="detail_form.php?id=2" class="text-brand-primary hover:text-brand-accent font-bold text-xs inline-flex items-center gap-1 bg-brand-light/60 hover:bg-brand-light px-3 py-1.5 rounded-lg transition-colors">
                                    <i class="fa-solid fa-eye"></i> Lihat Detail
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="p-4 border-t border-brand-light flex items-center justify-between text-xs text-brand-gray">
                <span>Menampilkan 2 form terbaru</span>
                <div class="inline-flex shadow-sm rounded-lg overflow-hidden border border-brand-light">
                    <button class="bg-brand-snow px-3 py-1.5 hover:bg-brand-light font-medium text-brand-dark">Previous</button>
                    <button class="bg-brand-snow px-3 py-1.5 hover:bg-brand-light font-medium text-brand-dark">Next</button>
                </div>
            </div>
        </div>
    </main>

    <footer class="text-center py-6 text-xs text-brand-gray border-t border-brand-light mt-12">
        &copy; 2026 RSUD Andi Makassau. Sistem Berjalan pada Server Lokal Jaringan Internal.
    </footer>

</body>
</html>