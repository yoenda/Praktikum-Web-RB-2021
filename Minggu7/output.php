<table id="tabeldata">
        <tr>
            <th>Name</th>
            <th>Sex</th>
            <th>Old</th>
            <th>Phone Number</th>
            <th>Setting</th>
        </tr>
        <?php
        include "connect.php";
        $hasil=mysqli_query($kon,"select * from data_pembeli order by nama asc");

        while($data = mysqli_fetch_array($hasil)):
        ?>
        <tr>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['umur']; ?></td>
            <td><?php echo $data['no_telepon']; ?></td>
            <td><input id="btn_edit" type="button" value="Edit Data"><br><input id="btn_hapus" type="button" value="Hapus Data"></td>
        </tr>
        <?php endwhile; ?>
</table>

<script>
    $(document).ready(function(){

        $('#tabeldata').on('click','#btn_edit',function(){
            $('html, body').animate({scrollTop: 0});
            var baris = $(this).closest('tr').find("td:first").html();
            $('#nama').val(baris);
            $('#edit').show();
            $('#batal').show();
            $('#nama').show();
        });

        $('#tabeldata').on('click','#btn_hapus', function(){
            var id = $(this).closest('tr').find("td:first").html();
            var data = {nama:baris};
            $.ajax({
                type : "POST",
                url : "erase.php",
                data : data,
                cache : false,
                success : function(data){
                    $('#tampil_data').load("output.php");
                }
            });
        });      
    });
</script>