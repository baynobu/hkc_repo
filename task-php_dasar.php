<?php
    // function untuk menghitung luas lingkaran
    function luas_lingkaran($r) {
      $pi = 3.14;
      return number_format($pi * $r * $r, 2);
    }
    
    // function untuk menghitung keliling lingkaran
    function keliling_lingkaran($r) {
      $pi = 3.14;
      return number_format(2 * $pi * $r, 2);
    }
    
    // function untuk menghitung luas persegi
    function luas_persegi($p, $l) {
      return number_format($p * $l, 2);
    }
    
    // perulangan untuk mencetak angka dari 1 hingga 100
    for ($i = 1; $i <= 100; $i++) {
      if ($i % 3 == 0 && $i % 5 == 0) {
        // menghitung luas persegi
        $panjang = $i / 3;
        $lebar = $i / 5;
        $luas_persegi = luas_persegi($panjang, $lebar);
        echo $luas_persegi . "\n";
      }
      else if ($i % 3 == 0) {
        // hitung luas lingkaran
        $r = $i / 3;
        $luas_lingkaran = luas_lingkaran($r);
        echo $luas_lingkaran . "\n";
      }
      else if ($i % 5 == 0) {
        // hitung keliling lingkaran
        $r = $i / 5;
        $keliling_lingkaran = keliling_lingkaran($r);
        echo $keliling_lingkaran . "\n";
      }
      else {
        echo number_format($i, 2) . "\n";
      }
    }
?>