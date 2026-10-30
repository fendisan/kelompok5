<div class="formcontainerkelompok5">
    <h2 class="formtitlekelompok5">Form Kirim Artikel Pembaca - RIDWAN DHARMA PUTRA (NIM: 2513010827)</h2>

    <form action="kelompok5.php?menu=2513010827" method="POST">
        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="penulis2513010827">Nama Penulis / Warga:</label>
            <input type="text" class="formcontrolkelompok5" id="penulis2513010827" name="penulis2513010827" required placeholder="Nama lengkap penulis">
        </div>

        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="topik2513010827">Topik Opini:</label>
            <input type="text" class="formcontrolkelompok5" id="topik2513010827" name="topik2513010827" required placeholder="Topik atau isu yang diangkat">
        </div>

        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="opini2513010827">Naskah Opini:</label>
            <textarea class="formcontrolkelompok5" id="opini2513010827" name="opini2513010827" rows="5" required placeholder="Tulis opini atau artikel Anda di sini..."></textarea>
        </div>

        <button type="submit" name="submit2513010827" class="btnsubmitkelompok5">Kirim Opini</button>
    </form>

    <?php
    // Proses data POST pada halaman yang sama
    if (isset($_POST['submit2513010827'])) {
        $penulis = htmlspecialchars($_POST['penulis2513010827']);
        $topik = htmlspecialchars($_POST['topik2513010827']);
        $opini = htmlspecialchars($_POST['opini2513010827']);

        echo "<div class='alertberhasilkelompok5'>";
        echo "<h4>Artikel Opini Telah Diterima!</h4>";
        echo "<p><strong>Penulis:</strong> $penulis</p>";
        echo "<p><strong>Topik:</strong> $topik</p>";
        echo "<p><strong>Isi Naskah:</strong> $opini</p>";
        echo "</div>";
    }
    ?>
</div>