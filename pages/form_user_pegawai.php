<?php
include 'head.php';
include 'left.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Input Data Pegawai</h1>
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
                                            <input class="form-control" name="nip">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" id="tgl_lhr" name="tgl_lhr" placeholder="Tanggal Lahir" type="text"/></div>
                                         <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jns_kel">
                                           	<option value= "Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama">
                                           	<option value= "Hindu">Hindu</option>
                                            <option value="Islam">Islam</option>
                                            <option value= "Kristen">Kristen</option>
                                            <option value="Buddha">Buddha</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control " name="alamat"></textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>No.Telp</label>
                                            <input class="form-control" name="telp">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" >
                                        </div>
                                        <div class="form-group">
                                            <label>Hak Akses</label>
                                            <select class="form-control" name="level">
                                                <option >--pilih hak akses--</option>
                                                <option value="PIMPINAN">PIMPINAN</option>
                                                <option value="PETUGAS">PETUGAS</option>
                                                <option value="PEGAWAI">PEGAWAI</option>
                                                
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

include 'footer.php';
if (isset($_POST ['save'])) {
	$nip=$_POST['nip'];
    $nama=$_POST['nama'];
	$tgl_lhr=$_POST['tgl_lhr'];
	$jns_kel=$_POST['jns_kel'];
	$agama=$_POST['agama'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	
    if ($nip=="") 
	{
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
        echo "<script language= 'javascript'>alert('Jenis Kelamin Masih kosong !')</script>";
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
        echo "<script language= 'javascript'>alert('Telepon Masih kosong !')</script>";
    }
	else if ($email=="") 
	{
        echo "<script language= 'javascript'>alert('Email Masih kosong !')</script>";
    }
	else if ($password=="") 
	{
        echo "<script language= 'javascript'>alert('Password Masih kosong !')</script>";
    }
	else if ($level=="") 
	{
        echo "<script language= 'javascript'>alert('level Masih kosong !')</script>";
    }
	else 
	{
        $query="INSERT INTO user_pegawai(nip,nama,tgl_lhr,jns_kel,agama,alamat,telp,email,password,level) VALUES('$nip','$nama','$tgl_lhr','$jns_kel','$agama','$alamat','$telp','$email','$password','$level')";
        $sql=mysqli_query($connect,$query);
        echo "<script>alert('Data berhasil disimpan');document.location='data_user_pegawai.php';</script>";
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