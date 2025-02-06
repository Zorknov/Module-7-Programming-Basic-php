<?php
function hitungPajak($gaji, $pegawaiTetap) {
    // Menentukan tarif pajak berdasarkan gaji bulanan
    if ($gaji >= 15000000) {
        $tarifPajak = 0.20;
    } elseif ($gaji >= 10000000) {
        $tarifPajak = 0.15;
    } elseif ($gaji >= 5000000) {
        $tarifPajak = 0.10;
    } else {
        $tarifPajak = 0.05;
    }

    // Menghitung potongan pajak awal
    $pajak = $tarifPajak * $gaji;

    // Jika pegawai tetap, tambahkan 5% dari total pajak
    if ($pegawaiTetap) {
        $pajak += 0.05 * $pajak;
    }

    // Menghitung gaji bersih
    $gajiBersih = $gaji - $pajak;

    // Menampilkan hasil perhitungan pajak
    echo "===== Rincian Pajak =====<br>";
    echo "Gaji Bulanan : Rp " . number_format($gaji, 0, ',', '.') . "<br>";
    echo "Status Pegawai: " . ($pegawaiTetap ? "Tetap" : "Kontrak") . "<br>";
    echo "Potongan Pajak : Rp " . number_format($pajak, 0, ',', '.') . "<br>";
    echo "Gaji Bersih : Rp " . number_format($gajiBersih, 0, ',', '.') . "<br><br>";
}

// Contoh penggunaan dengan beberapa skenario
hitungPajak(12000000, true);

?>
 