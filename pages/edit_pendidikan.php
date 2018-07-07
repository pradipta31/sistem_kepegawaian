<?php
include 'head.php';
include 'left.php';
if (isset($_GET['edit'])) {
  $nip_peg_edit=$_GET['edit'];
  $query="SELECT * FROM tb_pendidikan WHERE kode_pendidikan='$nip_peg_edit'";
  $sql=mysqli_query($connect,$query);
  $hasil=mysqli_fetch_array($sql);
  
}
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Data Pendidikan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit data pendidikan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="">
                                    
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <select name="nip_peg_lama" class="form-control">
                                            <?php  
                                                $panggil_nip="SELECT * FROM tb_pegawai";
                                                $sql=mysqli_query($connect,$panggil_nip);
                                                while ($hasil=mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?=$hasil['nip_peg']?>"><?=$hasil['nip_peg']?></option>
                                            <?php  
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Nama</label>
                                        <select class="form-control" name="nama_peg">
                                            <?php  
                                                $panggil_nama="SELECT * FROM tb_pegawai";
                                                $sql=mysqli_query($connect,$panggil_nama);
                                                while ($hasil1=mysqli_fetch_array($sql)) {
                                            ?>
                                         <option value="<?=$hasil1['nama_peg']?>"><?=$hasil1['nama_peg']?></option>
                                         <?php  
                                                }
                                            ?> 
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pendidikan</label>
                                            <input class="form-control" name="nama_pend" value="<?=$hasil['nama_pend']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tingkat Ijazah</label>
                                            <input class="form-control" name="tingkat_ijazah" value="<?=$hasil['tingkat_ijazah']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Lulus</label>
                                            <input class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="Tahun Lulus" value="<?=$hasil['tahun_lulus']?>" type="text"/>
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
include"footer.php";
if (isset($_POST ['save'])) {
	$nip_peg_lama=$_POST['nip_peg_lama'];
    $nama_peg=$_POST['nama_peg'];
	$nama_pend=$_POST['nama_pend'];
    $tingkat_ijazah=$_POST['tingkat_ijazah'];
	$tahun_lulus=$_POST['tahun_lulus'];
	
  
	if ($nip_peg_lama=="") {
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }
	else if ($nama_peg=="") 
	{
        echo "<script language= 'javascript'>alert('Nama Masih kosong !')</script>";
    }
	 if ($nama_pend=="") 
	{
        echo "<script language= 'javascript'>alert('Nama Pendidikan Masih kosong !')</script>";
    }
	else if ($tingkat_ijazah=="") 
	{
        echo "<script language= 'javascript'>alert('Tingkat Ijazah Masih kosong !')</script>";
    } 
	else if ($tahun_lulus=="") 
	{
        echo "<script language= 'javascript'>alert('Tahun Lulus Masih kosong !')</script>";
    }
	else 
	{
        $query="UPDATE tb_pendidikan SET nip_peg='$nip_peg_lama',nama_peg='$nama_peg',nama_pend='$nama_pend',tingkat_ijazah='$tingkat_ijazah',tahun_lulus='$tahun_lulus' WHERE kode_pendidikan='$nip_peg_edit'";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil diperbaharui');document.location='data_pendidikan.php';</script>";
    }
}
?>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="tahun_lulus"]'); //our date input has the name "date"
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