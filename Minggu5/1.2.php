<h2> Hasil Perhitungan </h2>
<?php
$bil1 = $_POST["inputbil1"];
$bil2 = $_POST["inputbil2"];
$operator = $_POST["operator"];

fungsi($bil1, $bil2, $operator);

function fungsi($a, $b, $c){
    if($c == 1){
        echo 'Bilangan 1 = ', $a; echo '<br>';
        echo 'Bilangan 2 = ', $b; echo '<br>';
        echo '<br>';
        echo 'PENJUMLAHAN'; echo '<br>';
        echo 'Operator : +'; echo '<br>';
        echo 'Hasil : ', $a+ $b;
    }elseif($c == 2){
        echo 'Bilangan 1 = ', $a; echo '<br>';
        echo 'Bilangan 2 = ', $b; echo '<br>';
        echo 'PENGURANGAN'; echo '<br>';
        echo 'Operator : -'; echo '<br>';
        echo 'Hasil : ', $a - $b;
    }elseif($c == 3){
        echo 'Bilangan 1 = ', $a; echo '<br>';
        echo 'Bilangan 2 = ', $b; echo '<br>';
        echo 'PEMBAGIAN'; echo '<br>';
        echo 'Operator : /'; echo '<br>';
        echo 'Hasil : ', $a / $b;
    }elseif($c == 4){
        echo 'Bilangan 1 = ', $a; echo '<br>';
        echo 'Bilangan 2 = ', $b; echo '<br>';
        echo 'PERKALIAN'; echo '<br>';
        echo 'Operator : *'; echo '<br>';
        echo 'Hasil : ', $a * $b;
    }elseif($c == 5){
        echo 'Bilangan 1 = ', $a; echo '<br>';
        echo 'Bilangan 2 = ', $b; echo '<br>';
        echo 'MODULUS'; echo '<br>';
        echo 'Operator : %'; echo '<br>';
        echo 'Hasil : ', $a % $b;
    }else{
        echo 'Syntax Salah! Silahkan Ulangi!';
    }
}
?>