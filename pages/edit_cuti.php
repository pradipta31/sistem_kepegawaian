<?php
include 'head.php';
include 'left.php';
if (isset($_GET['edit'])) {
  $nip_peg_edit=$_GET['edit'];
  $query="SELECT * FROM tb_cuti WHERE kode_cuti='$nip_peg_edit'";
  $sql=mysqli_query($connect,$query);
  $hasil=mysqli_fetch_array($sql);
  
}
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Data Cuti</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit Data Cuti
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" name="nip_peg_lama" value="<?=$hasil['nip_peg']?>" readonly='readonly'></div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama_peg" value="<?=$hasil['nama_peg']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control " name="alamat"><?=$hasil['alamat']?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>No.Telp</label>
                                            <input class="form-control" name="telepon" value="<?=$hasil['telepon']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Cuti</label>
                                            <input class="form-control" name="jns_cuti" value="<?=$hasil['jns_cuti']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Cuti</label>
                                            <input class="form-control" id="tgl_cuti" name="tgl_cuti" placeholder="Tanggal Cuti" value="<?=$hasil['tgl_cuti']?>" type="text"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Lama Cuti</label>
                                            <input class="form-control" name="lama_cuti" value="<?=$hasil['lama_cuti'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status" value="<?=$hasil['status'];?>">
                                                <option value="" <?= ($hasil['status'] == null) ? 'selected' : '' ; ?>>Belum Disetujui</option>
                                                <option value="1" <?= ($hasil['status'] == 1) ? 'selected' : '' ; ?>>Disetujui</option>
                                                <option value="0" <?= ($hasil['status'] == 0) ? 'selected' : '' ; ?>>Tidak Setuju</option>
                                            </select>
                                        </div>
                                        
                                        <button type="reset" class="btn btn-danger">Reset </button>
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
include"footer.php";
if (isset($_POST ['save'])) {
    $nip_peg_lama=$_POST['nip_peg_lama'];
    $nama_peg=$_POST['nama_peg'];
    $alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];
	$jns_cuti=$_POST['jns_cuti'];
    $tgl_cuti=$_POST['tgl_cuti'];
    $lama_cuti=$_POST['lama_cuti'];
    $status = $_POST['status'];

    if ($nip_peg_lama=="") {
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
        echo "<script language= 'javascript'>alert('No.Telp Masih kosong !')</script>";
    }
	else if ($jns_cuti=="") 
	{
        echo "<script language= 'javascript'>alert('Jenis Cuti Masih kosong !')</script>";
    }
	else if ($tgl_cuti=="") 
	{
        echo "<script language= 'javascript'>alert('Tanggal Cuti Masih kosong !')</script>";
    }
	 else if ($lama_cuti=="") 
	 {
        echo "<script language= 'javascript'>alert('Lama Cuti Masih kosong !')</script>";
    } 
	else 
	{
        $query="UPDATE tb_cuti SET nip_peg='$nip_peg_lama',nama_peg='$nama_peg',alamat='$alamat',telepon='$telepon',jns_cuti='$jns_cuti',tgl_cuti='$tgl_cuti',lama_cuti='$lama_cuti', status='$status' WHERE kode_cuti='$nip_peg_edit'";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil diperbaharui');document.location='data_cuti.php';</script>";
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