<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit_kerja";
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
        </tr>

        <?php

        foreach($pasiens as $pasiens): ?>
        <tr>
    
            <td><?= $pasiens['id'] ?></td>
            <td><?= $pasiens['nama'] ?></td>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>