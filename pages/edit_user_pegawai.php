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
                    <h1 class="page-header"> Edit Data Pegawai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit data pegawai
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
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" id="tgl_lhr" name="tgl_lhr" placeholder="Tanggal Lahir" value="<?=$hasil['tgl_lhr']?>" type="text"/>
                                        </div>
                                        <div class="form-group" >
                                            <label>Jenis kelamin</label>
                                            <select class="form-control" name="jns_kel">
                                                <option value="Laki-laki"
                                                    <?php  
                                                        if ($hasil['jns_kel']=='Laki-laki') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >Laki-laki</option>
                                                <option value="Perempuan"
                                                    <?php  
                                                        if ($hasil['jns_kel']=='Perempuan') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama">
                                            <option value="Hindu"
                                                    <?php  
                                                        if ($hasil['agama']=='Hindu') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >Hindu</option>
                                                <option value="Islam"
                                                    <?php  
                                                        if ($hasil['agama']=='Islam') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >Islam</option>
                                                <option value="Kristen"
                                                    <?php  
                                                        if ($hasil['agama']=='Kristen') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >Kristen</option>
                                                <option value="Buddha"
                                                    <?php  
                                                        if ($hasil['agama']=='Buddha') {
                                                            echo"selected='selected'";   
                                                        }
                                                    ?>
                                                >Buddha</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control " name="alamat"><?=$hasil['alamat']?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>No.Telp</label>
                                            <input class="form-control" name="telp" value="<?=$hasil['telp']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" name="email" value="<?=$hasil['email']?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Ubah Password</label>
                                            <input class="form-control" name="password" value="<?=$hasil['password']?>">
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
    $tgl_lhr=$_POST['tgl_lhr'];
	$jns_kel=$_POST['jns_kel'];
	$agama=$_POST['agama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $email=$_POST['email'];
	$password=$_POST['password'];
    if ($nip_lama=="") {
        echo "<script language= 'javascript'>alert('NIP Masih kosong !')</script>";
    }
	else if ($nama=="") 
	{
        echo "<script language= 'javascript'>alert('Nama Masih kosong !')</script>";
    }
	else if ($tgl_lhr=="") 
	{
        echo "<script language= 'javascript'>alert('Tanggal Lahir Masih kosong !')</script>";
    } 
	else if ($jns_kel=="") 
	{
        echo "<script language= 'javascript'>alert('jenis kelamin Masih kosong !')</script>";
    }
	else if ($agama=="") 
	{
        echo "<script language= 'javascript'>alert('Agama Masih kosong !')</script>";
    }
	else if ($alamat=="") 
	{
        echo "<script language= 'javascript'>alert('Alamat Masih kosong !')</script>";
    }
	 else if ($telp=="") 
	 {
        echo "<script language= 'javascript'>alert('No.Telp Masih kosong !')</script>";
    } 
	 else if ($email=="") 
	 {
        echo "<script language= 'javascript'>alert('Email Masih kosong !')</script>";
    } 
	else 
	{
        $query="UPDATE user_pegawai SET nama='$nama',tgl_lhr='$tgl_lhr',jns_kel='$jns_kel',agama='$agama',alamat='$alamat',telp='$telp',email='$email',password='$password' WHERE nip='$nip_lama'";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil diperbaharui');document.location='data_user_pegawai.php';</script>";
    }
}
?>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="tgl_lhr"]'); //our date input has the name "date"
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