<?php  
include 'head.php';
include'left.php';

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Cuti</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Cuti
                    		<a href="form_cuti.php" class="btn btn-success" style="margin-left: 700px;"><i class="fa fa-pencil-square-o fa-fw" ></i>Tambah</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>NAMA</th>
                                        <th>Alamat</th>
                                        <th>No. Telp</th>
                                        <th>Jenis Cuti</th>
                                        <th>Tanggal Cuti</th>
                                        <th>Lama Cuti</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  
                                		$i=1;
                                		$query="SELECT * FROM tb_cuti";
                                		$sql=mysqli_query($connect,$query);
                                			while ($hasil=mysqli_fetch_array($sql)) {
                                	?>
	                                    <tr>
	                                        <td style="width: 70px;"><?=$i++?></td>
	                                        <td style="width: 200px;"><?=$hasil['nip_peg']?></td>
                                            <td style="width: 200px;"><?=$hasil['nama_peg']?></td>
                                            <td style="width: 120px;"><?=$hasil['alamat']?></td>
                                            <td style="width: 100px;"><?=$hasil['telepon']?></td>
                                            <td style="width: 100px;"><?=$hasil['jns_cuti']?></td>
                                            <td style="width: 120px;"><?=$hasil['tgl_cuti']?></td>
                                            <td style="width: 80px;"><?=$hasil['lama_cuti']?></td>
	                                        <td style="width: 200px;">
	              <a href="edit_cuti.php?edit=<?=$hasil['kode_cuti']?>" class="btn btn-primary">Edit</a>
                  <a href="delete_cuti.php?delete=<?=$hasil['kode_cuti']?>" class="btn btn-primary" onclick="return confirm ('Yakin Ingin Menghapus Data ini ??')">Delete</a>
	                                        </td>
	                                    </tr>
                                	<?php  
                                			}
                                	?>
                                </tbody>
                            </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
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
	<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>