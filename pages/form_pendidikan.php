<?php
include 'head.php';
include 'left.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Input Data Pendidikan</h1>
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
                                            <label>Nama Golongan</label>
                                            <select name="kode_gol" class="form-control">
                                            <?php  
                                                $panggil_gol="SELECT * FROM tb_golongan";
                                                $sql=mysqli_query($connect,$panggil_gol);
                                                while ($hasil=mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?=$hasil['kode_gol']?>"><?=$hasil['nama_gol']?></option>
                                            <?php  
                                                }
                                            ?>
                                            </select></div>
                                           <div class="form-group">
                                            <label>NIP</label>
                                            <select name="nip_peg" class="form-control">
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
                                            <input class="form-control" name="nama_pend">
                                        </div>
                                        <div class="form-group">
                                            <label>Tingkat ijazah</label>
                                            <input class="form-control" name="tingkat_ijazah">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Lulus</label>
                                            <input class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="Tahun Lulus" type="text"/></div>
                                        <button type="reset" class="btn btn-danger">Kembali</button>
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
	$kode_gol=$_POST['kode_gol'];
	$nip_peg=$_POST['nip_peg'];
    $nama_peg=$_POST['nama_peg'];
	$nama_pend=$_POST['nama_pend'];
    $tingkat_ijazah=$_POST['tingkat_ijazah'];
	$tahun_lulus=$_POST['tahun_lulus'];
	
    if ($nip_peg=="") 
	{
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }
	else if ($nama_peg=="") 
	{
        echo "<script language= 'javascript'>alert('Nama Masih kosong !')</script>";
    }
	else if ($nama_pend=="") 
	{
        echo "<script language= 'javascript'>alert('Nama pendidikan Masih kosong !')</script>";
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
        $query="INSERT INTO tb_pendidikan(nip_peg,nama_peg,nama_pendidikan,tingkat_ijazah,tahun_lulus,kode_gol) VALUES('$nip_peg','$nama_peg','$nama_pend','$tingkat_ijazah','$tahun_lulus','$kode_gol')";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil disimpan');document.location='data_pendidikan.php';</script>";
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