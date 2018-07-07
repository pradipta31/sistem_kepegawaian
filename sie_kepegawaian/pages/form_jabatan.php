<?php
include 'head.php';
include 'left.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Input Data Jabatan</h1>
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
                                            <select class="form-control" name="nip">
                                            <?php  
                                                $panggil_nip="SELECT * FROM user_pegawai ORDER By nip ASC";
                                                $sql=mysqli_query($connect,$panggil_nip);
                                                while ($hasil=mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?=$hasil['nip']?>"><?=$hasil['nip']?></option>
                                            <?php  
                                                }
                                            ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                        <label>Nama</label>
                                       <select class="form-control" name="nama">
                                            <?php  
                                                $panggil_nama="SELECT * FROM user_pegawai ORDER By nama ASC";
                                                $sql=mysqli_query($connect,$panggil_nama);
                                                while ($hasil=mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?=$hasil['nama']?>"><?=$hasil['nama']?></option>
                                            <?php  
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label>jabatan</label>
                                            <select class="form-control" name="nama_jbt">
                                            <?php  
                                                $panggil_jbt="SELECT * FROM tb_jbt";
                                                $sql=mysqli_query($connect,$panggil_jbt);
                                                while ($hasil=mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?=$hasil['nama_jbt']?>"><?=$hasil['nama_jbt']?></option>
                                            <?php  
                                                }
                                            ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                         <label>jgolongan</label>
                                            <select class="form-control" name="golongan">
                                            <?php  
                                                $panggil_gol="SELECT * FROM tb_golongan";
                                                $sql=mysqli_query($connect,$panggil_gol);
                                                while ($hasil=mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?=$hasil['golongan']?>"><?=$hasil['golongan']?></option>
                                            <?php  
                                                }
                                            ?>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tingkat Ijazah</label>
                                            <select class="form-control" name="t_ijazah">
                                            <option value= "SMA/SMK">SMA/SMK</option>
                                            <option value="STM">STM</option>
                                            <option value= "D1">D1</option>
                                            <option value="D2">D2</option>
                                            <option value= "D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value= "S2">S2</option>
                                            <option value="S3">S3</option>
                                            </select>
                                            </div>
                                        <div class="form-group">
                                            <label>pendidikan</label>
                                            <input class="form-control"  name="pendidikan">
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
	$nip=$_POST['nip'];
    $nama=$_POST['nama'];
	$nama_jbt=$_POST['nama_jbt'];
	$golongan=$_POST['golongan'];
	$t_ijazah=$_POST['t_ijazah'];
	$pendidikan=$_POST['pendidikan'];
	
    if ($nip=="") 
	{
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }
	else if ($nama=="") 
	{
        echo "<script language= 'javascript'>alert('Nama Masih kosong !')</script>";
    }
	else if ($nama_jbt=="") 
	{
        echo "<script language= 'javascript'>alert('Jabatan Masih kosong !')</script>";
    }
	else if ($golongan=="") 
	{
        echo "<script language= 'javascript'>alert('Nama Golongan Masih kosong !')</script>";
    }
	else if ($t_ijazah=="") 
	{
        echo "<script language= 'javascript'>alert('Tingkat Ijazah Masih kosong !')</script>";
    } 
	else if ($pendidikan=="") 
	{
        echo "<script language= 'javascript'>alert('Pendidikan Masih kosong !')</script>";
    }
	else 
	{
        $query="INSERT INTO tb_jabatan(nip,nama,nama_jbt,golongan,t_ijazah,pendidikan) VALUES('$nip','$nama','$nama_jbt','$golongan','$t_ijazah','$pendidikan')";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil disimpan');document.location='data_jabatan.php';</script>";
    }
}
?>

