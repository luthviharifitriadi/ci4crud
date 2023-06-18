    <?php echo $this->extend("layout/layout_utama") ?>
    
    
    <?= $this->section("konten_utama") ?>
        <table border="1">
            <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($halaman_isi as $key => $value) : ?>
                <tr>
                    <td><?= $value['halaman_judul'] ?></td>
                    <td><?= $value['halaman_isi'] ?></td>
                    <td>
                        <a href="<?= base_url()?>halaman/halaman_update">update</a>
                    </td>
                </tr>

            <?php endforeach ?>

        </table>
    <?= $this->endSection() ?>
