<?php
include 'head.php';
include 'left.php';
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
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><center>No</center></th>
                                        <th><center>NIP</center></th>
                                        <th><center>Nama</center></th>
                                        <th><center>Alamat</center></th>
                                        <th><center>Telepon</center></th>
                                        <th><center>Jenis Cuti</center></th>
                                        <th><center>Tanggal</center></th>
                                        <th><center>Lama Cuti</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i = 1;
                                        $query = "SELECT * FROM tb_cuti WHERE nip_peg='$nip'";
                                        $result = mysqli_query($connect,$query);
                                        while ($hasil = mysqli_fetch_assoc($result)) {

                                    ?>

                                        <tr>
                                            <td style="width: 50px;"><?=$i++?></td>
                                            <td style="width: 200px;"><?=$hasil['nip_peg'];?></td>
                                            <td style="width: 200px;"><?=$hasil['nama_peg'];?></td>
                                            <td style="width: 120px;"><?=$hasil['alamat'];?></td>
                                            <td style="width: 100px;"><?=$hasil['telepon'];?></td>
                                            <td style="width: 100px;"><?=$hasil['jns_cuti'];?></td>
                                            <td style="width: 200px; "><?=$hasil['tgl_cuti'];?></td>
                                            <td style="width: 100px;"><?=$hasil['lama_cuti'];?></td>
                                        </tr>
                                </tbody>
                                <?php
                                    }
                                ?>
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