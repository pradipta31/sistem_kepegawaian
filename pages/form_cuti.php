<?php
include 'head.php';
include 'left.php';
?>
    <?php
        $query = "SELECT * FROM user_pegawai WHERE nip='$nip'";
        $result = mysqli_query($connect,$query);
        $rows = mysqli_fetch_assoc($result);
    ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Input Data Cuti</h1>
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
                                            <input class="form-control" name="nip_peg" value="<?php echo $nip; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                        <label>Nama</label>
                                        <input class="form-control" name="nama_peg" value="<?php echo $rows['nama']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" size="87" maxlength="100" name="alamat" readonly><?php echo $rows['alamat'];?></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>No.Telp</label>
                                            <input class="form-control" name="telepon" value="<?php echo $rows['telp'];?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Cuti</label>
                                            <input class="form-control" name="jns_cuti">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Cuti</label>
                                            <input class="form-control" id="tgl_cuti" name="tgl_cuti" placeholder="Tanggal Cuti" type="text"/></div>
                                         <div class="form-group">
                                            <label>Lama Cuti</label>
                                            <input class="form-control" name="lama_cuti">
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
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];
	$jns_cuti=$_POST['jns_cuti'];
	$tgl_cuti=$_POST['tgl_cuti'];
	$lama_cuti=$_POST['lama_cuti'];
	
    if ($nip_peg=="") 
	{
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }
	else if ($nama_peg=="") 
	{
        echo "<script language= 'javascript'>alert('Nama Masih kosong !')</script>";
    }
	else if ($alamat=="") 
	{
        echo "<script language= 'javascript'>alert('Alamat Masih kosong !')</script>";
    }
	else if ($telepon=="") 
	{
        echo "<script language= 'javascript'>alert('Telepon Masih kosong !')</script>";
    }
	else if ($jns_cuti=="") 
	{
        echo "<script language= 'javascript'>alert('Jenis Cuti Masih kosong !')</script>";
    } 
	else if ($tgl_cuti=="") 
	{
        echo "<script language= 'javascript'>alert('Tanggal Pensiun Masih kosong !')</script>";
    } 
	else if ($lama_cuti=="") 
	{
        echo "<script language= 'javascript'>alert('Lama Cuti Pensiun Masih kosong !')</script>";
    }
	else 
	{
            $sql = "SELECT SUM(lama_cuti) FROM tb_cuti WHERE nip_peg = '$nip_peg'";
            $result = mysqli_query($connect,$sql) or print mysql_error();
            $row = mysqli_fetch_assoc($result);
            $penjumlahan = $lama_cuti + $row['SUM(lama_cuti)'];
            if ($penjumlahan > 12) {
                echo "<script>alert('Data cuti sudah mencapai batas');document.location='data_cuti_pegawai.php';</script>";
            
            //    elseif ($lama_cuti > 12) {
            //     echo "<script>alert('Data cuti anda melebihi batas!');document.location='data_cuti_pegawai.php';</script>";
            // }elseif ($lama_cuti) {
            //     # code...
            // }
            }else{
            $query="INSERT INTO tb_cuti(nip_peg,nama_peg,alamat, telepon, jns_cuti, tgl_cuti, lama_cuti) VALUES('$nip_peg','$nama_peg','$alamat','$telepon','$jns_cuti','$tgl_cuti','$lama_cuti') ";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil disimpan');document.location='data_cuti_pegawai.php';</script>";
        }
    }
}
?>

<script>
    $(document).ready(function(){
      var date_input=$('input[name="tgl_cuti"]'); //our date input has the name "date"
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