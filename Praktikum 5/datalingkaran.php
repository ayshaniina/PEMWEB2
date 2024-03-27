<?php
require_once('classlingkaran.php');
echo "Nilai PHI: " . Lingkaran::PHI;

// instansiasi obj Lingkaran (new)
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(8);

// panggil method
echo "<br><br>Luas Lingkar 1: " . $lingkar1->getLuas();
echo "<br>Luas Lingkar 2: " . $lingkar2->getLuas();

echo "<br><br>Luas Lingkar 1: " . $lingkar1->getKeliling();
echo "<br>Luas Lingkar 2: " . $lingkar2->getKeliling();
