<h2> Tugas 1 Kalkulator </h2>
<form method="post" action="1.2.php">
    <p>
        Penjumlahan (+) <br> Pengurangan (-) <br> Pembagian&emsp;(/) <br> Perkalian&emsp;&ensp;(*) <br> Modulus&ensp;&emsp;(%) <br>
    </p>
    <label>Bilangan 1 = <label><input type="number" name="inputbil1"/><br>
    <label>Bilangan 2 = <label><input type="number" name="inputbil2"/><br>
    <label>Operator&emsp;  : <label><select name="operator">
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">/</option>
            <option value="4">*</option>
            <option value="5">%</option>
                                </select>
                                <br>
    <input type="submit" value="Hitung" name="hitung"/>
</form>