<?php  
include 'head.php';
include 'left.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Laporan Data Pegawai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Laporan Data Pegawai
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
              <h3 align="center" style="font-size:18px; margin-bottom: : 30px;">Laporan Data Pegawai</h3>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                  <br>
                                    <table class="table table-bordered" border='1' cellpadding="0" cellspacing="0">
                                        <thead>
                                            <tr>
                                        <th style="width:100px; border:1px solid #000;">No</th>
                                        <th style="width:400px; border:1px solid #000;">NIP</th>
                                        <th style="width:400px; border:1px solid #000;">NAMA</th>
                                        <th style="width:200px; border:1px solid #000;">Tanggal Lahir</th>
                                        <th style="width:200px; border:1px solid #000;">jenis Kelamin</th>
                                        <th style="width:200px; border:1px solid #000;">Agama</th>
                                        <th style="width:300px; border:1px solid #000;">Alamat</th>
                                        <th style="width:300px; border:1px solid #000;">No.Telp</th>
                                        <th style="width:200px; border:1px solid #000;">E-mail</th>
                                    </tr>
<?php  
                                		$i=1;
                                		$query="SELECT * FROM user_pegawai";
                                		$sql=mysqli_query($connect,$query);
                                			while ($hasil=mysqli_fetch_array($sql)) {
                                	?>
	                                    <tr>
	                                        <td align="center" style="border:1px #000 solid""><?=$i++?></td>
	                                        <td align="left" style="border:1px #000 solid"><?=$hasil['nip']?></td>
                                            <td align="left" style="border:1px #000 solid"><?=$hasil['nama']?></td>
                                            <td align="center" style="border:1px #000 solid"><?=$hasil['tgl_lhr']?></td>
                                            <td align="center" style="border:1px #000 solid"><?=$hasil['jns_kel']?></td>
                                            <td align="center" style="border:1px #000 solid"><?=$hasil['agama']?></td>
                                            <td align="left" style="border:1px #000 solid"><?=$hasil['alamat']?></td>
                                            <td align="center" style="border:1px #000 solid"><?=$hasil['telp']?></td>
                                            <td align="center" style="border:1px #000 solid"><?=$hasil['email']?></td>
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
    readonly :true,
    plugins: "pagebreak",  
    });
    </script>
  