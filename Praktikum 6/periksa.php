<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM periksa";
$pasiens = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
    <h3 class="me-auto">Periksa</h3>
</div>
    <table class="table mt-4">
        <tr>
            <th>Id</th>
            <th>Tanggal</th>
            <th>Berat</th>
            <th>Tinggi</th>
            <th>Tensi</th>
            <th>Keterangan</th>
            <th>Id Pasien</th>
            <th>Id Dokter</th>
        </tr>

        <?php

        foreach($pasiens as $pasiens): ?>
        <tr>
    
            <td><?= $pasiens['id'] ?></td>
            <td><?= $pasiens['tanggal'] ?></td>
            <td><?= $pasiens['berat'] ?></td>
            <td><?= $pasiens['tinggi'] ?></td>
            <td><?= $pasiens['tensi'] ?></td>
            <td><?= $pasiens['keterangan'] ?></td>
            <td><?= $pasiens['pasien_id'] ?></td>
            <td><?= $pasiens['dokter_id'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>