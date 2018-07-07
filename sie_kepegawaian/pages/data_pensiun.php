<?php  
include 'head.php';
include'left.php';
include 'footer.php';

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pensiun</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pensiun
                    		<a href="form_pensiun.php" class="btn btn-success" style="margin-left: 500px;"><i class="fa fa-pencil-square-o fa-fw" ></i> Tambah</a>
                            <a href="lap_pensiun.php" class="btn btn-success" style="margin-left: 0px;"><i class="fa fa-print"></i> Cetak Semua</a>
                            <a href="cetak_pen.php" class="btn btn-success" style="margin-left: 0px;"><i class="fa fa-print"></i> Cetak Sesuai Tanggal</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>NAMA</th>
                                        <th>Jenis Pensiun</th>
                                        <th>Tanggal Pensiun</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  
                                		$i=1;
                                		$query="SELECT * FROM tb_pensiun";
                                		$sql=mysqli_query($connect,$query);
                                			while ($hasil=mysqli_fetch_array($sql)) {
                                	?>
	                                    <tr>
	                                        <td style="width: 50px;"><?=$i++?></td>
                                            <td style="width: 100px;"><?=$hasil['nip_peg']?></td>
                                            <td style="width: 150px;"><?=$hasil['nama_peg']?></td>
                                            <td style="width: 100px;"><?=$hasil['jenis_pensiun']?></td>
                                            <td style="width: 100px;"><?=$hasil['tgl_pensiun']?></td>
                                            <td style="width: 100px;"><?=$hasil['alamat_pensiun']?></td>
	                                        <td style="width: 120px;">
	                    <a href="edit_pensiun.php?edit=<?=$hasil['kode_pensiun']?>"class="btn btn-primary">Edit</a>
                        <a href="delete_pensiun.php?delete=<?=$hasil['kode_pensiun']?>" class="btn btn-primary" onclick="return confirm ('Yakin Ingin Menghapus Data ini ??')">Delete</a>
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
    
	<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>