<div class="formcontainerkelompok5">
    <h2 class="formtitlekelompok5">Form Langganan Newsletter - IHDA FUAD ADI KUSUMA (NIM: 2513010818)</h2>

    <form action="kelompok5.php?menu=2513010818" method="POST">
        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="nama2513010818">Nama Lengkap:</label>
            <input type="text" class="formcontrolkelompok5" id="nama2513010818" name="nama2513010818" required placeholder="Masukkan nama Anda...">
        </div>

        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="email2513010818">Alamat Email:</label>
            <input type="email" class="formcontrolkelompok5" id="email2513010818" name="email2513010818" required placeholder="email@contoh.com">
        </div>

        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="frekuensi2513010818">Frekuensi Pengiriman Berita:</label>
            <select class="formcontrolkelompok5" id="frekuensi2513010818" name="frekuensi2513010818" required>
                <option value="Harian">Setiap Hari (Harian)</option>
                <option value="Mingguan">Setiap Minggu (Mingguan)</option>
                <option value="Bulanan">Setiap Bulan (Bulanan)</option>
            </select>
        </div>

        <button type="submit" name="submit2513010818" class="btnsubmitkelompok5">Daftar Langganan</button>
    </form>

    <?php
    // Proses data POST pada halaman yang sama
    if (isset($_POST['submit2513010818'])) {
        $nama = htmlspecialchars($_POST['nama2513010818']);
        $email = htmlspecialchars($_POST['email2513010818']);
        $frekuensi = htmlspecialchars($_POST['frekuensi2513010818']);

        echo "<div class='alertberhasilkelompok5'>";
        echo "<h4>Pendaftaran Langganan Berhasil!</h4>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Frekuensi:</strong> $frekuensi</p>";
        echo "</div>";
    }
    ?>
</div>