<?php


$nilai = 90;
$tugas = 90;
$absen = 85;

if ($nilai >= 90 && $absen >= 95 && $tugas >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70 && $tugas >= 80) {
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilai >= 65 && $absen >= 65 && $tugas >= 75) {
    echo "Nilai Anda C" .PHP_EOL;
}  elseif ( $nilai >= 60 && $absen >= 60 && $tugas >= 65) {
    echo "Nilai Anda D" .PHP_EOL;
} else {
    echo "Nilai Anda E" .PHP_EOL;
}