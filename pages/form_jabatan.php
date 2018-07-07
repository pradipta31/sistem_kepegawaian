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
                                            <option value="Kepala Dinas">Kepala Dinas</option>
                                            <option value="Kepala Seksi">Kepala Seksi</option>
                                            <option value="kepala Bidang">Juru I/C</option>
                                            <option value="Pengawas">Pengawas</option>
                                            <option value="Instruktur">Instruktur</option>
                                            <option value="Sekretaris">Sekretaris</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Kasubag Umum">Kasubag Umum</option>
                                            <option value="Supir">Supir</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label>Golongan</label>
                                            <select class="form-control" name="golongan">
                                            <option value="Juru Muda I/A">Juru Muda I/A</option>
                                            <option value="Juru Muda Tingkat I I/B">Juru Muda Tingkat I I/B</option>
                                            <option value="Juru I/C">Juru I/C</option>
                                            <option value="juru Tingkat I I/D">juru Tingkat I I/D</option>
                                            <option value="Pengatur Muda II/A">Pengatur Muda II/A</option>
                                            <option value="Pengatur Muda Tingkat I II/B">Pengatur Muda Tingkat I II/B</option>
                                            <option value="Pengatur II/C">Pengatur II/C</option>
                                            <option value="Pengatur Tingkat I II/D">Pengatur Tingkat I II/D</option>
                                            <option value="Penata Muda III/A">Penata Muda III/A</option>
                                            <option value="Penata Muda Tingakat I III/B">Penata Muda Tingakat I III/B</option>
                                            <option value="Penata III/C">Penata III/C</option>
                                            <option value="Penata Tingkat I III/D">Penata Tingkat I III/D</option>
                                            <option value="Pembina IV/A">Pembina IV/A</option>
                                            <option value="Pembina Tingkat I IV/B">Pembina Tingkat I IV/B</option>
                                            <option value="Pembina Utama Muda IV/C">Pembina Utama Muda IV/C</option>
                                            <option value="Pembina Utama Madya IV/D">Pembina Utama Madya IV/D</option>
                                            <option value="Pembina Utama IV/D">Pembina Utama IV/D</option>
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

