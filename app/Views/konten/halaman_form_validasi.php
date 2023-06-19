<?php
    if(session()->getFlashdata('error')){
        echo "<ul>";
        foreach (session()->getFlashdata('error') as $key => $value) {

            echo "<li>$value</li>";
        }
        echo "</ul>";
    }

    if(session()->getFlashdata('sukses')){
        echo "<h1>". session()->getFlashdata("sukses") ."</h1>";
    }
?>
<form action="" method="POST">
    <div>Nama</div>
    <div><input type="text" name="nama" value="<?= old('nama') ?>"/></div>
    <div>Email</div>
    <div><input type="text" name="email"  value="<?= old('email') ?>"/></div>
    <div>Password</div>
    <div><input type="password" name="password"/></div>
    <div>Konfirmasi Password</div>
    <div><input type="password" name="konfirmasi_password"/></div>
    <input type="submit" name="submit" value="KIRIM DATA">
</form>