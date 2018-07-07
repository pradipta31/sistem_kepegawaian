<?php
include 'head.php';
include 'left.php';
?>
         <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Input Data Gaji</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Input Data Gaji
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Golongan Ruang</label>
                                            <select name="kode_gol" class="form-control">
                                            <?php  
                                                $panggil_gol="SELECT * FROM tb_golongan";
                                                $sql=mysqli_query($connect,$panggil_gol);
                                                while ($hasil=mysqli_fetch_array($sql)) {
                                            ?>
                                                <option value="<?=$hasil['kode_gol']?>"><?=$hasil['gol_ruang']?></option>
                                            <?php  
                                                }
                                            ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" name="nip">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Gaji Pokok</label>
                                            <input class="form-control" name="gaji_pokok">
                                        </div>
                                        <div class="form-group">
                                            <label>Tunjangan</label>
                                            <input class="form-control" name="tunjangan">
                                        </div>
                                        <div class="col-lg-12">
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                        <button type="submit" class="btn btn-primary" name="save">Selesai</button>
                                    </form>
                                    </div>

                                </div>
                                <!-- /.col-lg-12 (nested) -->
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
if (isset($_POST['save'])) {
    $kode_gol=$_POST['kode_gol'];
    $nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$gaji_pokok=$_POST['gaji_pokok'];
	$tunjangan=$_POST['tunjangan'];
    if ($nip==""){
        echo"<script language='javascript'>alert('NIP masih kosong')</script>";
    }else if ($nama==""){
        echo"<script language='javascript'>alert('Nama masih kosong')</script>";
    }else if ($gaji_pokok==""){
        echo"<script language='javascript'>alert('Gaji Pokok masih kosong')</script>";
    }else if ($tunjangan==""){
        echo"<script language='javascript'>alert('Tunjangan masih kosong')</script>";
    }else {
        $query="INSERT INTO tb_gaji(nip,nama,kode_gol,gaji_pokok,tunjangan) values ('$nip','$nama','$kode_gol','$gaji_pokok','$tunjangan') ";
        $sql=mysqli_query($connect,$query);
        echo"<script>alert('Data berhasil di input');document.location='data_gaji.php';</script>";
    }
}
?>