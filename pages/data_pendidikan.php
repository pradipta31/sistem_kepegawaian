<?php  
include 'head.php';
include'left.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pendidikan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pendidikan
                    		<a href="form_pendidikan.php" class="btn btn-success" style="margin-left: 700px;"><i class="fa fa-pencil-square-o fa-fw" ></i>Tambah</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nip</th>
                                        <th>Nama</th>
                                        <th>Nama Pendidikan</th>
                                        <th>Tingkat Ijazah</th>
                                        <th>Tahun Lulus</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  
                                		$i=1;
                                		$query="SELECT * FROM tb_pendidikan";
                                		$sql=mysqli_query($connect,$query);
                                			while ($hasil=mysqli_fetch_array($sql)) {
                                	?>
	                                    <tr>
	                                        <td style="width: 50px;"><?=$i++?></td>
                                             <td style="width: 150px;"><?=$hasil['nip_peg']?></td>
                                            <td style="width: 150px;"><?=$hasil['nama_peg']?></td>
                                            <td style="width: 150px;"><?=$hasil['nama_pend']?></td>
                                            <td style="width: 50px;"><?=$hasil['tingkat_ijazah']?></td>
                                            <td style="width: 100px;"><?=$hasil['tahun_lulus']?></td>
                                            <td style="width: 150px;">
	                       <a href="edit_pendidikan.php?edit=<?=$hasil['kode_pendidikan']?>"class="btn btn-primary">Edit</a>
                           <a href="delete_pendidikan.php?delete=<?=$hasil['kode_pendidikan']?>" class="btn btn-primary" onclick="return confirm ('Yakin Ingin Menghapus Data ini ??')">Delete</a>
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