<div class="formcontainerkelompok5">
    <h2 class="formtitlekelompok5">Form Kritik & Saran Redaksi - DEBI APRIAN ALDIN ALDAMA (NIM: 2513010828)</h2>

    <form action="kelompok5.php?menu=2513010828" method="POST">
        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="pengirim2513010828">Nama Pengirim:</label>
            <input type="text" class="formcontrolkelompok5" id="pengirim2513010828" name="pengirim2513010828" required placeholder="Nama pengirim">
        </div>

        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="subjek2513010828">Subjek Pesan:</label>
            <input type="text" class="formcontrolkelompok5" id="subjek2513010828" name="subjek2513010828" required placeholder="Subjek kritik / saran">
        </div>

        <div class="formgroupkelompok5">
            <label class="formlabelkelompok5" for="pesan2513010828">Isi Kritik & Saran:</label>
            <textarea class="formcontrolkelompok5" id="pesan2513010828" name="pesan2513010828" rows="5" required placeholder="Tuliskan masukan untuk redaksi kami..."></textarea>
        </div>

        <button type="submit" name="submit2513010828" class="btnsubmitkelompok5">Kirim Masukan</button>
    </form>

    <?php
    // Proses data POST pada halaman yang sama
    if (isset($_POST['submit2513010828'])) {
        $pengirim = htmlspecialchars($_POST['pengirim2513010828']);
        $subjek = htmlspecialchars($_POST['subjek2513010828']);
        $pesan = htmlspecialchars($_POST['pesan2513010828']);

        echo "<div class='alertberhasilkelompok5'>";
        echo "<h4>Terima Kasih Atas Masukan Anda!</h4>";
        echo "<p><strong>Dari:</strong> $pengirim</p>";
        echo "<p><strong>Subjek:</strong> $subjek</p>";
        echo "<p><strong>Pesan:</strong> $pesan</p>";
        echo "</div>";
    }
    ?>
</div>