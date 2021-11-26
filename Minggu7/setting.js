$(document).ready(function(){
        $('#batal').click(function(){
            $('#batal').hide();
            $('#edit').hide();
        });
        //nim harus sama dengan yang sebelum edit karena merupakan primary
        $('#edit').click(function(){
            
            var data = $('#form_mahasiswa').serialize();
            $.ajax({
                type : "POST",
                url : "edit.php",
                data : data,
                cache : false,
                success : function(data){
                    $('#tampil_data').load('output.php');
                }
            });
        });
        $('#edit').click(function(){
            $('#batal').hide();
            $('#edit').hide();
        });
        $('#tampil_data').load("output.php");
        $('#tabeldata').click(function(){
            var data = $('#form_mahasiswa').serialize();
            $.ajax({
                type : "POST",
                url : "erase.php",
                data : data,
                cache : false,
                success : function(data){
                    $('#tampil_data').load('output.php');
                }
            });
        });
    });