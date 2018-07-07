<?php  
include 'head.php';
include'left.php';

?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Jabatan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Jabatan
                    		<a href="form_jabatan.php" class="btn btn-success" style="margin-left: 700px;"><i class="fa fa-pencil-square-o fa-fw" ></i>Tambah</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>NIP</center></th>
                                        <th><center>Nama</center></th>
                                        <th><center>Jabatan</center></th>
                                        <th><center>Golongan</center></th>
                                        <th><center>Tingkat Ijazah</center></th>
                                        <th><center>Pendidikan</center></th>
                                        <th><center>Aksi</center></th> 
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  
                                		$i=1;
                                		$query="SELECT * FROM tb_jabatan ORDER By nip ASC";
                                		$sql=mysqli_query($connect,$query);
                                			while ($hasil=mysqli_fetch_array($sql)) {
                                	?>
	                                    <tr>
	                                        <td style="width: 50px;"><?=$i++?></td>
	                                        <td style="width: 200px;"><?=$hasil['nip']?></td>
                                            <td style="width: 200px;"><?=$hasil['nama']?></td>
                                            <td style="width: 100px;"><?=$hasil['nama_jbt']?></td>
                                            <td style="width: 100px;"><?=$hasil['golongan']?></td>
                                            <td style="width: 100px; "><?=$hasil['t_ijazah']?></td>
                                            <td style="width: 100px;"><?=$hasil['pendidikan']?></td>
	                                        <td style="width: 200px;">
	                  <a href="edit_jabatan.php?edit=<?=$hasil['kode_jbt']?>" class="btn btn-primary">Edit</a>
                      <a href="delete_jabatan.php?delete=<?=$hasil['kode_jbt']?>" class="btn btn-primary" onclick="return confirm ('Yakin Ingin Menghapus Data ini ??')">Delete</a>
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