<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM paramedik";
$pasiens = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
    <h3 class="me-auto">Periksa</h3>
</div>
    <table class="table mt-4">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kategori</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Id Unit Kerja</th>
        </tr>

        <?php

        foreach($pasiens as $pasiens): ?>
        <tr>
    
            <td><?= $pasiens['id'] ?></td>
            <td><?= $pasiens['nama'] ?></td>
            <td><?= $pasiens['tmp_lahir'] ?></td>
            <td><?= $pasiens['tgl_lahir'] ?></td>
            <td><?= $pasiens['kategori'] ?></td>
            <td><?= $pasiens['telpon'] ?></td>
            <td><?= $pasiens['alamat'] ?></td>
            <td><?= $pasiens['unit_kerja_id'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>