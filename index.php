<?php
    $phi = 3.14;

    function luasLingkaran($r){
        global $phi;
        $luas = $phi * ($r/3) * ($r/3);
        return $luas;  
    }

    function kelilingLingkaran($r){
        global $phi;
        $keliling = 2 * $phi * ($r/5);
        return $keliling;  
    }

    function luasPersegi($panjang, $lebar){
        $luas = ($panjang/3) * ($lebar/5);
        return $luas;  
    }

    for ($angka = 1; $angka <= 100; $angka++) {
        if ($angka%3 == 0 && $angka%5 == 0) {
            $luasPersegi = luasPersegi($angka, $angka);
            echo number_format($luasPersegi,2);
            // echo $luasPersegi;
            echo "<br>";
        } elseif ($angka%5 == 0) {
            $kelilingLingkaran = kelilingLingkaran($angka);
            echo number_format($kelilingLingkaran,2);
            // echo $kelilingLingkaran;
            echo "<br>";
        } elseif ($angka%3 == 0) {
            $luasLingkaran = luasLingkaran($angka);
            echo number_format($luasLingkaran,2);
            // echo $luasLingkaran;
            echo "<br>";
        } else {
            echo number_format($angka,2);
            // echo $angka;
            echo "<br>";
        }
    }
?>
