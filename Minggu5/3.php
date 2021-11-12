<h2> Tugas 3 Bilangan Prima </h2>
<?php
    echo "Bilangan prima dari 1-50 adalah ";

    function bilprima($a,$b){
        for($i=$a;$i<=$b;$i++){
            $bil=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0){
                    $bil=$bil+1;
                }
            }
            if($bil==2){
                echo "$i"; echo " ";
            }
        }
    }
    bilprima(1,50); 
?>