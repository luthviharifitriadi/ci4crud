
    <h1><?= $judul_halaman ?></h1>
    <?= view_cell("\App\Libraries\Lib_halaman::info", ['kategori' => 'Berita', 'penulis'=>'Luthvi']) ?>
    <div><?= $isi_halaman ?></div>

    <div>
        <ul>
            <?php foreach ($gerakan5m as $key => $value) :?>
                <li><?= $value ?></li>
            <?php endforeach ?>
        </ul>
    </div>
