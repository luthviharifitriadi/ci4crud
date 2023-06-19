    <?php echo $this->extend("layout/layout_utama") ?>
    
    
    <?= $this->section("konten_utama") ?>
    <h1><?= $title ?></h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" style="width:400px" name="halaman_judul" value="<?= $halaman_isi['halaman_judul'] ?>"/></td>
            </tr>
             <tr>
                <td>Isi</td>
                <td><textarea name="halaman_isi" style="width:400px"><?= $halaman_isi['halaman_isi'] ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan Data"></td>
            </tr>
        </table>

    </form>
    <?= $this->endSection() ?>
