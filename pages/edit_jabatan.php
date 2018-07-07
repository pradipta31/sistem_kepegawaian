<?php
include 'head.php';
include 'left.php';
if (isset($_GET['edit'])) {
  $nip_edit=$_GET['edit'];
  $query="SELECT * FROM tb_jabatan WHERE kode_jbt='$nip_edit'";
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
                                            <input class="form-control" name="nip_lama" value="<?=$hasil['nip']?>" readonly='readonly'></div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?=$hasil['nama']?>">
                                        </div>
                                        <div class="form-group">
                                       <label>jabatan</label>
                                        <select class="form-control" name="nama_jbt">
                                            <?php  
                                                $panggil_jbt="SELECT * FROM tb_jbt";
                                                $sql=mysqli_query($connect,$panggil_jbt);
                                                while ($hasil1=mysqli_fetch_array($sql)) {
                                            ?>
                                         <option value="<?=$hasil1['nama_jbt']?>"><?=$hasil1['nama_jbt']?></option>
                                         <?php  
                                                }
                                            ?> 
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <label>golongan</label>
                                        <select class="form-control" name="golongan">
                                            <?php  
                                                $panggil_gol="SELECT * FROM tb_golongan";
                                                $sql=mysqli_query($connect,$panggil_gol);
                                                while ($hasil1=mysqli_fetch_array($sql)) {
                                            ?>
                                         <option value="<?=$hasil1['golongan']?>"><?=$hasil1['golongan']?></option>
                                         <?php  
                                                }
                                            ?> 
                                        </select>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label>Tingkat Ijazah</label>
                                            <select class="form-control" name="t_ijazah">
                                            <option value="SMA/SMK"
                                                    <?php  
                                                        if ($hasil['t_ijazah']=='SMA/SMK') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >SMA/SMK</option>
                                                <option value="STM"
                                                    <?php  
                                                        if ($hasil['t_ijazah']=='STM') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >STM</option>
                                                <option value="D1"
                                                    <?php  
                                                        if ($hasil['t_ijazah']=='D1') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >D1</option>
                                                <option value="D2"
                                                    <?php  
                                                        if ($hasil['t_ijazah']=='D2') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >D2</option>
                                                <option value="D3"
                                                    <?php  
                                                        if ($hasil['t_ijazah']=='D3') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >D3</option>
                                                <option value="S1"
                                                    <?php  
                                                        if ($hasil['t_ijazah']=='S1') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >S1</option>
                                                <option value="S2"
                                                    <?php  
                                                        if ($hasil['t_ijazah']=='S2') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >S2</option>
                                                <option value="S3"
                                                    <?php  
                                                        if ($hasil['t_ijazah']=='S3') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >S3</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>pendidikan</label>
                                            <input class="form-control" name="pendidikan" value="<?=$hasil['pendidikan']?>">
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
    $nip_lama=$_POST['nip_lama'];
    $nama=$_POST['nama'];
    $nama_jbt=$_POST['nama_jbt'];
	$golongan=$_POST['golongan'];
    $t_ijazah=$_POST['t_ijazah'];
    $pendidikan=$_POST['pendidikan'];
    
    if ($nip_lama=="") {
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
        $query="UPDATE tb_jabatan SET nip='$nip_lama',nama='$nama',nama_jbt='$nama_jbt',golongan='$golongan',t_ijazah='$t_ijazah',pendidikan='$pendidikan' WHERE kode_jbt='$nip_edit'";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil diperbaharui');document.location='data_jabatan.php';</script>";
    }
}
?>
