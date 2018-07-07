<?php
include 'head.php';
include 'left.php';
if (isset($_GET['edit'])) {
  $nip_peg_edit=$_GET['edit'];
  $query="SELECT * FROM tb_jabatan WHERE kode_jbt='$nip_peg_edit'";
  $sql=mysqli_query($connect,$query);
  $hasil=mysqli_fetch_array($sql);
  
}
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Data Jabatan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit data Jabatan
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
                                            <select class="form-control" name="nama_peg">
                                            <?php  
                                                $panggil_nama="SELECT * FROM tb_pegawai";
                                                $sql=mysqli_query($connect,$panggil_nama);
                                                while ($hasil=mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?=$hasil['nama_peg']?>"><?=$hasil['nama_peg']?></option>
                                            <?php  
                                                }
                                            ?>
                                        </select>
                                        <div class="form-group">
                                           <label>Jabatan</label>
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
                                            <label>Golongan</label>
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
                                            <label>Pendidikan</label>
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
    $nip_peg_lama=$_POST['nip_peg_lama'];
    $nama_peg=$_POST['nama_peg'];
    $nama_jbt=$_POST['nama_jbt'];
	$golongan=$_POST['golongan'];
    $t_ijazah=$_POST['t_ijazah'];
    $pendidikan=$_POST['pendidikan'];
    
    if ($nip_peg_lama=="") {
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }
	else if ($nama_peg=="") 
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
        $query="UPDATE tb_jabatan SET nip_peg='$nip_peg_lama',nama_peg='$nama_peg',nama_jbt='$nama_jbt',golongan='$golongan',t_ijazah='$t_ijazah',pendidikan='$pendidikan' WHERE kode_jbt='$nip_peg_edit'";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil diperbaharui');document.location='data_jabatan.php';</script>";
    }
}
?>











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
                                            <select class="form-control" name="nip_peg">
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
                                                while ($hasil=mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?=$hasil['nama_peg']?>"><?=$hasil['nama_peg']?></option>
                                            <?php  
                                                }
                                            ?>
                                        </select>
                                           <div class="form-group">
                                           <label>Jabatan</label>
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
                                            <label>Golongan</label>
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
                                            <label>Pendidikan</label>
                                            <input class="form-control" name="pendidikan">
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
	$nama_jbt=$_POST['nama_jbt'];
	$golongan=$_POST['golongan'];
	$t_ijazah=$_POST['t_ijazah'];
	$pendidikan=$_POST['pendidikan'];
	
    if ($nip_peg=="") 
	{
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }
	else if ($nama_peg=="") 
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
        $query="INSERT INTO tb_jabatan(nip_peg,nama_peg,nama_jbt,golongan,t_ijazah,pendidikan) VALUES('$nip_peg','$nama_peg','$nama_jbt','$golongan','$t_ijazah','$pendidikan')";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil disimpan');document.location='data_jabatan.php';</script>";
    }
}
?>

