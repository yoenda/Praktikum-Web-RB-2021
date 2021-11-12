<h2> Tugas 2 Pengurutan Data </h2>
<?php
    $listArray = ['larine','aduh','qifuat','toda','anevi','samid','kifuat'];
    
    echo "Data Awal : ";
    for($i=0; $i < count($listArray); $i++){
        echo $listArray[$i]." ";
    }
    echo "<br>"; echo "<br>";
    function fungsi($Array){
        foreach($Array as $list){
            echo $list;
            echo "<br>";
        }   
    }
    sort($listArray);
    fungsi($listArray);
?>