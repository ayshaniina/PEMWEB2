<?php 
// membuat array asosiatif (terdiri atas key & value)
$mhs = ['nama' => 'Aisyah', 
'nim' => '018', 
'prodi' => 'SI', 
'ips' => [
    1 => 3.98,
     2 => 3.99, 
     3 => 4.0,
    ],
];

// memanggil array asosiatif
echo "Nama : " . $mhs['nama']; 
echo "<br> IPS Semester 1: " . $mhs['ips'] ['1'];
echo "<br> IPS Semester 2: " . $mhs['ips'] ['2'];
echo "<br> IPS Semester 3: " . $mhs['ips'] ['3'];