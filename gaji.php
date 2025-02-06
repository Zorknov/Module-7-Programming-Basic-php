<?php

$gaji = 1200000;
$pajak = 0 ;

$bulanan = $gaji-($pajak/100);

if ($gaji >= 150000){
    $pajak = 20;
    } elseif ($gaji >= 10000000 && $gaji < 150000){
         $pajak = 15;
    }elseif ($gaji >= 5000000 && $gaji < 10000000){
        $pajak = 10;
    }elseif ($gaji >= 2000000 && $gaji < 5000000){
        $pajak = 5;
    }else {
        $pajak = 0;
    }

    $persen = $pajak/100;
    $potongan = $gaji*$persen;
    $bersih = $gaji-$potongan;
   

    // echo "Gaji bulanan Anda adalah Rp. $bulanan";
    // echo "pajak yang harus dibayarkan adalah Rp. $pajak";
    // echo "jumlah gaji setelah pajak adalah Rp. $bulanan";

    echo "==========Rincian Pajak========== <br>";
    echo " bulanan : $gaji" . "<br>";
    echo " pajak : $pajak" . "%" . "<br>";
    echo " potongan :$potongan " . "<br>";
    echo " bersih : $bersih" . "<br>"; 



    $total_belanja = 1200000;
    $diskon = 0;


    if ($total_belanja >= 1500000) {
        $diskon = 20;
    }elseif ($total_belanja >= 1000000 && $total_belanja < 1500000) {
        $diskon = 15;
    }elseif ($total_belanja >= 500000 && $total_belanja < 1000000) {
        $diskon = 10;
    }

    $potongan = $total_belanja * ($diskon / 100);
    $total_bayar = $total_belanja - $potongan;

    echo "==========Rincian Belanja=========";
    echo " total belanja : $total_belanja " . "<br>";
    echo " diskon : $diskon " . "%" . "<br>";
    echo " potongan : $potongan " . "<br>";
    echo " total bayar : $total_bayar " . "<br>";

