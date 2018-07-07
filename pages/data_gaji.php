<?php  
include 'head.php';
include'left.php';
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Gaji</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Gaji
                    		<a href="form_gaji.php" class="btn btn-success" style="margin-left: 700px;"><i class="fa fa-pencil-square-o fa-fw" ></i>Tambah</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIP</th>
                                        <th>NAMA</th>
                                        <th>Gaji Pokok</th>
                                        <th>Tunjangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  
                                		$i=1;
                                		$query="SELECT * FROM tb_gaji";
                                		$sql=mysqli_query($connect,$query);
                                			while ($hasil=mysqli_fetch_array($sql)) {
                                	?>
	                                    <tr>
	                                        <td style="width: 50px;"><?=$i++?></td>
                                            <td style="width: 100px;"><?=$hasil['nip']?></td>
                                            <td style="width: 100px;"><?=$hasil['nama']?></td>
                                            <td style="width: 100px;"><?=$hasil['gaji_pokok']?></td>
                                            <td style="width: 100px;"><?=$hasil['tunjangan']?></td>
	                                        <td style="width: 100px;">
	            <a href="edit_gaji.php?edit=<?=$hasil['nip']?>" class="btn btn-primary">Edit</a>
                <a href="delete_gaji.php?delete=<?=$hasil['nip']?>" class="btn btn-primary" onclick="return confirm ('Yakin Ingin Menghapus Data ini ??')">Delete</a>
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