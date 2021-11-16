<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div>
            <h2> TOKO BUAHNYA ITERA </h2>
        </div>
    </header><br>

    <form method="post" action="anggaran.php">
        <div>
            <table >
                <tr>
                    <th>Mangga<br>Rp.15.000/kg</th><th>Jambu<br>Rp.13.000/kg</th><th>Salak<br>Rp.10.000/kg</th>
                </tr>
                <tr>
                    <td><input type="number" min="1" id="id_mangga" name="mangga" placeholder="jumlah berat">kg</td>
                    <td><input type="number" min="1" id="id_jambu" name="jambu" placeholder="jumlah berat">kg</td>
                    <td><input type="number" min="1" id="id_salak" name="salak" placeholder="jumlah berat">kg</td>
                </tr>
            </table>
        </div><br>
        <input type="submit" value="Edit" id="tambah"/>
    </form><br>
    <div id="daftarbuah"></div>

    <?php
        $mangga=$_POST['mangga'];
        $jambu=$_POST['jambu'];
        $salak=$_POST['salak'];

        class belanja{
            private $mangga, $jambu, $salak, $harga;

            public function __construct($mangga, $jambu, $salak, $harga){ //magicmethod
                $this->mangga = $mangga;
                $this->jambu = $jambu;
                $this->salak = $salak;
                $this->harga = $mangga*15000 + $jambu*13000 + $salak*10000;
            }
            public function getHarga(){
                return $this->harga;
            }
            public function __toString(){ //magicmethod 
                return "<table id='table3'>
                <tr>
                <td>Mangga {$this->mangga} kg</td>
                </tr><tr>
                <td>Jambu {$this->jambu} kg</td>
                </tr><tr>
                <td >Salak {$this->salak} kg</td>
                </tr>
                </table>";  
            }
        }
        $anggaran = new belanja($mangga, $jambu, $salak, $harga=0);
    ?>

    <table id="table2">
        <tr><th colspan="4">Anggaran Belanja</th></tr>
        <tr>
            <th>Mangga</th><th>Jambu</th><th>Salak</th><th>Total Berat</th>
        </tr>
        <tr>
            <td><?php echo "$mangga"; ?> kg</td><td><?php echo "$jambu"; ?> kg</td><td><?php echo "$salak"; ?> kg</td><td><?php echo "$mangga"+"$jambu"+"$salak"; ?> kg</td>
        </tr>
    </table><br>
    <input type="submit" value="Bayar" id="tambah" onclick="harga()"/><br><br>

    <div id="struk" style="border: 2px solid black;">
    <h3>Nota Total Belanja</h3>
        <?php echo $anggaran;?><br>
        <p>Harga total : (dalam rupiah) </p><p id="harga_total"></p>
    </div>

    <script text="text/javascript">//javascript
        function harga(){
 
            var jumlah = '<?php echo $anggaran->getHarga(); ?>';

            document.getElementById("harga_total").innerHTML = jumlah;
        }
    </script><br>
    <footer>Yoenda 119140120</footer>
</body>
</html>