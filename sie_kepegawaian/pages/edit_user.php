<?php
include 'head.php';
include 'left.php';
if (isset($_GET['edit'])) {
  $nip_edit=$_GET['edit'];
  $query="SELECT * FROM user_pegawai WHERE nip='$nip_edit'";
  $sql=mysqli_query($connect,$query);
  $hasil=mysqli_fetch_array($sql);
  
}
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Data user</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit data user
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
                                            <label>Nama user</label>
                                            <input class="form-control" name="nama" value="<?=$hasil['nama']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" value="<?=$hasil['password']?>">
                                        </div>
                                        <div class="form-group" >
                                        <label>Hak Akses</label>
                                            <select class="form-control" name="level">
                                            	<option>--pilih hak akses--</option> 
                                                <option value="PIMPINAN"
                                                    <?php  
                                                        if ($hasil['level']=='PIMPINAN') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
													
                                                >PIMPINAN</option>
                                                <option value="PETUGAS"
                                                  <?php  
                                                        if ($hasil['level']=='PETUGAS') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>  
                                                >PETUGAS</option>
                                                <option value="PEGAWAI"
                                                  <?php  
                                                        if ($hasil['level']=='PEGAWAI') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>  
                                                >PEGAWAI</option>
                                            </select>
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
    $nip_lama=$_POST['nip_lama'];
    $nama=$_POST['nama'];
    $password=$_POST['password'];
	$level=$_POST['level'];
    if ($nip_lama=="") {
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }else if ($nama=="") {
        echo "<script language= 'javascript'>alert('Nama Masih kosong !')</script>";
    }else if ($password=="") {
        echo "<script language= 'javascript'>alert('Password Masih kosong !')</script>";
    }else if ($level=="") {
        echo "<script language= 'javascript'>alert('Hak Akses Masih kosong !')</script>";
    } else {
        $query="UPDATE user_pegawai SET nama='$nama',password='$password',level='$level' WHERE nip='$nip_lama'";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil diperbaharui');document.location='data_user.php';</script>";
    }
}
?>