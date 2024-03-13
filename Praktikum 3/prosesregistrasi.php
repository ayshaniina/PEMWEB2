<?php
//tangkap input form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilaiskill = [
    'HTML' => 10,
    'CSS' => 10,
    'JavaScript' => 20,
    'RWD Boostrap' => 20,
    'PHP' => 30,
    'Python' => 30,
    'Java' => 50,
];
$skorskill = 0;
foreach ($skills as $value) {
    $skorskill += $nilaiskill[$value];
} 

// tentukan kategori/predikkat
if ($skorskill <=  0) {
    $kategori = 'Tidak Memadai';
} elseif ($skorskill >= 0 && $skorskill <= 40) {
    $kategori = 'Kurang';
} elseif ($skorskill >= 40 && $skorskill <= 60) {
    $kategori = 'Cukup';
} elseif ($skorskill >= 60 && $skorskill <= 100) {
    $kategori = 'Baik';
} elseif ($skorskill >= 100 && $skorskill <= 150) {
    $kategori = 'Sangat Baik';
} else {
    $kategori = 'Tidak Ada Nilai';
}

echo "NIM: $nim";
echo "<br>Nama Lengkap: $nama";
echo "<br>Jenis Kelamin: $jk";
echo "<br>Program Studi: $prodi";
echo "<br>Skill :" . join(', ',$skills);
echo "<br>Tempat Domisili: $domisili";
echo "<br>Email: $email";
echo "<br>Score: $skorskill";
echo "<br>Kategori Skill: $kategori";
