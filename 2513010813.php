<div class="formcontainerkelompok5">
    <h2 class="formtitlekelompok5">Form Input Redaksi Berita - FENDI SANTOSO (NIM: 2513010813)</h2>

    <form action="kelompok5.php?menu=2513010813" method="POST">
        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="judul2513010813">Judul Berita:</label>
            <input type="text" class="formcontrolkelompok5" id="judul2513010813" name="judul2513010813" required placeholder="Masukkan judul berita...">
        </div>

        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="kategori2513010813">Kategori Berita:</label>
            <select class="formcontrolkelompok5" id="kategori2513010813" name="kategori2513010813" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Teknologi">Teknologi</option>
                <option value="Pendidikan">Pendidikan</option>
                <option value="Politik">Politik</option>
                <option value="Olahraga">Olahraga</option>
            </select>
        </div>

        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="isiberita2513010813">Isi Berita:</label>
            <textarea class="formcontrolkelompok5" id="isiberita2513010813" name="isiberita2513010813" rows="5" required placeholder="Tuliskan berita lengkap..."></textarea>
        </div>

        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="penulis2513010813">Nama Penulis Redaksi:</label>
            <input type="text" class="formcontrolkelompok5" id="penulis2513010813" name="penulis2513010813" required placeholder="Nama penulis redaksi">
        </div>

        <button type="submit" name="submit2513010813" class="btnsubmitkelompok5">Publikasikan Berita</button>
    </form>

    <?php
    // Proses data POST pada halaman yang sama
    if (isset($_POST['submit2513010813'])) {
        $judul = htmlspecialchars($_POST['judul2513010813']);
        $kategori = htmlspecialchars($_POST['kategori2513010813']);
        $isi = htmlspecialchars($_POST['isiberita2513010813']);
        $penulis = htmlspecialchars($_POST['penulis2513010813']);

        echo "<div class='alertberhasilkelompok5'>";
        echo "<h4>Berita Berhasil Diterbitkan!</h4>";
        echo "<p><strong>Judul:</strong> $judul</p>";
        echo "<p><strong>Kategori:</strong> $kategori</p>";
        echo "<p><strong>Penulis:</strong> $penulis</p>";
        echo "<p><strong>Isi Berita:</strong> $isi</p>";
        echo "</div>";
    }
    ?>
</div>