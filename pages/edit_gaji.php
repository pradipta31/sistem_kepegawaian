<?php
include 'head.php';
include 'left.php';
if (isset($_GET['edit'])) {
  $nip_edit=$_GET['edit'];
  $query="SELECT * FROM tb_gaji WHERE nip='$nip_edit'";
  $sql=mysqli_query($connect,$query);
  $hasil=mysqli_fetch_array($sql);
  
}
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Data Gaji</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit Data Gaji
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="POST" action="">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" name="nip_lama" value="<?=$hasil['nip']?>" readonly='readonly'>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?=$hasil['nama']?>">
                                        </div>
                                       <div class="form-group">
                                            <label>Gaji Pokok</label>
                                            <input class="form-control" name="gaji_pokok" value="<?=$hasil['gaji_pokok']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tunjangan</label>
                                            <input class="form-control" name="tunjangan" value="<?=$hasil['tunjangan']?>">
                                        </div>
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
include"footer.php";
if (isset($_POST ['save'])) {
    $nip_lama=$_POST['nip_lama'];
	$nama=$_POST['nama'];
	$gaji_pokok=$_POST['gaji_pokok'];
	$tunjangan=$_POST['tunjangan'];

    if ($nip_lama=="") {
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }
	else if ($nama=="") 
	{
        echo "<script language= 'javascript'>alert('Nama Masih kosong !')</script>";
    }
	else if ($gaji_pokok=="") 
	{
        echo "<script language= 'javascript'>alert('Gaji pokok Masih kosong !')</script>";
    }
	else if ($tunjangan=="") 
	{
        echo "<script language= 'javascript'>alert('Tunjangan Masih kosong !')</script>";
    }
	else 
	{
        $query="UPDATE tb_gaji SET nama='$nama',gaji_pokok='$gaji_pokok',tunjangan='$tunjangan' WHERE nip='$nip_lama'";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil diperbaharui');document.location='data_gaji.php';</script>";
    }
}
?>
