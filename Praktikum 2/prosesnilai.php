<?php
// tangkap input form
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$UTS = $_GET['UTS'];
$UAS = $_GET['UAS'];
$tugas = $_GET['tugas'];

// hitung nilai total (30% UTS + 35% UAS + 35% tugas)
$nilai_total = (30 / 100 * $UTS) + (35 / 100 * $UAS) + (35 / 100 * $tugas);

if ($nilai_total > 55) {
    $status = 'Lulus';
} else {
    $status = 'Tidak Lulus';
}

// tentukan grade
if ($nilai_total >= 0 && $nilai_total <= 35) {
    $grade = 'E';
} elseif ($nilai_total >= 36 && $nilai_total <= 55) {
    $grade = 'D';
} elseif ($nilai_total >= 56 && $nilai_total <= 69) {
    $grade = 'C';
} elseif ($nilai_total >= 70 && $nilai_total <= 84) {
    $grade = 'B';
} elseif ($nilai_total >= 85 && $nilai_total <= 100) {
    $grade = 'A';
} else {
    $grade = 'I';
}
// tentukan predikat 
if ($nilai_total >= 0 && $nilai_total <= 35) {
    $predikat = 'Sangat Kurang';
} elseif ($nilai_total >= 36 && $nilai_total <= 55) {
    $predikat = 'Kurang';
} elseif ($nilai_total >= 56 && $nilai_total <= 69) {
    $predikat = 'Cukup';
} elseif ($nilai_total >= 70 && $nilai_total <= 84) {
    $predikat = 'Memuaskan';
} elseif ($nilai_total >= 85 && $nilai_total <= 100) {
    $predikat = 'Sangat Memuaskan';
} else {
    $predikat = 'Tidak Ada';
}
// tampilkan hasil form
echo "Nama Lengkap: $nama";
echo "<br> Mata Kuliah: $matkul";
echo "<br> Nilai UTS: $UTS";
echo "<br> Nilai UAS: $UAS";
echo "<br> Nilai Tugas: $tugas";
echo "<br> Nilai Total: $nilai_total";
echo "<br> Status: $status ";
echo "<br> Grade: $grade ";
echo "<br> Predikat: $predikat";