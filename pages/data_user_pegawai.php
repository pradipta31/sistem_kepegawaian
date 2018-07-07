<?php  
include 'head.php';
include'left.php';
?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pegawai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pegawai
                    		<a href="form_user_pegawai.php" class="btn btn-success" style="margin-left: 700px;"><i class="fa fa-pencil-square-o fa-fw" ></i>Tambah</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>NIP</center></th>
                                        <th><center>Nama</center></th>
                                        <th><center>Tanggal Lahir</center></th>
                                        <th><center>jenis Kelamin</center></th>
                                        <th><center>Agama</center></th>
                                        <th><center>Alamat</center></th>
                                        <th><center>No. Telp</center></th>
                                        <th><center>E-mail</center></th>
                                        <th><center>Aksi</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php  
                                		$i=1;
                                		$query="SELECT * FROM user_pegawai ORDER By nip ASC";
                                		$sql=mysqli_query($connect,$query);
                                			while ($hasil=mysqli_fetch_array($sql)) {
                                	?>
	                                    <tr>
	                                        <td style="width: 50px;"><?=$i++?></td>
	                                        <td style="width: 200px;"><?=$hasil['nip']?></td>
                                            <td style="width: 200px;"><?=$hasil['nama']?></td>
                                            <td style="width: 120px;"><?=$hasil['tgl_lhr']?></td>
                                            <td style="width: 100px;"><?=$hasil['jns_kel']?></td>
                                            <td style="width: 100px;"><?=$hasil['agama']?></td>
                                            <td style="width: 200px; "><?=$hasil['alamat']?></td>
                                            <td style="width: 100px;"><?=$hasil['telp']?></td>
                                            <td style="width: 100px;"><?=$hasil['email']?></td>
	                                        <td style="width: 450px;">
	                  <a href="edit_user_pegawai.php?edit=<?=$hasil['nip']?>" class="btn btn-primary">Edit</a>
                      <a href="delete_user_pegawai.php?delete=<?=$hasil['nip']?>" class="btn btn-primary" onclick="return confirm ('Yakin Ingin Menghapus Data ini ??')">Delete</a>
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
   