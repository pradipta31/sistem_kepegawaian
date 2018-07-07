<?php
include 'head.php';
include 'left.php';

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Input Data Pensiun</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Tambah baru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" name="nip_peg">
                                           </div>
                                        <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" name="nama_peg">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Pensiun</label>
                                            <input class="form-control" name="jenis_pensiun">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pensiun</label>
                                            <input class="form-control" id="tgl_pensiun" name="tgl_pensiun" placeholder="Tanggal Pensiun" type="text"/></div>
                                         <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control " name="alamat_pensiun"></textarea>
                                        </div>
                                        
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <button type="submit" class="btn btn-primary" name="save">Selesai</button>
                                    </form>
                                    </div>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
<?php

include 'footer.php';
if (isset($_POST ['save'])) {
	$nip_peg=$_POST['nip_peg'];
    $nama_peg=$_POST['nama_peg'];
	$jenis_pensiun=$_POST['jenis_pensiun'];
    $tgl_pensiun=$_POST['tgl_pensiun'];
    $alamat_pensiun=$_POST['alamat_pensiun'];
    
    if ($nip_peg=="") 
	{
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }
	else if ($nama_peg=="") 
	{
        echo "<script language= 'javascript'>alert('Nama Masih kosong !')</script>";
    }
	else if ($jenis_pensiun=="") 
	{
        echo "<script language= 'javascript'>alert('Jenis Pensiun Masih kosong !')</script>";
    } 
	else if ($tgl_pensiun=="") 
	{
        echo "<script language= 'javascript'>alert('Tanggal Pensiun Masih kosong !')</script>";
    } 
	else if ($alamat_pensiun=="") 
	{
        echo "<script language= 'javascript'>alert('Alamat Pensiun Masih kosong !')</script>";
    }
	else 
	{
        $query="INSERT INTO tb_pensiun(nip_peg,nama_peg,jenis_pensiun, tgl_pensiun, alamat_pensiun) VALUES('$nip_peg','$nama_peg','$jenis_pensiun','$tgl_pensiun','$alamat_pensiun') ";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil disimpan');document.location='data_pensiun.php';</script>";
    }
}
?>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="tgl_pensiun"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>