<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Kelompok 5</title>
    <!-- Menghubungkan CSS khusus Kelompok 5 -->
    <link rel="stylesheet" href="kelompok5.css">
</head>
<body>

    <!-- Header & Navbar Fixed di Paling Atas Layar -->
    <div id="topwrapperkelompok5">
        <header id="headerkelompok5">
            <div class="topbarkelompok5">
                <div class="logokelompok5">
                    <h1>BERITA<span>KITA</span></h1>
                    <div class="subtitlestikelompok5">Portal Berita Terpercaya Kelompok 5</div>
                </div>
                <div>
                    <small>
                    <?php
                    $daftar_hari = [1 => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
                    $daftar_bulan = [1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    echo $daftar_hari[date('N')] . ", " . date('d') . " " . $daftar_bulan[date('n')] . " " . date('Y');
                    ?>
                    </small>
                </div>
            </div>
        </header>

        <!-- Navigasi Utama Menggunakan Parameter GET ?halaman=NIM sesuai papan tulis -->
        <nav class="navbarkelompok5">
            <ul class="navcontainerkelompok5">
                <li class="navitemkelompok5">
                    <a href="kelompok5.php" class="navlinkkelompok5 <?php echo !isset($_GET['halaman']) ? 'activekelompok5' : ''; ?>">Home</a>
                </li>
                <li class="navitemkelompok5">
                    <a href="kelompok5.php?halaman=2513010813" class="navlinkkelompok5 <?php echo (isset($_GET['halaman']) && $_GET['halaman'] == '2513010813') ? 'activekelompok5' : ''; ?>">Form Redaksi (Fendi)</a>
                </li>
                <li class="navitemkelompok5">
                    <a href="kelompok5.php?halaman=2513010818" class="navlinkkelompok5 <?php echo (isset($_GET['halaman']) && $_GET['halaman'] == '2513010818') ? 'activekelompok5' : ''; ?>">Form Langganan (Ihda)</a>
                </li>
                <li class="navitemkelompok5">
                    <a href="kelompok5.php?halaman=2513010827" class="navlinkkelompok5 <?php echo (isset($_GET['halaman']) && $_GET['halaman'] == '2513010827') ? 'activekelompok5' : ''; ?>">Form Opini (Ridwan)</a>
                </li>
                <li class="navitemkelompok5">
                    <a href="kelompok5.php?halaman=2513010828" class="navlinkkelompok5 <?php echo (isset($_GET['halaman']) && $_GET['halaman'] == '2513010828') ? 'activekelompok5' : ''; ?>">Form Kritik (Debi)</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Main Content Area -->
    <main id="mainkelompok5">
        <section class="contentkelompok5">
            
            <!-- Implementasi Logika GET Sesuai Materi di Papan Tulis -->
            <?php
            if (isset($_GET['halaman'])) {
                
                if ($_GET['halaman'] == '2513010813') {
                    include("2513010813.php");
                } 
                else if ($_GET['halaman'] == '2513010818') {
                    include("2513010818.php");
                } 
                else if ($_GET['halaman'] == '2513010827') {
                    include("2513010827.php");
                } 
                else if ($_GET['halaman'] == '2513010828') {
                    include("2513010828.php");
                } 
                else {
                    echo "<div class='boxkontribusikelompok5'><h4>Halaman tidak ditemukan!</h4></div>";
                }

            } else {
                // KONDISI ELSE UTAMA: Jika tidak ada parameter GET (?halaman=), tampilkan konten utama/home
            ?>
                <!-- Section 1: Home & Berita Terkini -->
                <div id="home" class="sectionkelompok5">
                    <div class="hero-bannerkelompok5">
                        <h2>Selamat Datang di Portal Berita Utama Kelompok 5</h2>
                        <p>Menyajikan berita terkini, teraktual, dan terpercaya mengenai teknologi, pendidikan, dan sains di Indonesia.</p>
                    </div>

                    <h3 style="margin-bottom: 15px; color: #2c3e50;">Berita Terkini</h3>
                    <div class="beritagridkelompok5">
                        <article class="cardberitakelompok5">
                            <div class="cardbodykelompok5">
                                <span class="badgekelompok5">Teknologi</span>
                                <h4 class="cardtitlekelompok5">Perkembangan Kecerdasan Buatan di Industri Informatika 2026</h4>
                                <p>Integrasi AI dalam pengembangan perangkat lunak semakin pesat dan memudahkan pengembang aplikasi web.</p>
                            </div>
                        </article>

                        <article class="cardberitakelompok5">
                            <div class="cardbodykelompok5">
                                <span class="badgekelompok5">Pendidikan</span>
                                <h4 class="cardtitlekelompok5">STMIK Amikom Surakarta Gelar Workshop Pemrograman Web</h4>
                                <p>Mahasiswa antusias mengikuti simulasi pembuatan sistem berbasis web interaktif.</p>
                            </div>
                        </article>

                        <article class="cardberitakelompok5">
                            <div class="cardbodykelompok5">
                                <span class="badgekelompok5">Sains</span>
                                <h4 class="cardtitlekelompok5">Inovasi Energi Terbarukan Dalam Kampus Modern</h4>
                                <p>Riset terbaru menunjukkan efisiensi tinggi penggunaan panel surya pada bangunan perkuliahan.</p>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Tabel Keterangan Kontribusi Anggota -->
                <div class="boxkontribusikelompok5">
                    <h3>Keterangan Kontribusi Anggota Kelompok 5</h3>
                    <div class="tabelwrapperkelompok5">
                        <table class="tabelkontribusikelompok5">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>NIM</th>
                                    <th>Kontribusi / Modul Form</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>FENDI SANTOSO</td>
                                    <td>2513010813</td>
                                    <td>Merancang Template CSS & Form Input Redaksi Berita (`2513010813.php`)</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>IHDA FUAD ADI KUSUMA</td>
                                    <td>2513010818</td>
                                    <td>Form Pendaftaran Langganan Newsletter (`2513010818.php`)</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>RIDWAN DHARMA PUTRA</td>
                                    <td>2513010827</td>
                                    <td>Form Pengiriman Artikel & Opini Pembaca (`2513010827.php`)</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>DEBI APRIAN ALDIN ALDAMA</td>
                                    <td>2513010828</td>
                                    <td>Form Kritik & Saran Redaksi (`2513010828.php`)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php
            } // Penutup block else utama
            ?>

        </section>

        <!-- Sidebar Navigation Menggunakan Parameter GET -->
        <aside class="sidebarkelompok5">
            <div class="boxkontribusikelompok5" style="position: sticky; top: 160px;">
                <h4>Menu Akses Cepat</h4>
                <ul style="list-style: none; margin-top: 10px;">
                    <li style="margin-bottom: 8px;"><a href="kelompok5.php?halaman=2513010813" style="color:#e74c3c; text-decoration:none;">▸ Form Redaksi (2513010813)</a></li>
                    <li style="margin-bottom: 8px;"><a href="kelompok5.php?halaman=2513010818" style="color:#e74c3c; text-decoration:none;">▸ Form Langganan (2513010818)</a></li>
                    <li style="margin-bottom: 8px;"><a href="kelompok5.php?halaman=2513010827" style="color:#e74c3c; text-decoration:none;">▸ Form Opini (2513010827)</a></li>
                    <li style="margin-bottom: 8px;"><a href="kelompok5.php?halaman=2513010828" style="color:#e74c3c; text-decoration:none;">▸ Form Kritik (2513010828)</a></li>
                </ul>
            </div>
        </aside>
    </main>

    <!-- Footer -->
    <footer id="footerkelompok5">
        <p>&copy; <?php echo date('Y'); ?> Kelompok 5 - STMIK Amikom Surakarta. All Rights Reserved.</p>
        <p>Kontak: <a href="mailto:kelompok5@amikom.ac.id" style="color:#e74c3c; text-decoration:none;">kelompok5@amikom.ac.id</a></p>
        <p>Catatan: Semua berita dan opini yang dikirimkan melalui form ini adalah tanggung jawab penulis masing-masing.</p>
