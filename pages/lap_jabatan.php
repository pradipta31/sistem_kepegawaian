<?php  
include 'head.php';
include 'left.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Laporan Jabatan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Laporan Jabatan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
<br>
<button style="margin-left:5px" type="button" id="cetak_surat" onclick="tinyMCE.activeEditor.getWin().print();" class="btn btn-success"><i class="fa fa-print"></i> Cetak Laporan</button>
<form method="post" style="margin-left:5px">
<br>
<textarea name="pageBody" id="pageBody" rows="30">
<img src="../img/xxx.png" style="width: 100px; height: 100px;"> 
  <h3 align="center" style="font-size:18px; margin-top: -80px;">DINAS TENAGA KERJA Dan ESDM PROVINSI Bali</h3>
  <h3 align="center" style="font-size:18px; margin-bottom: : 30px;"></h3>
  <hr></hr>
			<br>
              <div class="row" style="margin-top:10px; margin-left:0px;">
              <h3 align="center" style="font-size:18px; margin-bottom: : 30px;">Laporan Data Jabatan Pegawai</h3>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                  <br>
                                    <table class="table table-bordered" border='1' cellpadding="0" cellspacing="0">
                                        <thead>
                                            <tr>
                                        <th style="width:80px; border:1px solid #000;">No</th>
                                        <th style="width:400px; border:1px solid #000;">NIP</th>
                                        <th style="width:400px; border:1px solid #000;">NAMA</th>
                                        <th style="width:200px; border:1px solid #000;">Jabatan</th>
                                        <th style="width:300px; border:1px solid #000;">Golongan</th>
                                        <th style="width:200px; border:1px solid #000;">Tingkat Ijazah</th>
                                        <th style="width:200px; border:1px solid #000;">Pendidikan</th>
                                    </tr>
<?php  
                                		$i=1;
                                		$query="SELECT * FROM tb_jabatan";
                                		$sql=mysqli_query($connect,$query);
                                			while ($hasil=mysqli_fetch_array($sql)) {
                                	?>
	                                    <tr>
	                                       <td align="center" style="border:1px #000 solid"><?=$i++?></td>
	                                        <td align="left" style="border:1px #000 solid"><?=$hasil['nip']?></td>
                                            <td align="left" style="border:1px #000 solid"><?=$hasil['nama']?></td>
                                            <td align="center" style="border:1px #000 solid"><?=$hasil['nama_jbt']?></td>
                                            <td align="center" style="border:1px #000 solid"><?=$hasil['golongan']?></td>
                                            <td align="center" style="border:1px #000 solid"><?=$hasil['t_ijazah']?></td>
                                            <td align="center" style="border:1px #000 solid"><?=$hasil['pendidikan']?></td>
                                            </tr>
                                    <?php  
                                			}
                                	?>      
                      </table>
                       <br>
                      <br>
                      <br>
                      <br>
                      <center><b>Denpasar, <?php $tgl=date('d-m-Y'); echo $tgl; ?></b></center>
                      <center><b>Kepala Dinas Tenaga Kerja dan Energi</b></center>
                      <center><b>Sumber Daya Mineral Provinsi Bali</b></center>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <center><u><b>NI LUH MADE WIRATMI.SE.,M.MSI</b></u></center>
                      <center><b>Pembina Tingkat I</b></center>
                      <center><b>NIP. 1962117 198303.2.013</b></center>
                        </div>
                    </div>
</div>
      </textarea>
</form>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper --> 
    </div>

<?php  
include"footer.php";
?>
    <script type="text/javascript" src="../tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
selector: "textarea",
    menubar: false,
    toolbar: false,
    visual: false,
    height : 1000,
    width: 900,
    readonly : true,
    plugins: "pagebreak",  
    });
    </script>
  